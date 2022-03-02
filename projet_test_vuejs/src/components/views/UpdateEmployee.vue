<template>
  <div class="container">
    <h1>Update Employee</h1>
    <br /><br />
    <form @submit="postData" method="put">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label>Name</label>
          <input
            type="text"
            class="form-control"
            name="name"
            v-model="employee.name"
            placeholder="Name"
          />
        </div>
        <br />

        <div class="form-group col-md-6">
          <label>Address</label>
          <input
            type="text"
            class="form-control"
            name="address"
            v-model="employee.address"
            placeholder="Address"
          />
        </div>
      </div>
      <br />

      <div class="form-row">
        <div class="form-group col-md-6">
          <label>Phone Number</label>
          <input
            type="text"
            class="form-control"
            name="phone_number"
            v-model="employee.phone_number"
            placeholder="Phone Number"
          />
        </div>
      </div>
      <br />

      <div class="form-row">
        <div class="form-group col-md-6">
          <label>Salaire</label>
          <input
            type="text"
            class="form-control"
            name="aslaire"
            v-model="employee.salaire"
            placeholder="Salaire"
          />
        </div>
      </div>
      <br/>

      <button type="button" v-on:click="postData()" class="btn btn-primary">
        Update Epmloyee
      </button>
    </form>
  </div>
</template>

<script>
import EmployeeService from "@/Services/EmployeeService.js";
export default {
  data() {
    return {
      url_data: null,
      employee: {
        name: null,
        address: null,
        phone_number: null,
        salaire: null,
      },
    };
  },
  methods: {
    postData() {
      EmployeeService.UpdateEmployee(this.url_data, this.employee)
        .then(() => {
          window.location.href = "/home";
        })
        .catch((error) => {
          console.log(error);
        });
    },
    ShowEmployee() {
      EmployeeService.getEmployeeById(this.url_data).then((response) => {
        this.employee = response.data;
      });
    },
  },
  mounted() {
    this.url_data = this.$route.params.id;
    this.ShowEmployee();
  },
};
</script>

<style>
h1 {
  margin-left: 60px;
}
</style>
