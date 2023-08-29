<template>
  <div>
    <!-- Modal -->
    <div
      class="modal fade"
      id="viewBlogCategoryModal"
      role="dialog"
      aria-labelledby="viewBlogCategory"
      aria-hidden="true"
    >
      <div
        class="modal-dialog modal-dialog-centered modalLarge"
        role="document"
      >
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="viewBlogCategoryModal">
              {{ $t("message.VIEW_BLOG_CATEGORY") }}:
              {{ blogCategoryData.name }}
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
                  {{ $t("message.VIEW_BLOG_CATEGORY") }}:
                  {{ blogCategoryData.name }}
                </div>
              </div>
              <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>{{ $t("message.NAME") }}</th>
                        <td>{{blogCategoryData.name}}</td>
                    </tr>
                    <tr>
                        <th>{{ $t("message.DESCRIPTION") }}</th>
                        <td>{{blogCategoryData.description}}</td>
                    </tr>
                    <tr>
                        <th>{{ $t("message.CREATED_AT") }}</th>
                        <td>{{blogCategoryData.created_at | formatDateTime}}</td>
                    </tr>
                    <tr>
                        <th>{{ $t("message.UPDATED_AT") }}</th>
                        <td>{{blogCategoryData.updated_at | formatDateTime}}</td>
                    </tr>
                    <tr>
                        <th>{{ $t("message.CREATED_BY") }}</th>
                        <td v-if="blogCategoryData.created_by">{{blogCategoryData.created_by.name}}</td>
                        <td v-else>-</td>
                    </tr>
                    <tr v-if="blogCategoryData.updated_by">
                        <th>{{ $t("message.UPDATED_BY") }}</th>
                        <td >{{blogCategoryData.updated_by.name}}</td>
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
  name: "viewBlogCategoryModal",
  props: ["blogCategoryData"],
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