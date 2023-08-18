<template>
  <div>
    <!-- Modal -->
    <div
      class="modal fade"
      id="addEditCountryModal"
      role="dialog"
      aria-labelledby="addEditCountryModalLabel"
      aria-hidden="true"
      data-keyboard="false" data-backdrop="static"
    >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5
              class="modal-title"
              id="addEditCountryModalLabel"
              v-if="editMode === false"
            >
              {{ $t("message.CREATE_COUNTRY") }}
            </h5>
            <h5 class="modal-title" id="addEditCountryModalLabel" v-else>
              {{ $t("message.EDIT_COUNTRY") }}
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
          <form @submit.prevent="editMode ? editCountry() : addCountry()">
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
                  >{{ $t("message.STATE")
                  }}<span class="required-star">*</span></label
                >
                <input
                  v-model="form.state"
                  v-bind:placeholder="$t('message.STATE')"
                  type="text"
                  name="state"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('state') }"
                />
                <div
                  class="error-message"
                  v-if="form.errors.has('state')"
                  v-html="form.errors.get('state')"
                />
              </div>
            </div>
            <div class="modal-footer">
              <button
                @click.prevent="addCountry"
                v-if="editMode === false"
                type="submit"
                class="btn btn-primary"
              >
                {{ $t("message.CREATE_COUNTRY") }}
              </button>
              <button
                @click.prevent="editCountry"
                v-else
                type="submit"
                class="btn btn-primary"
              >
                {{ $t("message.EDIT_COUNTRY") }}
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
  name: "addEditCountryModal",
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
        state: "",
      }),
    };
  },
  methods: {
    addCountry() {
      if (this.is("Super Admin") || this.can("create_country")) {
        if (!this.fileError) {
          this.$Progress.start();
          this.form
            .post("api/countries")
            .then(() => {
              Fire.$emit("reloadCountries");
              $("#addEditCountryModal").modal("hide");
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
    editCountry() {
      if (this.is("Super Admin") || this.can("edit_country")) {
        if (!this.fileError) {
          this.$Progress.start();
          this.form
            .put("api/countries/" + this.form.id)
            .then(() => {
              Fire.$emit("reloadCountries");
              $("#addEditCountryModal").modal("hide");
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
    $("#addEditCountryModal").on("show.bs.modal", function (e) {
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