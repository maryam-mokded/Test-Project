<template>
  <div class="container">
    <div id="forms">
      <h1>Add Employee</h1>
      <br /><br />
      <form>
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
     <br>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Photo</label>
            <input
              type="text"
              class="form-control"
              name="photo"
              v-model="employee.photo"
              placeholder="Photo"
            />
          </div>
        </div>
        <br>

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
        <br />

        <button type="button" v-on:click="postData()" class="btn btn-primary">
          Add Epmloyee
        </button>
      </form>
    </div>
  </div>
</template>

<script>
import EmployeeService from "@/Services/EmployeeService.js";

export default {
  data() {
    return {
      employee: {
        name: null,
        address: null,
        phone_number: null,
        photo: null,
        salaire: null,
      },
    };
  },
  methods: {
    postData() {
      EmployeeService.AddEmployee(this.employee)
        .then(() => {
          window.location.href = "/home";
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },
};
</script>

<style>
h1 {
  margin-left: 60px;
}
</style>
