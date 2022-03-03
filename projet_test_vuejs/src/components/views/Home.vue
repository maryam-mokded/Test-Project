<template>
  <div class="container">
    <navBar />
    <p v-for="employee in employees" :key="employee.id">
      Name : {{ employee.name }}<br />
      Address : {{ employee.address }}<br />
      Phone Number : {{ employee.phone_number }} <br />
      Salaire : {{ employee.salaire }}<br />

      <router-link  id="btn" v-bind:to="'/details/' + employee.id" type="button" class="btn btn-info"> Show </router-link>
      <router-link  id="btn" v-bind:to="'/update/' + employee.id" type="button" class="btn btn-light"> Update </router-link>
      <button type="button" class="btn btn-secondary" v-on:click="DeleteEmployee(employee.id)"> Delete </button>
   
    </p>
  </div>
</template>

<script>
//@ is an alias to /src
import navBar from "../Layout/navBar.vue";
import EmployeeService from "@/Services/EmployeeService.js";

export default {
  components: {
    navBar,
  },
  data() {
    return {
      employees: null,
    };
  },
  methods: {
    DeleteEmployee(id){
      EmployeeService.DeleteEmployee(id)
      .then(() => {
          //refresh page 
          this.$router.go()
        })
        .catch((error) => {
          console.log(error);
        });
    },
    GetAllData() {
      EmployeeService.getEmployees()
        .then((response) => {
          this.employees = response.data;
          console.log(this.employees);
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },
  created() {
    //Code qui sera executer lorsque le components est crée
    this.GetAllData();
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
.btn {
  margin-left: 8px;
  margin-right: 8px;
}
a{
 margin-top: 70px;
 }
</style>
