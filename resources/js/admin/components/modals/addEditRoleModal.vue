<template>
  <div>
    <!-- Modal -->
    <div
      class="modal fade"
      id="addEditRoleModal"
      role="dialog"
      aria-labelledby="addEditRoleModalLabel"
      aria-hidden="true"
      data-keyboard="false" data-backdrop="static"
    >
      <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5
              class="modal-title"
              id="addEditRoleModalLabel"
              v-if="editMode === false"
            >
              {{ $t("message.CREATE_ROLE") }}
            </h5>
            <h5 class="modal-title" id="addEditRoleModalLabel" v-else>
              {{ $t("message.EDIT_ROLE") }}
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
          <form @submit.prevent="editMode ? editRole() : addRole()">
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
                <div class="error-message">{{ duplicateRoleError }}</div>
              </div>
              <div v-if="isLoading" class="text-center my-4">
                <v-progress-circular
                  :size="70"
                  :width="7"
                  color="primary"
                  indeterminate
                ></v-progress-circular>
              </div>
              <div v-else>
                <h6>
                <v-checkbox
                  v-model="form.isAllSelected"
                  @change="selectAll()"
                  class="checkbox permission-checkbox"
                  name="flavour-3a"
                  :label="$t('message.SELECT_ALL')"
                ></v-checkbox>
              </h6>
              <!-- <v-checkbox
                  v-for="permission in permissions"
                  v-model="form.permissions"
                  :key="permission.name"
                  :value="permission"
                  class="checkbox permission-checkbox"
                  name="flavour-3a"
                  :label="currentLang == 'en' ? permission.label : (currentLang == 'fr' ? permission.french_label : permission.arabic_label)"
              ></v-checkbox> -->
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>
                      {{ $t("message.MODULE") }}
                    </th>
                    <th>
                      {{ $t("message.PERMISSIONS") }}
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr
                    v-for="(modulePermission, index) in permissions"
                    :key="index"
                  >
                    <td class='align-middle'>
                        {{ $t("message." + modulePermission.module) }}
                    </td>
                    <td>
                      <v-col>
                        <v-checkbox
                          v-for="permission in modulePermission.permissions"
                          v-model="form.permissions"
                          :key="permission.name"
                          :value="permission"
                          class="checkbox permission-checkbox"
                          name="flavour-3a"
                          style="float: left !important; margin-right: 1.5em"
                          :label="
                            currentLang == 'en'
                              ? permission.label
                              : currentLang == 'fr'
                              ? permission.french_label
                              : permission.arabic_label
                          "
                        ></v-checkbox>
                      </v-col>
                    </td>
                  </tr>
                </tbody>
              </table>
              </div>
            
            </div>
            <div class="modal-footer">
              <button
                @click.prevent="addRole"
                v-if="editMode === false"
                type="submit"
                class="btn btn-primary"
              >
                {{ $t("message.CREATE_ROLE") }}
              </button>
              <button
                @click.prevent="editRole"
                v-else
                type="submit"
                class="btn btn-primary"
              >
                {{ $t("message.EDIT_ROLE") }}
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
  name: "addEditRoleModal",
  props: ["roledata"],
  data() {
    return {
      csrf: document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content"),
      roles: [],
      permissions: [],
      editMode: "",
      duplicateRoleError: "",
      allPermissions: [],
      isLoading: true,
      // Create a new form instance
      form: new form({
        id: "",
        name: "",
        permissions: [],
        isAllSelected: false,
      }),
      currentLang: document.head.querySelector("[name~=locale][content]")
        .content,
    };
  },

  methods: {
    addRole() {
      if (
        this.is("Super Admin") ||
        (this.can("create_role") && this.organizationCan("create_role"))
      ) {
        this.$Progress.start();
        this.duplicateRoleError = "";
        this.form
          .post("api/roles")
          .then(() => {
            Fire.$emit("reloadRoles");
            $("#addEditRoleModal").modal("hide");
            toast.fire({
              icon: "success",
              title: this.$t("message.CREATED_MESSAGE_SUCCESS"),
            });
            this.$Progress.finish();
          })
          .catch((error) => {
            if (error.response.data.is_error == true) {
              this.duplicateRoleError = "Role name already exists!";
            }

            this.$Progress.fail();
            toast.fire({
              icon: "warning",
              title: this.$t("message.CREATED_MESSAGE_ERROR"),
            });
          });
      } else {
        swal.fire({
          text: this.$t("message.UNAUTHORIZED"),
          icon: "warning",
        });
      }
    },
    editRole() {
      if (
        this.is("Super Admin") ||
        (this.can("edit_role") && this.organizationCan("edit_role"))
      ) {
        this.$Progress.start();
        this.duplicateRoleError = "";
        this.form
          .put("api/roles/" + this.form.id)
          .then(() => {
            Fire.$emit("reloadRoles");
            $("#addEditRoleModal").modal("hide");
            toast.fire({
              icon: "success",
              title: this.$t("message.EDIT_MESSAGE_SUCCESS"),
            });
            this.$Progress.finish();
          })
          .catch((error) => {
            this.$Progress.fail();
            if (error.response.data.is_error == true) {
              this.duplicateRoleError = "Role name already exists!";
            }
            toast.fire({
              icon: "warning",
              title: this.$t("message.EDIT_MESSAGE_ERROR"),
            });
          });
      } else {
        swal.fire({
          text: this.$t("message.UNAUTHORIZED"),
          icon: "warning",
        });
      }
    },

    selectAll() {
      if (this.form.isAllSelected == true) {
        this.form.permissions = [];
        if (this.permissions && this.permissions.length > 0) {
          this.permissions.map((item, index) => {
            if (item.permissions && item.permissions.length > 0) {
              item.permissions.map((permission) => {
                this.form.permissions.push(permission);
              });
            }
          });
        }
      } else {
        this.form.permissions = [];
      }
    },
  },
  mounted() {
    var form = this.form;
    var that = this;
    $("#addEditRoleModal").on("show.bs.modal", function (e) {
      that.isLoading = true
      form.reset();
      that.permissions = [];
      if (e.relatedTarget) {
        that.editMode = true;
        form.name = e.relatedTarget.name;
        form.id = e.relatedTarget.id;
        if (
          e.relatedTarget.permissions &&
          e.relatedTarget.permissions.length > 0
        ) {
          e.relatedTarget.permissions.map((res) => {
            form.permissions.push({
              id: res.id,
              name: res.name,
              label: res.label,
              french_label: res.french_label,
              arabic_label: res.arabic_label,
            });
          });
          if (that.allPermissions.length == form.permissions.length) {
            that.form.isAllSelected = true;
          }
          // form.permissions = e.relatedTarget.permissions;
        }
      } else {
        form.reset();
        that.editMode = false;
      }
      that.$Progress.start();
      axios
        .get("api/getAllPermissions")
        .then((response) => {
          // response.data.map((res) => {
          //   that.permissions.push({
          //     id: res.id,
          //     name: res.name,
          //     label: res.label,
          //     french_label: res.french_label,
          //     arabic_label: res.arabic_label,
          //   });
          // });
          that.permissions = response.data;
          if (that.permissions && that.permissions.length > 0) {
            that.permissions.map((item, index) => {
              if (item.permissions && item.permissions.length > 0) {
                item.permissions.map((permission, i) => {
                  that.allPermissions.push(permission);
                  that.permissions[index].permissions[i] = {
                    id: permission.id,
                    name: permission.name,
                    label: permission.label,
                    french_label: permission.french_label,
                    arabic_label: permission.arabic_label,
                  };
                });
                if (that.allPermissions.length == form.permissions.length) {
                  that.form.isAllSelected = true;
                }
              }
            });
          }

          that.$Progress.finish();
        that.isLoading = false
        })
        .catch(() => {
          that.$Progress.fail();
          toast.fire({
            icon: "error",
            title: that.$t("message.SOMETHING_WENT_WRONG"),
          });
        that.isLoading = false
        });
    });
  },
};
</script>
