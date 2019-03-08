<template>
  <div class="main-content">
    <div class="page-header">
      <h3 class="page-title">Clients</h3>
      <div class="row">

        <div class="col-lg-12 col-md-12 col-s-12">
          <div class="card">
            <div class="card-header">
              <h6>Clients</h6>
              <a href="/admin/clients/create" style="float:right" class="btn button add new">Create new client</a>
            </div>
            <div class="card-body">
              <table-component
                :data="clients"
                table-class="table"
                sort-by="id"
                sort-order="asc"
              >
              <table-column show="id" label="#"/>
              <table-column show="name" label="Name"/>
              <table-column show="email" label="Email"/>
              <table-column
                :sortable="true"
                :filterable="true"
                label=""
              >
                <template slot-scope="row">
                  <div class="table__actions">
                    <a class="btn btn-default btn-sm" :href="`/admin/clients/view/${row.id}`">
                      View
                    </a>
                    <a class="btn btn-default btn-sm" :href="`/admin/clients/view/${row.id}`">
                      Edit
                    </a>
                    <a class="btn btn-default btn-sm" :href="`/admin/clients/delete/${row.id}`">
                      Delete
                    </a>
                  </div>
                </template>
                </table-column>
              </table-component>
            </div>
          </div>  
        </div>
      </div>
    </div>
  </div>
</template>

<script type="text/babel">
import { TableComponent, TableColumn } from 'vue-table-component'
export default {
  components: {
    TableComponent,
    TableColumn
  },
  data () {
    return {
      clients: [

      ],
    }
  },
  methods: {
    async getClientsFromAPI () {
      let response = await window.axios.get('/api/admin/clients/all')

      this.clients = response.data

    },
  },
  mounted() {
    //this.clients = this.getClients()
    this.clients = this.getClientsFromAPI()
  }
}
</script>


  // async fetchData ({ page, filter, sort }) {
  //   const response = await axios.get(`/api/admin/clients/all?page=${page}`)

  //   return {
  //     data: response.data.data,
  //     pagination: {
  //       totalPages: response.data.last_page,
  //       currentPage: page,
  //       count: response.data.count
  //     }
  //   }
  // },