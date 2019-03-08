<template>
<div class="main-content">
    <div class="page-header">
        <h3 class="page-title">{{ client.name }} </h3>
        <div class="row">
            <div class="col-md-6 col-s-12">
                <form>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Name" :id="client.name" v-model="client.name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" placeholder="Email" :id="client.email" v-model="client.email">
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-danger" v-on:click="deleteClient">Delete</button>
                        <button type="button" class="btn btn-primary" v-on:click="update">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</template>
<script>
import { Tabs, Tab } from 'vue-tabs-component'

export default {
  components: {
    'tabs': Tabs,
    'tab': Tab
  },
  data () {
    return {
        client: {
            name: null,
            firstname: null,
            lastname: null,
            email: null
        }
    }
  },
  methods: {
      getClient() {
        const client = {
            name: 'John doe',
            firstname: 'John',
            lastname: 'Doe',
            email: 'johndoe@gmail.com'
        }
        this.client = client

      },

      getData() {
        const id = this.$route.params.id
        console.log(id)
        axios.get('/admin/clients/read/1')
        .then(function (response) {
            console.log(response)
        })
        .catch(function (error) {
            console.log(error)
        });
      },
      async update() {
          console.log('yeahhh')
      },
      async deleteClient() {
          console.log('delete user')
      }
  },

  mounted() {
    //this.getClient()
    this.getData()
  }
}
</script>
