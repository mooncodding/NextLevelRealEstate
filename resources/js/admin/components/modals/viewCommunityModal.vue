<template>
  <div>
    <!-- Modal -->
    <div
      class="modal fade"
      id="viewProjectModal"
      role="dialog"
      aria-labelledby="viewProject"
      aria-hidden="true"
    >
      <div
        class="modal-dialog modal-dialog-centered modal-xl"
        role="document"
      >
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="viewProjectModal">
              {{ $t("message.VIEW_PROJECT") }}:
              {{ projectData.title }}
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
                  {{ $t("message.VIEW_PROJECT") }}:
                  {{ projectData.title }}
                </div>
              </div>
              <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>{{ $t("message.TITLE") }}</th>
                        <td>{{projectData.title}}</td>
                    </tr>
                    <tr>
                        <th>{{ $t("message.DATE_TIME") }}</th>
                        <td>{{projectData.date_time | formatDateTime}}</td>
                    </tr>
                    <tr>
                        <th>{{ $t("message.TAGS") }}</th>
                        <td>
                          <span v-for="data,index in projectData.project_tags" :key="index" class="badge badge-success">
                            {{data.name}}
                          </span>
                        </td>
                    </tr>
                    <tr>
                        <th>{{ $t("message.BLOG_CATEGORIES") }}</th>
                        <td>
                          <span v-for="data,index in projectData.category_projects" :key="index" class="badge badge-success">
                            {{data.name}}
                          </span>
                        </td>
                    </tr>
                    <tr>
                        <th>{{ $t("message.DESCRIPTION") }}</th>
                        <td><div v-html="projectData.description" class="vhtml"></div></td>
                    </tr>
                    <tr>
                        <th>{{ $t("message.FEATURED_IMAGE") }}</th>
                        <td><img v-bind:src="'images/projects/' + projectData.featured_image" width="80" alt="Image not found"/></td>
                    </tr>
                    <tr v-if="projectData.secondary_images">
                        <th>{{ $t("message.SECONDARY_IMAGES") }}</th>
                        <td>
                          <span v-for="data,index in projectData.secondary_images" :key="index">
                             <img v-bind:src="'images/projects/' + data.image" width="80" alt="Image not found"/>
                          </span>
                        </td>
                    </tr>
                    <tr>
                        <th>{{ $t("message.CREATED_AT") }}</th>
                        <td>{{projectData.created_at | formatDateTime}}</td>
                    </tr>
                    <tr>
                        <th>{{ $t("message.UPDATED_AT") }}</th>
                        <td>{{projectData.updated_at | formatDateTime}}</td>
                    </tr>
                    <tr>
                        <th>{{ $t("message.CREATED_BY") }}</th>
                        <td v-if="projectData.created_by">{{projectData.created_by.name}}</td>
                        <td v-else>-</td>
                    </tr>
                    <tr v-if="projectData.updated_by">
                        <th>{{ $t("message.UPDATED_BY") }}</th>
                        <td >{{projectData.updated_by.name}}</td>
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
  name: "viewProjectModal",
  props: ["projectData"],
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