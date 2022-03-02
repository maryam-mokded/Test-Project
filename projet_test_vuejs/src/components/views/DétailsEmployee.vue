<template>
  <div class="container">
    <navBar />
    <div v-if="emp">
      Name : {{ emp.id }}<br />
      Name : {{ emp.name }}<br />
      Address : {{ emp.address }}<br />
      Phone Number : {{ emp.phone_number }} <br />
      Salaire : {{ emp.salaire }}<br />
    </div>

    <router-link to="/home" type="button" class="btn btn-info">
      Return
    </router-link>
  </div>
</template>

<script>
//@ is an alias to /src
import navBar from "../Layout/navBar.vue";
import EmployeeService from "@/Services/EmployeeService.js";

export default {
  name: "App",
  props: {
    event: Object,
  },
  components: {
    navBar,
  },
  data() {
    return {
      url_data: null,
      emp: null,
    };
  },
  methods: {
    ShowEmployee() {
      EmployeeService.getEmployeeById(this.url_data).then((response) => {
        this.emp = response.data;
        console.log(this.emp);
      });
    },
  },
  //Code qui sera executer lorsque le components est crée
  mounted() {
    this.url_data = this.$route.params.id;
    console.log(this.url_data);
    this.ShowEmployee();
  },
  //created() {
  //  this.url_data = this.$route.params.id;
  // console.log(this.url_data);
  //  this.ShowEmployee();
  //},
};
</script>

<style>
h1 {
  margin-left: 60px;
}
.btn {
  margin-left: 8px;
  margin-right: 8px;
}
</style>
