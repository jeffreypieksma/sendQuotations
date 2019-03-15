<template>
  <div class="main-content">
    
    <div class="row">
      <div class="col-lg-12 col-xl-6 mt-2">
        <div class="card">
          <div class="card-header">
            <h6><i class="icon-fa icon-fa-user text-warning"/>Clients</h6>
          </div>
          <div class="card-body">
            <table-component
              :data="[
                { name: 'John', email: 'henk@henk.nl' },
                { name: 'Paul', email: 'jopie@hotmail.com' },
              ]"
              table-class="table"
              sort-by="songs"
              sort-order="asc"
              class="custom-table"
              >
              <table-column show="name" label="Naam"/>
              <table-column show="name" label="E-mail"/>
              <table-column
                :sortable="false"
                :filterable="false"
                label=""
              >
                <template slot-scope="row">
                  <div class="table__actions float-right">
                    <a class="btn btn-default btn-sm" href="/admin/conversations/243/edit">
                    Edit
                    </a>
                    <a class="btn btn-default btn-sm" href="/admin/conversations/243/edit">
                    Delete
                    </a>
                  </div>
                </template>
              </table-column>
            </table-component>
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-xl-3 mt-2">
        <div class="card">
          <div class="card-header">
            <h6><i class="icon-fa icon-fa-paper-plane-o text-success"/>Outgoing agreements</h6>
          </div>
          <div class="card-body">
            <table-component
              :data="[
                { name: 'John', email: 'henk@henk.nl' },
                { name: 'Paul', email: 'jopie@hotmail.com' },
              ]"
              table-class="table"
              thead-class="hidden"
              :show-filter="false"
              >
              <table-column show="name" label=""/>
              <table-column
                :sortable="false"
                :filterable="false"
                label=""
              >
                <template slot-scope="row">
                  <div class="table__actions float-right">
                    <a class="btn btn-default btn-sm" href="/admin/conversations/243/edit">
                    Edit
                    </a>
                    <a class="btn btn-default btn-sm" href="/admin/conversations/243/edit">
                    Delete
                    </a>
                  </div>
                </template>
              </table-column>
            </table-component>
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-xl-3 mt-2">
        <div class="card">
          <div class="card-header">
            <h6><i class="icon-fa icon-fa-check-square-o text-success"/>Accepted agreements</h6>
          </div>
          <div class="card-body">
            <table-component
              :data="[
                { name: 'John', email: 'henk@henk.nl' },
                { name: 'Paul', email: 'jopie@hotmail.com' },
              ]"
              table-class="table"
              thead-class="hidden"
              :show-filter="false"
              >
              <table-column show="name" label=""/>
              <table-column
                :sortable="false"
                :filterable="false"
                label=""
              >
                <template slot-scope="row">
                  <div class="table__actions float-right">
                    <a class="btn btn-default btn-sm" href="/admin/conversations/243/edit">
                    Edit
                    </a>
                    <a class="btn btn-default btn-sm" href="/admin/conversations/243/edit">
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
    <div class="row">
      <div class="col-md-12 col-lg-6 col-xl-4">
        <a class="dashbox" href="#">
          <i class="icon-fa icon-fa-envelope text-primary"/>
          <span class="title">
            35
          </span>
          <span class="desc">
            Mails
          </span>
        </a>
      </div>
      <div class="col-md-12 col-lg-6 col-xl-4">
        <a class="dashbox" href="#">
          <i class="icon-fa icon-fa-ticket text-success"/>
          <span class="title">
            200
          </span>
          <span class="desc">
            Pending Tickets
          </span>
        </a>
      </div>
      <div class="col-md-12 col-lg-6 col-xl-4">
        <a class="dashbox" href="#">
          <i class="icon-fa icon-fa-shopping-cart text-danger"/>
          <span class="title">
            100
          </span>
          <span class="desc">
            New Orders
          </span>
        </a>
      </div>
    </div>
  </div>
</template>

<style lang="scss">
  .custom-table{
    position: relative;
    bottom: 55px;
  }

  .hidden{
    display: none;
  }
</style>


<script type="text/babel">
import { TableComponent, TableColumn } from 'vue-table-component'

export default {
  components: {
    TableComponent,
    TableColumn
  },
  data () {
    return {
      'header': 'header'
    }
  }
}
</script>
