<template>
  <div>
    <!-- Modal -->
    <div
      class="modal fade"
      id="viewPropertyStatusModal"
      role="dialog"
      aria-labelledby="viewPropertyStatus"
      aria-hidden="true"
    >
      <div
        class="modal-dialog modal-dialog-centered modalLarge"
        role="document"
      >
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="viewPropertyStatusModal">
              {{ $t("message.VIEW_PROPERTY_STATUS") }}:
              {{ propertyStatusData.name }}
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
                  {{ $t("message.VIEW_PROPERTY_STATUS") }}:
                  {{ propertyStatusData.name }}
                </div>
              </div>
              <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>{{ $t("message.NAME") }}</th>
                        <td>{{propertyStatusData.name}}</td>
                    </tr>
                    <tr>
                        <th>{{ $t("message.IMAGE") }}</th>
                        <td><img v-bind:src="'images/property-status/' + propertyStatusData.image" width="100" alt="Banner not found"/></td>
                    </tr>
                    <tr>
                        <th>{{ $t("message.CREATED_AT") }}</th>
                        <td>{{propertyStatusData.created_at | formatDateTime}}</td>
                    </tr>
                    <tr>
                        <th>{{ $t("message.UPDATED_AT") }}</th>
                        <td>{{propertyStatusData.updated_at | formatDateTime}}</td>
                    </tr>
                    <tr>
                        <th>{{ $t("message.CREATED_BY") }}</th>
                        <td v-if="propertyStatusData.created_by">{{propertyStatusData.created_by.name}}</td>
                        <td v-else>-</td>
                    </tr>
                    <tr v-if="propertyStatusData.updated_by">
                        <th>{{ $t("message.UPDATED_BY") }}</th>
                        <td >{{propertyStatusData.updated_by.name}}</td>
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
  name: "viewPropertyStatusModal",
  props: ["propertyStatusData"],
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