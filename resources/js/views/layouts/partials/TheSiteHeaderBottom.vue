<template>
  <div class="header-bottom">
    <div class="header-nav vue-dropdown-menu">
      <v-dropdown active-url="/admin/dashboard">
        <router-link slot="activator" to="/admin/dashboard">
          <i class="icon-fa icon-fa-dashboard"/>Dashboard
        </router-link>
      </v-dropdown>

      <v-dropdown active-url="/admin/clients">
        <router-link slot="activator" to="/admin/clients/all">
          <i class="icon-fa icon-fa-user"/>Clients
        </router-link>
        
      </v-dropdown>

      <v-dropdown active-url="/admin/quotations/all">
        <router-link slot="activator" to="/admin/quotations/all">
          <i class="icon-fa icon-fa-file"/>Quotations
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
