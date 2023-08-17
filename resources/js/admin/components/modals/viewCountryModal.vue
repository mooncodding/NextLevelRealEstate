<template>
  <div>
    <!-- Modal -->
    <div
      class="modal fade"
      id="viewCountryModal"
      role="dialog"
      aria-labelledby="viewCountry"
      aria-hidden="true"
    >
      <div
        class="modal-dialog modal-dialog-centered modalLarge"
        role="document"
      >
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="viewCountryModal">
              {{ $t("message.VIEW_COUNTRY") }}:
              {{ countryData.name }}
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
                  {{ $t("message.VIEW_COUNTRY") }}:
                  {{ countryData.name }}
                </div>
              </div>
              <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>{{ $t("message.NAME") }}</th>
                        <td>{{countryData.name}}</td>
                    </tr>
                    <tr>
                        <th>{{ $t("message.STATE") }}</th>
                        <td>{{countryData.state}}</td>
                    </tr>
                    <tr>
                        <th>{{ $t("message.CREATED_AT") }}</th>
                        <td>{{countryData.created_at | formatDateTime}}</td>
                    </tr>
                    <tr>
                        <th>{{ $t("message.UPDATED_AT") }}</th>
                        <td>{{countryData.updated_at | formatDateTime}}</td>
                    </tr>
                    <tr>
                        <th>{{ $t("message.CREATED_BY") }}</th>
                        <td v-if="countryData.created_by">{{countryData.created_by.name}}</td>
                        <td v-else>-</td>
                    </tr>
                    <tr>
                        <th>{{ $t("message.UPDATED_BY") }}</th>
                        <td v-if="countryData.updated_by">{{countryData.updated_by.name}}</td>
                        <td v-else>-</td>
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
  name: "viewCountryModal",
  props: ["countryData"],
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