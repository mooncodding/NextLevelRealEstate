<template>
  <div>
    <!-- Modal -->
    <div
      class="modal fade"
      id="addEditTagModal"
      role="dialog"
      aria-labelledby="addEditTagModalLabel"
      aria-hidden="true"
      data-keyboard="false" data-backdrop="static"
    >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5
              class="modal-title"
              id="addEditTagModalLabel"
              v-if="editMode === false"
            >
              {{ $t("message.CREATE_TAG") }}
            </h5>
            <h5 class="modal-title" id="addEditTagModalLabel" v-else>
              {{ $t("message.EDIT_TAG") }}
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
          <form @submit.prevent="editMode ? editTag() : addTag()">
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
            </div>
            <div class="modal-footer">
              <button
                @click.prevent="addTag"
                v-if="editMode === false"
                type="submit"
                class="btn btn-primary"
              >
                {{ $t("message.CREATE_TAG") }}
              </button>
              <button
                @click.prevent="editTag"
                v-else
                type="submit"
                class="btn btn-primary"
              >
                {{ $t("message.EDIT_TAG") }}
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
  name: "addEditTagModal",
  data() {
    return {
      csrf: document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content"),
      roles: [],
      editMode: "",
      fileError: 0,
      roles: [],
      // Create a new form instance
      form: new form({
        id: "",
        name: "",
      }),
    };
  },
  methods: {
    addTag() {
      if (this.is("Super Admin") || this.can("create_tag")) {
        if (!this.fileError) {
          this.$Progress.start();
          this.form
            .post("api/tags")
            .then(() => {
              Fire.$emit("reloadTags");
              $("#addEditTagModal").modal("hide");
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
    editTag() {
      if (this.is("Super Admin") || this.can("edit_tag")) {
        if (!this.fileError) {
          this.$Progress.start();
          this.form
            .put("api/tags/" + this.form.id)
            .then(() => {
              Fire.$emit("reloadTags");
              $("#addEditTagModal").modal("hide");
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
  },
  mounted() {
    var form = this.form;
    var that = this;
    $("#addEditTagModal").on("show.bs.modal", function (e) {
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