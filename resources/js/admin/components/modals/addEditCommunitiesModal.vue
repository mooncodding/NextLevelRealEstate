<template>
  <div>
    <!-- Modal -->
    <div
      class="modal fade"
      id="addEditProjectModal"
      role="dialog"
      aria-labelledby="addEditProjectModalLabel"
      aria-hidden="true"
      data-keyboard="false" data-backdrop="static"
    >
      <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5
              class="modal-title"
              id="addEditProjectModalLabel"
              v-if="editMode === false"
            >
              {{ $t("message.CREATE_PROJECT") }}
            </h5>
            <h5 class="modal-title" id="addEditProjectModalLabel" v-else>
              {{ $t("message.EDIT_PROJECT") }}
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
          <form @submit.prevent="editMode ? editProject() : addProject()">
            <input type="hidden" name="_token" :value="csrf" />
            <div class="modal-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label
                      >{{ $t("message.TITLE")
                      }}<span class="required-star">*</span></label
                    >
                    <input
                      v-model="form.title"
                      v-bind:placeholder="$t('message.TITLE')"
                      type="text"
                      name="title"
                      class="form-control"
                      :class="{ 'is-invalid': form.errors.has('title') }"
                    />
                    <div
                      class="error-message"
                      v-if="form.errors.has('title')"
                      v-html="form.errors.get('title')"
                    />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>{{$t('message.DATE_TIME')}}<span>*</span></label>
                      <datetime
                      v-model="form.date_time"
                      :minDatetime="new Date().toISOString()"
                      v-bind:placeholder="$t('message.DATE_TIME')"
                      type="datetime"
                      name="date_time"
                      :input-class="{ 'is-invalid form-control bgwhite': form.errors.has('date_time'),
                      'form-control bgwhite': !form.errors.has('date_time') }">
                      </datetime>
                      <div
                      class="error-message"
                      v-if="form.errors.has('date_time')"
                      v-html="form.errors.get('date_time')"
                        />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>
                      {{ $t("message.TAGS")
                      }}<span class="required-star">*</span>
                    </label>
                       <multiselect v-model="form.tag_id" :options="tagOptions" :multiple="true" group-values="tags" group-label="language" :group-select="true" placeholder="Type to search" track-by="name" label="name"
                    ><span slot="noResult"
                    >Oops! No elements found. Consider changing the search query.</span>
                    
                    </multiselect>
                        <div
                        class="error-message"
                        v-if="form.errors.has('tag_id')"
                        v-html="form.errors.get('tag_id')"
                      />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label
                        >{{ $t("message.PROJECT_CATEGORIES")
                        }}<span class="required-star">*</span></label
                      >
                    <multiselect v-model="form.project_category_id" :options="options" :multiple="true" group-values="projectCategories" group-label="language" :group-select="true" placeholder="Type to search" track-by="name" label="name"
                    ><span slot="noResult"
                    >Oops! No elements found. Consider changing the search query.</span>
                    
                    </multiselect>
                    <div
                      class="error-message"
                      v-if="form.errors.has('project_category_id')"
                      v-html="form.errors.get('project_category_id')"
                    />
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>{{ $t("message.FEATURED_IMAGE") }}*</label>
                <span v-if="editMode === true"><img v-bind:src="'images/projects/'+form.featured_image" width="5%" alt=""></span>
                <input
                  @change="addPhoto"
                  type="file"
                  name="featured_image"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('featured_image') }"
                />
                <div
                  class="error-message"
                  v-if="form.errors.has('featured_image')"
                  v-html="form.errors.get('featured_image')"
                />
              </div>
              <div class="form-group">
                <label
                  >{{ $t("message.DESCRIPTION")
                  }}<span class="required-star">*</span></label
                >
                <el-tiptap v-model="form.description" :extensions="extensions" />
                <div
                  class="error-message"
                  v-if="form.errors.has('description')"
                  v-html="form.errors.get('description')"
                />
              </div>
              <div class="form-group">
                <label>{{ $t("message.SECONDARY_IMAGES") }}</label>
                <span v-if="editMode"><span v-for="(data, i) in secondary_images" :key="i"><img  v-bind:src="'images/projects/'+data.image" width="10%" alt="">
                <a class="btn-cross-icon btn-danger-2 mr-10 mb-40" href='#' v-on:click.stop="deleteSecondaryImages(i, data.id);">
                <i class="fas fa-times-circle"></i>
                </a>
                </span>
                </span>
                <div v-if="!editMode">
                <vue-upload-multiple-image 
                  v-model="form.secondary_images"
                  @upload-success="uploadImageSuccess"
                  @before-remove="beforeRemove"
                  @edit-image="editImage"
                  idUpload="myIdUpload"
                  editUpload="myIdEdit"
                  ></vue-upload-multiple-image>
                <div
                  class="error-message"
                  v-if="form.errors.has('secondary_images')"
                  v-html="form.errors.get('secondary_images')"
                />
                </div>
                <div v-else>
                <vue-upload-multiple-image 
                  v-model="form.secondary_images_copy"
                  @upload-success="uploadImageSuccess"
                  @before-remove="beforeRemove"
                  @edit-image="editImage"
                  idUpload="myIdUpload"
                  editUpload="myIdEdit"
                  ></vue-upload-multiple-image>
                <div
                  class="error-message"
                  v-if="form.errors.has('secondary_images_copy')"
                  v-html="form.errors.get('secondary_images_copy')"
                />
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button
                @click.prevent="addProject"
                v-if="editMode === false"
                type="submit"
                class="btn btn-primary"
              >
                {{ $t("message.CREATE_PROJECT") }}
              </button>
              <button
                @click.prevent="editProject"
                v-else
                type="submit"
                class="btn btn-primary"
              >
                {{ $t("message.EDIT_PROJECT") }}
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
import moment, { isDate } from 'moment';
import {
  // necessary extensions
  Doc,
  Text,
  Paragraph,
  Heading,
  Bold,
  Underline,
  Italic,
  Strike,
  ListItem,
  BulletList,
  OrderedList,
  Image,
  Iframe,
  CodeView,
  Fullscreen
} from 'element-tiptap';
export default {
  name: "addEditProjectModal",
  data() {
    return {
      csrf: document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content"),
      roles: [],
      editMode: "",
      fileError: 0,
      options: [
        {
          language: 'Select All',
          projectCategories: []
        }
      ],
      tagOptions: [
        {
          language: 'Select All',
          tags: []
        }
      ],
      images:[],
      secondary_images:[],
      tags:[],
      extensions: [
        new Doc(),
        new Text(),
        new Paragraph(),
        new Heading({ level: 5 }),
        new Bold({ bubble: true }), // render command-button in bubble menu.
        new Underline({ bubble: true, menubar: false }), // render command-button in bubble menu but not in menubar.
        new Italic(),
        new Strike(),
        new ListItem(),
        new BulletList(),
        new OrderedList(),
        new Iframe(),
        new Image(),
        new CodeView(),
        new Fullscreen(),
      ],
      // Create a new form instance
      form: new form({
        id: "",
        title: "",
        date_time: new Date().toISOString(),
        project_category_id:[],
        tag_id:[],
        description: "",
        featured_image: "",
        secondary_images:[],
        secondary_images_copy:[],
      }),
    };
  },
  methods: {
    addProject() {
      if (this.is("Super Admin") || this.can("create_project")) {
        if (!this.fileError) {
          this.$Progress.start();
          this.form.date_time = moment.utc(this.form.date_time).local().format();
          this.form
            .post("api/adminProjects")
            .then(() => {
              Fire.$emit("reloadProjects");
              $("#addEditProjectModal").modal("hide");
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
    editProject() {
      if (this.is("Super Admin") || this.can("edit_project")) {
        if (!this.fileError) {
          this.$Progress.start();
          this.form.date_time = moment.utc(this.form.date_time).local().format();
          this.form
            .put("api/adminProjects/" + this.form.id)
            .then(() => {
              this.form.secondary_images_copy = [];
              Fire.$emit("reloadProjects");
              $("#addEditProjectModal").modal("hide");
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
        this.form.featured_image = reader.result;
      };
      reader.readAsDataURL(file);
    },
    // Secondary Images
    uploadImageSuccess(formData, index, fileList) {
      const images=[];
      fileList.map((item=>{
        images.push(item.path);
      }));
      if (this.editMode) {
        this.form.secondary_images_copy = images;
      }else{
        this.form.secondary_images = images;
      }
    },
    beforeRemove (index, done, fileList) {
      done()
    },
    editImage (formData, index, fileList) {
      'edit data', formData, index, fileList
    }
    },
    //Delete Secondary Images
    deleteSecondaryImages(i, id=null) {
    if (this.is("Super Admin") || this.can("edit_project")){
      if(this.editMode){
          swal.fire({
          text: this.$t("message.DELETE_MESSAGE_REVERT"),
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: "#3085D6",
          cancelButtonColor: "#d33",
          cancelButtonText: "Cancel",
          confirmButtonText: this.$t("message.DELETE_BUTTON_TEXT")
        }).then(result => {
          if (result.value) {
            // Send request to the server
            if(id!=""){
              this.form
              .delete("api/removeProjectSecondaryImages/" + id)
              .then(() => {
                this.form.secondary_image.splice(i, 1);
                swal.fire(
                  "Deleted!",
                  this.$t("message.DELETE_MESSAGE_SUCCESS"),
                  "success"
                );
              })
              .catch(() => {
                swal(
                  "Failed!",
                  this.$t("message.DELETE_MESSAGE_ERROR"),
                  "warning"
                );
              });
            }else{
              this.form.secondary_image.splice(i, 1);
                swal.fire(
                  "Deleted!",
                  this.$t("message.DELETE_MESSAGE_SUCCESS"),
                  "success"
                );
            }
          }
        });
      }else{
        this.form.secondary_image.splice(i, 1);
      }
      }else{
        swal.fire({
          text: this.$t("message.unAuthorizedText"),
          type: "warning",
        })
      }
  },
  mounted() {
    var form = this.form;
    var that = this;
    $("#addEditProjectModal").on("show.bs.modal", function (e) {
      form.secondary_images = [];
      that.images = [];
      form.featured_image = "";
      if (e.relatedTarget) {
        that.editMode = true;
        form.fill(e.relatedTarget);
        that.secondary_images = form.secondary_images;
        form.secondary_images_copy = [];
        // manually fill projectCategories dropdown
        const projectCategories = [];
        e.relatedTarget.category_projects.map((item=>{
          projectCategories.push(item)
        }));
        form.project_category_id = projectCategories;
        
        // manually fill tags dropdown
        const tags = [];
        e.relatedTarget.project_tags.map((item=>{
          tags.push(item)
        }));
        form.tag_id = tags;

        const date_time = new Date(e.relatedTarget.date_time);
        form.date_time = date_time.toISOString();

      } else {
        form.secondary_images_copy = [];
        form.reset();
        that.editMode = false;
      }
      // that.beforeRemove(0,1,0);
      that.$Progress.start();
      axios
        .get("api/getAllProjectCategories")
        .then((response) => {
          that.options[0].projectCategories = response.data;
          axios
            .get("api/getAllTags")
            .then((response) => {
             that.tagOptions[0].tags = response.data;
            })
          that.$Progress.finish();
        })
        .catch(() => {
          that.$Progress.fail();
          toast.fire({
            icon: "error",
            title: that.$t("message.SOMETHING_WENT_WRONG"),
          });
        });
    });
  },
};
</script>