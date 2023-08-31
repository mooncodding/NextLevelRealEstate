<template>
  <div>
    <!-- Modal -->
    <div
      class="modal fade"
      id="addEditBlogModal"
      role="dialog"
      aria-labelledby="addEditBlogModalLabel"
      aria-hidden="true"
      data-keyboard="false" data-backdrop="static"
    >
      <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5
              class="modal-title"
              id="addEditBlogModalLabel"
              v-if="editMode === false"
            >
              {{ $t("message.CREATE_BLOG") }}
            </h5>
            <h5 class="modal-title" id="addEditBlogModalLabel" v-else>
              {{ $t("message.EDIT_BLOG") }}
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
          <form @submit.prevent="editMode ? editBlog() : addBlog()">
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
                        >{{ $t("message.BLOG_CATEGORIES")
                        }}<span class="required-star">*</span></label
                      >
                    <multiselect v-model="form.blog_category_id" :options="options" :multiple="true" group-values="blogCategories" group-label="language" :group-select="true" placeholder="Type to search" track-by="name" label="name"
                    ><span slot="noResult"
                    >Oops! No elements found. Consider changing the search query.</span>
                    
                    </multiselect>
                    <div
                      class="error-message"
                      v-if="form.errors.has('blog_category_id')"
                      v-html="form.errors.get('blog_category_id')"
                    />
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label
                  >{{ $t("message.DESCRIPTION")
                  }}<span class="required-star">*</span></label
                >
                <textarea v-model="form.description" class="form-control"
                :class="{ 'is-invalid': form.errors.has('description') }"
                ></textarea>
                <div
                  class="error-message"
                  v-if="form.errors.has('description')"
                  v-html="form.errors.get('description')"
                />
              </div>
              <div class="form-group">
                <label>{{ $t("message.FEATURED_IMAGE") }}*</label>
                <span v-if="editMode === true"><img v-bind:src="'images/areas/'+form.featured_image" width="5%" alt=""></span>
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
                <label>{{ $t("message.SECONDARY_IMAGES") }}</label>
                <span v-if="editMode"><span v-for="(data, i) in secondary_images" :key="i"><img  v-bind:src="'images/areas/'+data.image" width="10%" alt="">
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
                @click.prevent="addBlog"
                v-if="editMode === false"
                type="submit"
                class="btn btn-primary"
              >
                {{ $t("message.CREATE_BLOG") }}
              </button>
              <button
                @click.prevent="editBlog"
                v-else
                type="submit"
                class="btn btn-primary"
              >
                {{ $t("message.EDIT_BLOG") }}
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
  name: "addEditBlogModal",
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
          blogCategories: []
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
      // Create a new form instance
      form: new form({
        id: "",
        title: "",
        date_time: new Date().toISOString(),
        blog_category_id:[],
        tag_id:[],
        description: "",
        featured_image: "",
        secondary_images:[],
        secondary_images_copy:[],
      }),
    };
  },
  methods: {
    addBlog() {
      if (this.is("Super Admin") || this.can("create_blog")) {
        if (!this.fileError) {
          this.$Progress.start();
          this.form
            .post("api/adminBlogs")
            .then(() => {
              Fire.$emit("reloadBlogs");
              $("#addEditBlogModal").modal("hide");
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
    editBlog() {
      if (this.is("Super Admin") || this.can("edit_blog")) {
        if (!this.fileError) {
          this.$Progress.start();
          this.form
            .put("api/adminBlogs/" + this.form.id)
            .then(() => {
              this.form.secondary_images_copy = [];
              Fire.$emit("reloadBlogs");
              $("#addEditBlogModal").modal("hide");
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
    if (this.is("Super Admin") || this.can("edit_blog")){
      if(this.editMode){
          swal.fire({
          text: this.$t("message.DELETE_MESSAGE_REVERT"),
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: "#3085D6",
          cancelButtonColor: "#d33",
          cancelButtonText: this.$t("message.CANCEL"),
          confirmButtonText: this.$t("message.DELETE_BUTTON_TEXT")
        }).then(result => {
          if (result.value) {
            // Send request to the server
            if(id!=""){
              this.form
              .delete("api/removeEventSecondaryImages/" + id)
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
    $("#addEditBlogModal").on("show.bs.modal", function (e) {
      form.secondary_images = [];
      that.images = [];
      form.featured_image = "";
      if (e.relatedTarget) {
        that.editMode = true;
        form.fill(e.relatedTarget);
        that.secondary_images = form.secondary_images;
        form.secondary_images_copy = [];
        // manually fill blogCategories dropdown
        const blogCategories = [];
        e.relatedTarget.category_blogs.map((item=>{
          blogCategories.push(item)
        }));
        form.blog_category_id = blogCategories;
        
        // manually fill tags dropdown
        const tags = [];
        e.relatedTarget.blog_tags.map((item=>{
          tags.push(item)
        }));
        form.tag_id = tags;

      } else {
        form.secondary_images_copy = [];
        form.reset();
        that.editMode = false;
      }
      // that.beforeRemove(0,1,0);
      that.$Progress.start();
      axios
        .get("api/getAllBlogCategories")
        .then((response) => {
          that.options[0].blogCategories = response.data;
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