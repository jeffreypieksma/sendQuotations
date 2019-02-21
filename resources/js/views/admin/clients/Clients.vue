<template>
  <div class="main-content">
    <div class="page-header">
      <h3 class="page-title">Clients</h3>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">clients</a></li>
        <li class="breadcrumb-item active">Clients</li>
      </ol>
      <div class="page-actions">
        <a href="#" class="btn btn-primary">
          <i class="icon-fa icon-fa-plus"/> New Client
        </a>
        <button class="btn btn-danger">
          <i class="icon-fa icon-fa-trash"/> Delete
        </button>
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
     
    }
  },
  methods: {


  }
}
</script>
