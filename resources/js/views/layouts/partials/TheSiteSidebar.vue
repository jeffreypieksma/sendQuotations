<template>
  <div class="sidebar-left">
    <div class="sidebar-body scroll-pane">
      <div class="side-nav">
        <v-collapse accordion>
          <v-collapse-item active-url="/admin/dashboard">
            <a slot="item-title" href="#">
              <i class="icon-fa icon-fa-dashboard"/>Dashboard
              <span class="icon-fa arrow icon-fa-fw"/>
            </a>

            <router-link to="/admin/dashboard/basic">
              Basic
            </router-link>

            <router-link to="/admin/dashboard/ecommerce">
              Ecommerce
            </router-link>

            <router-link to="/admin/dashboard/finance">
              Finance
            </router-link>
          </v-collapse-item>

          <!-- Clients -->
          <v-collapse-item active-url="/admin/clients">
            <a slot="item-title" href="#">
              <i class="icon-fa icon-fa-user"/>Clients
              <span class="icon-fa arrow icon-fa-fw"/>
            </a>

            <router-link to="/admin/clients/all">
              All Clients
            </router-link>

            <router-link to="/admin/clients/create">
              Create new client
            </router-link>

          </v-collapse-item>

          <!-- Quotations -->
          <v-collapse-item active-url="/admin/quotations">
            <a slot="item-title" href="#">
              <i class="icon-fa icon-fa-folder-o"/>Quotations
              <span class="icon-fa arrow icon-fa-fw"/>
            </a>

            <router-link to="/admin/quotations/all">
              All Quotations
            </router-link>

            <router-link to="/admin/quotations/create">
              Create new quotation
            </router-link>

          </v-collapse-item>
        </v-collapse>
      </div>
    </div>
  </div>
</template>