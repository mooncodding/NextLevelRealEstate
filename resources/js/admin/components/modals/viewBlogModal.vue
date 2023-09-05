<template>
  <div>
    <!-- Modal -->
    <div
      class="modal fade"
      id="viewBlogModal"
      role="dialog"
      aria-labelledby="viewBlog"
      aria-hidden="true"
    >
      <div
        class="modal-dialog modal-dialog-centered modal-xl"
        role="document"
      >
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="viewBlogModal">
              {{ $t("message.VIEW_AREA") }}:
              {{ blogData.title }}
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
          <div class="modal-body">
            <!-- Print Data -->
            <div id="printData">
              <div class="onlyForPrint">
                <printHeader></printHeader>
                <div class="printHeading">
                  {{ $t("message.VIEW_AREA") }}:
                  {{ blogData.title }}
                </div>
              </div>
              <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>{{ $t("message.TITLE") }}</th>
                        <td>{{blogData.title}}</td>
                    </tr>
                    <tr>
                        <th>{{ $t("message.DATE_TIME") }}</th>
                        <td>{{blogData.date_time | formatDateTime}}</td>
                    </tr>
                    <tr>
                        <th>{{ $t("message.TAGS") }}</th>
                        <td>
                          <span v-for="data,index in blogData.blog_tags" :key="index" class="badge badge-success">
                            {{data.name}}
                          </span>
                        </td>
                    </tr>
                    <tr>
                        <th>{{ $t("message.BLOG_CATEGORIES") }}</th>
                        <td>
                          <span v-for="data,index in blogData.category_blogs" :key="index" class="badge badge-success">
                            {{data.name}}
                          </span>
                        </td>
                    </tr>
                    <tr>
                        <th>{{ $t("message.DESCRIPTION") }}</th>
                        <td><div v-html="blogData.description" class="vhtml"></div></td>
                    </tr>
                    <tr>
                        <th>{{ $t("message.FEATURED_IMAGE") }}</th>
                        <td><img v-bind:src="'images/blogs/' + blogData.featured_image" width="80" alt="Image not found"/></td>
                    </tr>
                    <tr v-if="blogData.secondary_images">
                        <th>{{ $t("message.SECONDARY_IMAGES") }}</th>
                        <td>
                          <span v-for="data,index in blogData.secondary_images" :key="index">
                             <img v-bind:src="'images/blogs/' + data.image" width="80" alt="Image not found"/>
                          </span>
                        </td>
                    </tr>
                    <tr>
                        <th>{{ $t("message.CREATED_AT") }}</th>
                        <td>{{blogData.created_at | formatDateTime}}</td>
                    </tr>
                    <tr>
                        <th>{{ $t("message.UPDATED_AT") }}</th>
                        <td>{{blogData.updated_at | formatDateTime}}</td>
                    </tr>
                    <tr>
                        <th>{{ $t("message.CREATED_BY") }}</th>
                        <td v-if="blogData.created_by">{{blogData.created_by.name}}</td>
                        <td v-else>-</td>
                    </tr>
                    <tr v-if="blogData.updated_by">
                        <th>{{ $t("message.UPDATED_BY") }}</th>
                        <td >{{blogData.updated_by.name}}</td>
                    </tr>
                </tbody>
                </table>
            </div>
            <div class="modal-footer">
              <button @click.prevent="printSale" class="btn btn-primary">
                {{ $t("message.PRINT") }}
              </button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">
                {{ $t("message.CLOSE") }}
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import printHeader from "../includes/printHeader.vue";
export default {
  name: "viewBlogModal",
  props: ["blogData"],
  data() {
    return {};
  },
  components: {
    printHeader,
  },
  methods: {
    printSale() {
      this.$htmlToPaper("printData");
    },
  },
};
</script>