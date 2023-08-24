<template>
  <div>
    <!-- Modal -->
    <div
      class="modal fade"
      id="viewAreaModal"
      role="dialog"
      aria-labelledby="viewArea"
      aria-hidden="true"
    >
      <div
        class="modal-dialog modal-dialog-centered modalLarge"
        role="document"
      >
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="viewAreaModal">
              {{ $t("message.VIEW_AREA") }}:
              {{ areaData.name }}
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
                  {{ areaData.name }}
                </div>
              </div>
              <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>{{ $t("message.NAME") }}</th>
                        <td>{{areaData.name}}</td>
                    </tr>
                    <tr>
                        <th>{{ $t("message.DESCRIPTION") }}</th>
                        <td>{{areaData.description}}</td>
                    </tr>
                    <tr>
                        <th>{{ $t("message.BANNER_IMAGE") }}</th>
                        <td><img v-bind:src="'images/property-types/' + areaData.banner_image" width="100" alt="Banner not found"/></td>
                    </tr>
                    <tr>
                        <th>{{ $t("message.CREATED_AT") }}</th>
                        <td>{{areaData.created_at | formatDateTime}}</td>
                    </tr>
                    <tr>
                        <th>{{ $t("message.UPDATED_AT") }}</th>
                        <td>{{areaData.updated_at | formatDateTime}}</td>
                    </tr>
                    <tr>
                        <th>{{ $t("message.CREATED_BY") }}</th>
                        <td v-if="areaData.created_by">{{areaData.created_by.name}}</td>
                        <td v-else>-</td>
                    </tr>
                    <tr v-if="areaData.updated_by">
                        <th>{{ $t("message.UPDATED_BY") }}</th>
                        <td >{{areaData.updated_by.name}}</td>
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
  name: "viewAreaModal",
  props: ["areaData"],
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