<template>
<<<<<<< HEAD
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
=======
  <div class="main-content page-profile">
    <div class="page-header">
      <h3 class="page-title">Client </h3>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Users</a></li>
        <li class="breadcrumb-item active">Jane Doe</li>
      </ol>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-body">
            <tabs class="tabs-default">
              <tab id="profile" name="Profile">
                <div class="row">
                  <div class="col-sm-3">
                    <div class="avatar-container">
                      <img
                        src="/assets/img/avatars/avatar-lg.png"
                        alt="Admin Avatar"
                        class="img-fluid"
                      >
                    </div>
                  </div>
                  <div class="col-sm-9">
                    <h4>Jane Doe</h4>
                    <p class="detail-row"><i class="icon-fa icon-fa-map-marker"/> New York , United States</p>
                    <p class="detail-row"><i class="icon-fa icon-fa-birthday-cake"/> September 7, 1991</p>
                    <p class="detail-row"><i class="icon-fa icon-fa-wrench"/> UI Designer / Pro Model</p>
                  </div>
                </div>
                <div class="row mt-4">
                  <div class="col-sm-12">
                    <h3 class="section-semi-title">Recent Activity</h3>
                    <ul class="media-list activity-list">
                      <li class="media">
                        <div class="media-left">
                          <a href="#">
                            <img
                              class="media-object img-thumbnail"
                              src="/assets/img/avatars/avatar1.png"
                              alt="Generic placeholder image"
                            >
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading">
                            Shane White <span>just posted an update</span>
                          </h4>
                          <small>Today at 3.50pm</small>
                          <p class="mt-2">"Hello Everyone! Its been a fun morning!"</p>
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-left">
                          <a href="#">
                            <img
                              class="media-object img-thumbnail"
                              src="/assets/img/avatars/avatar2.png"
                              alt="Generic placeholder image"
                            >
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading">
                            Adam David <span>just became friends with</span> Shane White
                          </h4>
                          <small>Yesterday at 9pm</small>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </tab>
              <tab id="profile-messages" name="Messages">
                <ul class="media-list activity-list">
                  <li class="media">
                    <div class="media-left">
                      <a href="#">
                        <img
                          class="media-object img-thumbnail"
                          src="/assets/img/avatars/avatar1.png"
                          alt="Generic placeholder image"
                        >
                      </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">
                        Adam David <span>sent a message</span>
                      </h4>
                      <small>Today at 3.50pm</small>
                      <p class="mt-2">"When you have children, you always have family. They will always be your priority, your responsibility.
                      And a man, a man provides. And he does it even when he's not appreciated or respected or even loved. He simply bears up and he does it. Because he's a man."
                      </p>
                    </div>
                  </li>
                  <li class="media">
                    <div class="media-left">
                      <a href="#">
                        <img
                          class="media-object img-thumbnail"
                          src="/assets/img/avatars/avatar2.png"
                          alt="Generic placeholder image"
                        >
                      </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">Shane White <span>sent a message</span></h4>
                      <small>Yesterday at 9pm</small>
                      <p class="mt-2">
                        “Hey! How you doin?”
                      </p>
                    </div>
                  </li>
                </ul>
              </tab>
              <tab id="profile-friends" name="Friends">
                <ul class="media-list friends-list">
                  <li class="media">
                    <div class="media-left">
                      <a href="#">
                        <img
                          class="media-object"
                          src="/assets/img/avatars/avatar1.png"
                          alt="Generic placeholder image"
                        >
                      </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">Shane White</h4>
                      <small>2000 friends</small>
                    </div>
                  </li>
                  <li class="media">
                    <div class="media-left">
                      <a href="#">
                        <img
                          class="media-object"
                          src="/assets/img/avatars/avatar2.png"
                          alt="Generic placeholder image"
                        >
                      </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">Adam David</h4>
                      <small>200 friends</small>
                    </div>
                  </li>
                  <li class="media">
                    <div class="media-left">
                      <a href="#">
                        <img
                          class="media-object"
                          src="/assets/img/avatars/avatar3.png"
                          alt="Generic placeholder image"
                        >
                      </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">Shane White</h4>
                      <small>2000 friends</small>
                    </div>
                  </li>
                  <li class="media">
                    <div class="media-left">
                      <a href="#">
                        <img
                          class="media-object"
                          src="/assets/img/avatars/avatar4.png"
                          alt="Generic placeholder image"
                        >
                      </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">Adam David</h4>
                      <small>200 friends</small>
                    </div>
                  </li>
                  <li class="media">
                    <div class="media-left">
                      <a href="#">
                        <img
                          class="media-object"
                          src="/assets/img/avatars/avatar5.png"
                          alt="Generic placeholder image"
                        >
                      </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">Shane White</h4>
                      <small>2000 friends</small>
                    </div>
                  </li>
                  <li class="media">
                    <div class="media-left">
                      <a href="#">
                        <img
                          class="media-object"
                          src="/assets/img/avatars/avatar6.png"
                          alt="Generic placeholder image"
                        >
                      </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">Adam David</h4>
                      <small>200 friends</small>
                    </div>
                  </li>
                </ul>
              </tab>
            </tabs>
          </div>
        </div>
      </div>
    </div>
  </div>
>>>>>>> 9c0da5460e5f9c1a289a6bb9c55d736b76737a3a
</template>
<script>
import { Tabs, Tab } from 'vue-tabs-component'

export default {
  components: {
    'tabs': Tabs,
    'tab': Tab
<<<<<<< HEAD
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
      async update() {
          console.log('yeahhh')
      },
      async deleteClient() {
          console.log('delete user')
      }
  },

  mounted() {
    this.getClient()
=======
>>>>>>> 9c0da5460e5f9c1a289a6bb9c55d736b76737a3a
  }
}
</script>
