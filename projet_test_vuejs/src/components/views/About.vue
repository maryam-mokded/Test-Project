<template>
  <div class="container">
    <navBar />
    <b-table responsive="sm" :items="items" />
  </div>
</template>

<script>
import navBar from "../Layout/navBar.vue";

import { BTable } from "bootstrap-vue";

export default {
  components: {
    BTable,
    navBar,
  },
  data() {
    return {
      items: [
        {
          age: 40,
          first_name: "Dickerson",
          last_name: "Macdonald",
          Occupation: "Job",
        },
        {
          age: 21,
          first_name: "Larsen",
          last_name: "Shaw",
          Occupation: "Job",
        },
        {
          age: 89,
          first_name: "Geneva",
          last_name: "Wilson",
          Occupation: "Bussiness",
        },
        {
          age: 38,
          first_name: "Jami",
          last_name: "Carney",
          Occupation: "Bussiness",
        },
        {
          age: 40,
          first_name: "James",
          last_name: "Thomson",
          Occupation: "Job",
        },
      ],
    };
  },
};
</script>

<style>
h1 {
  margin-left: 60px;
}
</style>
