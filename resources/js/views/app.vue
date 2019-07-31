<template>
  <v-app>
    <v-content>
      <v-container fluid>
        <router-view></router-view>
      </v-container>
    </v-content>

    <v-bottom-navigation :value="activeBtn" color="deep-purple" horizontal dark>
      <router-link to="/1" tag="v-btn">
        <v-btn>
          <span>Home</span>
          <v-icon>home</v-icon>
        </v-btn>
      </router-link>
      <router-link to="/2" tag="v-btn">
        <v-btn>
          <span>Admin</span>
          <v-icon>build</v-icon>
        </v-btn>
      </router-link>
    </v-bottom-navigation>
  </v-app>
</template>

<script>
export default {
  name: "app"
};
</script>
