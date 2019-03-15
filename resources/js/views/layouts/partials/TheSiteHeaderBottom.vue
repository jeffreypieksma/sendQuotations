<template>
  <div class="header-bottom">
    <div class="header-nav vue-dropdown-menu">
      <v-dropdown active-url="/admin/dashboard">
        <router-link slot="activator" to="/admin/dashboard">
          <i class="icon-fa icon-fa-dashboard"/>Dashboard
        </router-link>
      </v-dropdown>

      <v-dropdown active-url="/admin/clients">
        <router-link slot="activator" to="/admin/clients">
          <i class="icon-fa icon-fa-user"/>Clients
        </router-link>
      </v-dropdown>

      <v-dropdown active-url="/admin/files">
        <router-link slot="activator" to="/admin/clients">
          <i class="icon-fa icon-fa-file"/>Files
        </router-link>
      </v-dropdown>

      <v-dropdown active-url="/admin/settings">
        <router-link slot="activator" to="/admin/settings">
          <i class="icon-fa icon-fa-cogs"/>Settings
        </router-link>
      </v-dropdown>
    </div>
  </div>
</template>
