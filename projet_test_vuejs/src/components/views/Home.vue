<template>
  <div class="home" id="home">
    <navBar />  
      <p v-for="employee in employees" :key="employee.id">
      Name :  {{employee.name}}<br>
      Address :  {{employee.address}}<br>
      Phone Number :   {{employee.phone_number}} <br>
      Salaire :  {{employee.salaire}}<br>
      </p><br><br>

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
      employees: null,
    };
  },
  created() {
    //Code qui sera executer lorsque le components est crée
    EmployeeService.getEmployee()
      .then((response) => {
        this.employees = response.data;
        console.log(this.employees);
      })
      .catch((error) => {
        console.log(error);
      });
  },
};
</script>

<style>
#home {
  margin-left: 500px !important;
  margin-top: 60px !important;
}
h1 {
  margin-left: 60px;
}
</style>
