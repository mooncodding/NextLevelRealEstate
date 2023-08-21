<template>
  <div>
    <!-- Modal -->
    <div
      class="modal fade"
      id="addEditPropertyTypeModal"
      role="dialog"
      aria-labelledby="addEditPropertyTypeModalLabel"
      aria-hidden="true"
      data-keyboard="false" data-backdrop="static"
    >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5
              class="modal-title"
              id="addEditPropertyTypeModalLabel"
              v-if="editMode === false"
            >
              {{ $t("message.CREATE_PROPERTY_TYPE") }}
            </h5>
            <h5 class="modal-title" id="addEditPropertyTypeModalLabel" v-else>
              {{ $t("message.EDIT_PROPERTY_TYPE") }}
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
          <form @submit.prevent="editMode ? editPropertyType() : addPropertyType()">
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
                <label
                  >{{ $t("message.DESCRIPTION")
                  }}<span class="required-star"></span></label
                >
                <textarea v-model="form.description" class="form-control"></textarea>
                <div
                  class="error-message"
                  v-if="form.errors.has('description')"
                  v-html="form.errors.get('description')"
                />
              </div>
              <div class="form-group">
                <label>{{ $t("message.BANNER_IMAGE") }}*</label>
                <input
                  @change="addPhoto"
                  type="file"
                  name="banner_image"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('banner_image') }"
                />
                <div
                  class="error-message"
                  v-if="form.errors.has('banner_image')"
                  v-html="form.errors.get('banner_image')"
                />
              </div>
            </div>
            <div class="modal-footer">
              <button
                @click.prevent="addPropertyType"
                v-if="editMode === false"
                type="submit"
                class="btn btn-primary"
              >
                {{ $t("message.CREATE_PROPERTY_TYPE") }}
              </button>
              <button
                @click.prevent="editPropertyType"
                v-else
                type="submit"
                class="btn btn-primary"
              >
                {{ $t("message.EDIT_PROPERTY_TYPE") }}
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
  name: "addEditPropertyTypeModal",
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
        description: "",
        banner_image: "",
      }),
    };
  },
  methods: {
    addPropertyType() {
      if (this.is("Super Admin") || this.can("create_property_type")) {
        if (!this.fileError) {
          this.$Progress.start();
          this.form
            .post("api/propertyTypes")
            .then(() => {
              Fire.$emit("reloadPropertyTypes");
              $("#addEditPropertyTypeModal").modal("hide");
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
    editPropertyType() {
      if (this.is("Super Admin") || this.can("edit_property_type")) {
        if (!this.fileError) {
          this.$Progress.start();
          this.form
            .put("api/propertyTypes/" + this.form.id)
            .then(() => {
              Fire.$emit("reloadPropertyTypes");
              $("#addEditPropertyTypeModal").modal("hide");
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
        this.form.banner_image = reader.result;
      };
      reader.readAsDataURL(file);
    },
  },
  mounted() {
    var form = this.form;
    var that = this;
    $("#addEditPropertyTypeModal").on("show.bs.modal", function (e) {
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