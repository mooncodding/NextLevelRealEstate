<template>
  <div>
    <!-- Modal -->
    <div
      class="modal fade"
      id="addEditPropertyStatusModal"
      role="dialog"
      aria-labelledby="addEditPropertyStatusModalLabel"
      aria-hidden="true"
      data-keyboard="false" data-backdrop="static"
    >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5
              class="modal-title"
              id="addEditPropertyStatusModalLabel"
              v-if="editMode === false"
            >
              {{ $t("message.CREATE_PROPERTY_STATUS") }}
            </h5>
            <h5 class="modal-title" id="addEditPropertyStatusModalLabel" v-else>
              {{ $t("message.EDIT_PROPERTY_STATUS") }}
            </h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form @submit.prevent="editMode ? editPropertyStatus() : addPropertyStatus()">
            <input type="hidden" name="_token" :value="csrf" />
            <div class="modal-body">
              <div class="form-group">
                <label
                  >{{ $t("message.NAME")
                  }}<span class="required-star">*</span></label
                >
                <input
                  v-model="form.name"
                  v-bind:placeholder="$t('message.NAME')"
                  type="text"
                  name="name"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('name') }"
                />
                <div
                  class="error-message"
                  v-if="form.errors.has('name')"
                  v-html="form.errors.get('name')"
                />
              </div>

              <div class="form-group">
                <label>{{ $t("message.IMAGE") }}*</label>
                <input
                  @change="addPhoto"
                  type="file"
                  name="image"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('image') }"
                />
                <div
                  class="error-message"
                  v-if="form.errors.has('image')"
                  v-html="form.errors.get('image')"
                />
              </div>
            </div>
            <div class="modal-footer">
              <button
                @click.prevent="addPropertyStatus"
                v-if="editMode === false"
                type="submit"
                class="btn btn-primary"
              >
                {{ $t("message.CREATE_PROPERTY_STATUS") }}
              </button>
              <button
                @click.prevent="editPropertyStatus"
                v-else
                type="submit"
                class="btn btn-primary"
              >
                {{ $t("message.EDIT_PROPERTY_STATUS") }}
              </button>

              <button type="button" class="btn btn-danger" data-dismiss="modal">
                {{ $t("message.CLOSE") }}
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: "addEditPropertyStatusModal",
  data() {
    return {
      csrf: document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content"),
      roles: [],
      editMode: "",
      fileError: 0,
      // Create a new form instance
      form: new form({
        id: "",
        name: "",
        image: "",
      }),
    };
  },
  methods: {
    addPropertyStatus() {
      if (this.is("Super Admin") || this.can("create_property_status")) {
        if (!this.fileError) {
          this.$Progress.start();
          this.form
            .post("api/propertyStatus")
            .then(() => {
              Fire.$emit("reloadPropertyStatus");
              $("#addEditPropertyStatusModal").modal("hide");
              toast.fire({
                icon: "success",
                title: this.$t("message.CREATED_MESSAGE_SUCCESS"),
              });
              this.$Progress.finish();
            })
            .catch(() => {
              this.$Progress.fail();
              toast.fire({
                icon: "warning",
                title: this.$t("message.CREATED_MESSAGE_ERROR"),
              });
            });
        } else {
          this.$Progress.fail();
          toast.fire({
            icon: "warning",
            title: this.$t("message.FLIE_SIZE_ERROR"),
          });
        }
      } else {
        swal.fire({
          text: this.$t("message.UNAUTHORIZED"),
          icon: "warning",
        });
      }
    },
    editPropertyStatus() {
      if (this.is("Super Admin") || this.can("edit_property_status")) {
        if (!this.fileError) {
          this.$Progress.start();
          this.form
            .put("api/propertyStatus/" + this.form.id)
            .then(() => {
              Fire.$emit("reloadPropertyStatus");
              $("#addEditPropertyStatusModal").modal("hide");
              toast.fire({
                icon: "success",
                title: this.$t("message.EDIT_MESSAGE_SUCCESS"),
              });
              this.$Progress.finish();
            })
            .catch(() => {
              this.$Progress.fail();
              toast.fire({
                icon: "warning",
                title: this.$t("message.EDIT_MESSAGE_ERROR"),
              });
            });
        } else {
          this.$Progress.fail();
          toast.fire({
            icon: "warning",
            title: this.$t("message.FLIE_SIZE_ERROR"),
          });
        }
      } else {
        swal.fire({
          text: this.$t("message.UNAUTHORIZED"),
          icon: "warning",
        });
      }
    },
    addPhoto(e) {
      let file = e.target.files[0];
      let reader = new FileReader();
      reader.onloadend = () => {
        this.form.image = reader.result;
      };
      reader.readAsDataURL(file);
    },
  },
  mounted() {
    var form = this.form;
    var that = this;
    $("#addEditPropertyStatusModal").on("show.bs.modal", function (e) {
      if (e.relatedTarget) {
        that.editMode = true;
        form.fill(e.relatedTarget);
      } else {
        form.reset();
        that.editMode = false;
      }
    });
  },
};
</script>