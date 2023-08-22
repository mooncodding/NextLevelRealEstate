<template>
  <div>
    <!-- Modal -->
    <div
      class="modal fade"
      id="viewDeveloperModal"
      role="dialog"
      aria-labelledby="viewDeveloper"
      aria-hidden="true"
    >
      <div
        class="modal-dialog modal-dialog-centered modalLarge"
        role="document"
      >
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="viewDeveloperModal">
              {{ $t("message.VIEW_DEVELOPER") }}:
              {{ developerData.name }}
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
                  {{ $t("message.VIEW_DEVELOPER") }}:
                  {{ developerData.name }}
                </div>
              </div>
              <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>{{ $t("message.NAME") }}</th>
                        <td>{{developerData.name}}</td>
                    </tr>
                    <tr>
                        <th>{{ $t("message.EMAIL") }}</th>
                        <td>{{developerData.email}}</td>
                    </tr>
                    <tr>
                        <th>{{ $t("message.LATITUDE") }}</th>
                        <td>{{developerData.latitude}}</td>
                    </tr>
                    <tr>
                        <th>{{ $t("message.LONGITUDE") }}</th>
                        <td>{{developerData.longitude}}</td>
                    </tr>
                    <tr>
                        <th>{{ $t("message.ADDRESS") }}</th>
                        <td>{{developerData.address}}</td>
                    </tr>
                    <tr>
                        <th>{{ $t("message.PHONE_NUMBER") }}</th>
                        <td>{{developerData.phone_number}}</td>
                    </tr>
                    <tr>
                        <th>{{ $t("message.WHATSAPP_NUMBER") }}</th>
                        <td>{{developerData.whatsapp_number}}</td>
                    </tr>
                    <tr>
                        <th>{{ $t("message.IMAGE") }}</th>
                        <td><img v-bind:src="'images/developers/' + developerData.image" width="100" alt="Banner not found"/></td>
                    </tr>
                    <tr>
                        <th>{{ $t("message.CREATED_BY") }}</th>
                        <td v-if="developerData.created_by">{{developerData.created_by.name}}</td>
                        <td v-else>-</td>
                    </tr>
                    <tr v-if="developerData.updated_by">
                        <th>{{ $t("message.UPDATED_BY") }}</th>
                        <td v-if="developerData.created_by">{{developerData.created_by.name}}</td>
                        <td v-else>-</td>
                    </tr>
                    <tr>
                        <th>{{ $t("message.CREATED_AT") }}</th>
                        <td>{{developerData.created_at | formatDateTime}}</td>
                    </tr>
                    <tr>
                        <th>{{ $t("message.UPDATED_BY") }}</th>
                        <td>{{developerData.updated_at | formatDateTime}}</td>
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
  name: "viewDeveloperModal",
  props: ["developerData"],
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