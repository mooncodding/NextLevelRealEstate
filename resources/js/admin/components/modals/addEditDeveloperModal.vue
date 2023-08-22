<template>
  <div>
    <!-- Modal -->
    <div
      class="modal fade"
      id="addEditDeveloperModal"
      role="dialog"
      aria-labelledby="addEditDeveloperModalLabel"
      aria-hidden="true"
      data-keyboard="false" data-backdrop="static"
    >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5
              class="modal-title"
              id="addEditDeveloperModalLabel"
              v-if="editMode === false"
            >
              {{ $t("message.CREATE_DEVELOPER") }}
            </h5>
            <h5 class="modal-title" id="addEditDeveloperModalLabel" v-else>
              {{ $t("message.EDIT_DEVELOPER") }}
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
          <form @submit.prevent="editMode ? editDeveloper() : addDeveloper()">
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
                  >{{ $t("message.EMAIL")
                  }}<span class="required-star">*</span></label
                >
                <input
                  v-model="form.email"
                  v-bind:placeholder="$t('message.EMAIL')"
                  type="email"
                  name="email"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('email') }"
                />
                <div
                  class="error-message"
                  v-if="form.errors.has('email')"
                  v-html="form.errors.get('email')"
                />
              </div>
              <div class="form-group">
                <label
                  >{{ $t("message.LATITUDE")
                  }}<span class="required-star"></span></label
                >
                <input
                  v-model="form.latitude"
                  v-bind:placeholder="$t('message.LATITUDE')"
                  type="text"
                  name="latitude"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('latitude') }"
                />
                <div
                  class="error-message"
                  v-if="form.errors.has('latitude')"
                  v-html="form.errors.get('latitude')"
                />
              </div>
              <div class="form-group">
                <label
                  >{{ $t("message.LONGITUDE")
                  }}<span class="required-star"></span></label
                >
                <input
                  v-model="form.longitude"
                  v-bind:placeholder="$t('message.LONGITUDE')"
                  type="text"
                  name="longitude"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('longitude') }"
                />
                <div
                  class="error-message"
                  v-if="form.errors.has('longitude')"
                  v-html="form.errors.get('longitude')"
                />
              </div>
              <div class="form-group">
                <label
                  >{{ $t("message.ADDRESS")
                  }}<span class="required-star"></span></label
                >
                <textarea v-model="form.address" class="form-control"></textarea>
                <div
                  class="error-message"
                  v-if="form.errors.has('address')"
                  v-html="form.errors.get('address')"
                />
              </div>
              
              <div class="form-group">
                <label
                  >{{ $t("message.PHONE_NUMBER")
                  }}<span class="required-star"></span></label
                >
                <input
                  v-model="form.phone_number"
                  v-bind:placeholder="$t('message.PHONE_NUMBER')"
                  type="text"
                  name="phone_number"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('phone_number') }"
                />
                <div
                  class="error-message"
                  v-if="form.errors.has('phone_number')"
                  v-html="form.errors.get('phone_number')"
                />
              </div>

              <div class="form-group">
                <label
                  >{{ $t("message.WHATSAPP_NUMBER")
                  }}<span class="required-star"></span></label
                >
                <input
                  v-model="form.whatsapp_number"
                  v-bind:placeholder="$t('message.WHATSAPP_NUMBER')"
                  type="text"
                  name="whatsapp_number"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('whatsapp_number') }"
                />
                <div
                  class="error-message"
                  v-if="form.errors.has('whatsapp_number')"
                  v-html="form.errors.get('whatsapp_number')"
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
                <label>{{ $t("message.IMAGE") }}</label>
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
                @click.prevent="addDeveloper"
                v-if="editMode === false"
                type="submit"
                class="btn btn-primary"
              >
                {{ $t("message.CREATE_DEVELOPER") }}
              </button>
              <button
                @click.prevent="editDeveloper"
                v-else
                type="submit"
                class="btn btn-primary"
              >
                {{ $t("message.EDIT_DEVELOPER") }}
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
  name: "addEditDeveloperModal",
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
        email: "",
        image: "",
        latitude: "",
        longitude: "",
        address:"",
        phone_number:"",
        whatsapp_number:"",
        description:"",
      }),
    };
  },
  methods: {
    addDeveloper() {
      if (this.is("Super Admin") || this.can("create_developer")) {
        if (!this.fileError) {
          this.$Progress.start();
          this.form
            .post("api/developers")
            .then(() => {
              Fire.$emit("reloadDevelopers");
              $("#addEditDeveloperModal").modal("hide");
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
    editDeveloper() {
      if (this.is("Super Admin") || this.can("edit_developer")) {
        if (!this.fileError) {
          this.$Progress.start();
          this.form
            .put("api/developers/" + this.form.id)
            .then(() => {
              Fire.$emit("reloadDevelopers");
              $("#addEditDeveloperModal").modal("hide");
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
    $("#addEditDeveloperModal").on("show.bs.modal", function (e) {
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