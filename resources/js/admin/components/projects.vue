<template>
  <v-app>
    <div class="content-wrapper">
      <div v-if="is('Super Admin') || can('projects')">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row">
              <div class="col-6">
                <h1 class="m-0 text-dark">{{ $t("message.PROJECTS") }}</h1>
              </div>
              <!-- /.col -->
              <div class="col-6">
                <button class="btn btn-success float-right" @click="addProject" v-if="(is('Super Admin') || can('create_project'))">
                  {{ $t("message.CREATE_PROJECT") }}
                  <i class="fas fa-plus fa-fw"></i>
                </button>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <div class="card-tools">
                      <form @submit.prevent>
                        <v-text-field
                          class="m-0 p-0"
                          v-model="search"
                          append-icon="mdi-magnify"
                          label="Search"
                          single-line
                          hide-details
                        ></v-text-field>
                      </form>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body table-responsive p-0">
                    <v-data-table
                      :headers="headers"
                      :items="projects.data ? projects.data : projects"
                      :server-items-length="projects.total"
                      class="elevation-1"
                      :loading="loading"
                      :options.sync="options"
                      :search="search"
                      :footer-props="{
                        showFirstLastPage: true,
                        'items-per-page-options': [10, 50, 100, 500, -1],
                      }"
                    >
                      <template v-slot:item.actions="{ item }">
                        <v-icon
                          color="green"
                          class="edit-icon mr-2"
                          small
                          @click="viewProject(item)"
                        >
                          mdi-eye
                        </v-icon>

                        <v-icon
                          color="blue"
                          class="edit-icon mr-2"
                          small
                          @click="editProject(item)"
                          v-if="(is('Super Admin') || can('edit_project'))"
                        >
                          mdi-pencil
                        </v-icon>

                        <v-icon
                          color="red"
                          class="delete-icon"
                          small
                          @click="deleteProject(item.id)"
                          v-if="(is('Super Admin') || can('delete_project'))"
                        >
                          mdi-delete
                        </v-icon>
                      </template>
                    </v-data-table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
            </div>
          </div>
        </div>
        <!-- /.content -->
        <addEditProjectModal></addEditProjectModal>
        <viewProjectModal :projectData="projectDataInfo"></viewProjectModal>
      </div>
      <div class="unathorized-text" v-else>
        <div class="container-fluid">
          <div class="row">
            <div class="col-12 unauthorized">
              <v-alert
                color="red lighten-2"
                dark
              >
                {{ $t("message.UNAUTHORIZED") }}
              </v-alert>
            </div>
          </div>
        </div>
      </div>
    </div>
  </v-app>
</template>

<script>
import addEditProjectModal from "./modals/addEditProjectModal.vue";
import viewProjectModal from "./modals/viewProjectModal.vue";
export default {
  data() {
    return {
      form: new form(),
      projects: [],
      curpage: 1,
      search: "",
      itemsPerPage: 10,
      loading: true,
      options: {},
      sortBy: "",
      sortDesc: "",
      projectDataInfo: {},
      headers: [
        { text: this.$t("message.TITLE"), value: "title" },
        { text: this.$t("message.CREATED_BY"), value: "created_by.name" },
        {
          text: this.$t("message.ACTIONS"),
          value: "actions",
          sortable: false,
        },
      ],
    };
  },
  components: {
    addEditProjectModal,
    viewProjectModal
  },
  watch: {
    //DataTable watcher!
    options: {
      handler() {
        this.getResults(
          this.options.page ? this.options.page : null,
          this.options.itemsPerPage ? this.options.itemsPerPage : null
        );
      },
      deep: true,
    },
    search() {
      this.getResults();
    },
  },
  methods: {
    getResults(page = 1, rows = 10, sortBy = null, sortDesc = null) {
      if (this.is('Super Admin') || this.can('projects')) {
        this.$Progress.start();
        this.loading = true;
        this.curpage = page;
        if (this.options.sortBy && this.options.sortBy.length > 0) {
          this.sortBy = this.options.sortBy[0];
        } else {
          this.sortBy = "";
        }
        if (this.options.sortDesc && this.options.sortDesc.length > 0) {
          this.sortDesc = this.options.sortDesc[0];
        } else {
          this.sortDesc = "";
        }
        axios
          .get(
            "api/adminProjects?page=" +
              page +
              "&search=" +
              this.search +
              "&numRows=" +
              rows +
              "&sortBy=" +
              this.sortBy +
              "&sortDesc=" +
              this.sortDesc
          )
          .then((response) => {
            this.projects = response.data;
            this.$Progress.finish();
            this.loading = false;
          })
          .catch(() => {
            this.$Progress.fail();
            this.loading = false;
            toast.fire({
              icon: "error",
              title: this.$t("message.SOMETHING_WENT_WRONG")
            });
          });
      }else{
        toast.fire({
          icon: "error",
          title: this.$t("message.UNAUTHORIZED")
        });
        this.$Progress.fail();
        this.loading = false;
      }
    },
    deleteProject(id) {
      if (this.is('Super Admin') || this.can('delete_project')) {
        swal
          .fire({
            title: this.$t("message.CONFIRM"),
            text: this.$t("message.DELETE_MESSAGE_REVERT"),
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: this.$t("message.DELETE_BUTTON_TEXT"),
          })
          .then((result) => {
            this.$Progress.start();
            if (result.value) {
              // Send request to the server
              this.form
                .delete("api/adminProjects/" + id)
                .then(() => {
                  this.projects.total -= 1;
                  Fire.$emit("reloadProjects");
                  this.$Progress.finish();
                  swal.fire(
                    this.$t("message.DELETED"),
                    this.$t("message.DELETE_MESSAGE_SUCCESS"),
                    "success"
                  );
                })
                .catch(() => {
                  this.$Progress.fail();
                  swal.fire(
                    this.$t("message.FAILED"),
                    this.$t("message.DELETE_MESSAGE_ERROR"),
                    "warning"
                  );
                });
            }
          });
      }else{
        toast.fire({
          icon: "error",
          title: this.$t("message.UNAUTHORIZED")
        });
      }
    },
    addProject() {
      if (this.is('Super Admin') || this.can('create_project')) {
        $("#addEditProjectModal").modal("show");
      }else{
        toast.fire({
          icon: "error",
          title: this.$t("message.UNAUTHORIZED")
        });
      }
    },
    editProject(projectData) {
      if (this.is('Super Admin') || this.can('edit_project')) {
        this.projectDataInfo = projectData;
        $("#addEditProjectModal").modal("show", projectData);
      }else{
        toast.fire({
          icon: "error",
          title: this.$t("message.UNAUTHORIZED")
        });
      }
    },
    viewProject(projectData) {
      this.projectDataInfo = projectData;
      $("#viewProjectModal").modal("show", projectData);
    },
  },
  created() {
    Fire.$on("reloadProjects", () => {
      this.getResults(this.curpage);
    });
  },
};
</script>