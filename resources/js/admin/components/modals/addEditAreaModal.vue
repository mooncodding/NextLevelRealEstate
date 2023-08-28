<template>
  <div>
    <!-- Modal -->
    <div
      class="modal fade"
      id="addEditAreaModal"
      role="dialog"
      aria-labelledby="addEditAreaModalLabel"
      aria-hidden="true"
      data-keyboard="false" data-backdrop="static"
    >
      <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5
              class="modal-title"
              id="addEditAreaModalLabel"
              v-if="editMode === false"
            >
              {{ $t("message.CREATE_AREA") }}
            </h5>
            <h5 class="modal-title" id="addEditAreaModalLabel" v-else>
              {{ $t("message.EDIT_AREA") }}
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
          <form @submit.prevent="editMode ? editArea() : addArea()">
            <input type="hidden" name="_token" :value="csrf" />
            <div class="modal-body">
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
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label
                      >{{ $t("message.LATITUDE")
                      }}<span class="required-star"></span></label
                    >
                    <input
                      v-model="coordinates.lat"
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
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label
                      >{{ $t("message.LONGITUDE")
                      }}<span class="required-star"></span></label
                    >
                    <input
                      v-model="coordinates.lng"
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
                </div>
              </div>
              <!--Google Map -->
              <div class="row">
                <div class="col-lg-8 offset-lg-1 col-md-8 col-sm-12">
                    <div class="form-group" align="center">
                      <GmapAutocomplete @place_changed="setPlace" class="auto-complete form-control" placeholder="Search Location"/>
                    </div>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-12 auto-complete-btn">
                    <div class="form-group" align="center">
                      <a  class="btn btn-success map-btn" @click="addMarker">Search</a>
                    </div>
                </div>

              </div>
              <div class="col-lg-12">
                  <GmapMap
                      :center="coordinates"
                      ref="mapRef"
                      :zoom="15"
                      map-type-id="terrain"
                      style="width: 100%; height: 250px;"
                    >
                      <GmapMarker
                      :position="coordinates"
                      :draggable="true"
                      @dragend="getMarkerPosition($event)"
                      ></GmapMarker>
                  </GmapMap>
              </div>
              <br>
              <!-- Google Map Ends -->
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label
                      >{{ $t("message.STARTING_PRICE")
                      }}<span class="required-star">*</span></label
                    >
                    <input
                      v-model="form.starting_price"
                      v-bind:placeholder="$t('message.STARTING_PRICE')"
                      type="text"
                      name="starting_price"
                      class="form-control"
                      :class="{ 'is-invalid': form.errors.has('starting_price') }"
                    />
                    <div
                      class="error-message"
                      v-if="form.errors.has('starting_price')"
                      v-html="form.errors.get('starting_price')"
                    />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label
                        >{{ $t("message.DEVELOPERS")
                        }}<span class="required-star">*</span></label
                      >
                    <multiselect v-model="form.developer_id" :options="options" :multiple="true" group-values="developers" group-label="language" :group-select="true" placeholder="Type to search" track-by="name" label="name"
                    ><span slot="noResult"
                    >Oops! No elements found. Consider changing the search query.</span>
                    
                    </multiselect>
                    <div
                      class="error-message"
                      v-if="form.errors.has('developer_id')"
                      v-html="form.errors.get('developer_id')"
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
                @click.prevent="addArea"
                v-if="editMode === false"
                type="submit"
                class="btn btn-primary"
              >
                {{ $t("message.CREATE_AREA") }}
              </button>
              <button
                @click.prevent="editArea"
                v-else
                type="submit"
                class="btn btn-primary"
              >
                {{ $t("message.EDIT_AREA") }}
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
  name: "addEditAreaModal",
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
          developers: []
        }
      ],
      coordinates:{
          lat:0,
          lng:0,
      },
      images:[],
      map:null,
      secondary_images:[],
      // Create a new form instance
      form: new form({
        id: "",
        title: "",
        latitude:"",
        longitude:"",
        starting_price:"",
        developer_id:[],
        description: "",
        featured_image: "",
        secondary_images:[],
        secondary_images_copy:[],
      }),
    };
  },
  methods: {
    addArea() {
      if (this.is("Super Admin") || this.can("create_area")) {
        if (!this.fileError) {
          this.$Progress.start();
          this.form.latitude = this.coordinates.lat;
          this.form.longitude = this.coordinates.lng;
          this.form
            .post("api/adminAreas")
            .then(() => {
              Fire.$emit("reloadAreas");
              $("#addEditAreaModal").modal("hide");
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
    editArea() {
      if (this.is("Super Admin") || this.can("edit_area")) {
        if (!this.fileError) {
          this.$Progress.start();
          this.form.latitude = this.coordinates.lat;
          this.form.longitude = this.coordinates.lng;
          this.form
            .put("api/adminAreas/" + this.form.id)
            .then(() => {
              this.form.secondary_images_copy = [];
              Fire.$emit("reloadAreas");
              $("#addEditAreaModal").modal("hide");
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
    },
    //Get Latitude and Longitude 
    getMarkerPosition (event) {
        this.coordinates = {
            lat: event.latLng.lat(),
            lng: event.latLng.lng()
        }
    },
    //Set Place On search 
    setPlace(place) {
      this.currentPlace = place;
    },
    // Set Marker On Search
    addMarker() {
      if (this.currentPlace) {
        const marker = {
          lat: this.currentPlace.geometry.location.lat(),
          lng: this.currentPlace.geometry.location.lng(),
        };
        this.coordinates = marker;
        this.currentPlace = null;
      }
    },
        //Delete Sencondary Images
    deleteSecondaryImages(i, id=null) {
    if (this.is("Super Admin") || this.can("edit_area")){
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
  },
  mounted() {
    var form = this.form;
    var that = this;
    $("#addEditAreaModal").on("show.bs.modal", function (e) {
      form.secondary_images = [];
      that.images = [];
      form.featured_image = "";
      if (e.relatedTarget) {
        that.editMode = true;
        form.fill(e.relatedTarget);
        that.secondary_images = form.secondary_images;
        form.secondary_images_copy = [];
        // manually fill developers dropdown
        const developers = [];
        e.relatedTarget.area_developers.map((item=>{
          developers.push(item)
        }));
        form.developer_id = developers;
        //Google map set on Edit
        that.coordinates.lat =  parseFloat(e.relatedTarget.latitude)
        that.coordinates.lng =  parseFloat(e.relatedTarget.longitude)
        that.$refs.mapRef.$mapPromise.then((coordinates) => {
          coordinates.panTo({lat: parseFloat(e.relatedTarget.latitude) , lng: parseFloat(e.relatedTarget.longitude)})
        });

      } else {
        form.secondary_images_copy = [];
        form.reset();
        that.editMode = false;
        that.$getLocation({})
        .then(coordinates => {
          that.coordinates = coordinates
        });
      }
      // that.beforeRemove(0,1,0);
      that.$Progress.start();
      axios
        .get("api/getAllDevelopers")
        .then((response) => {
          that.options[0].developers = response.data;
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
  // Get Current Location Latitude and Longitude
  created() {
    this.$getLocation({})
      .then(coordinates => {
        this.coordinates = coordinates
      });
  }
};
</script>