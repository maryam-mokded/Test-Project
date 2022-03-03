<template>
  <div id="nav">
    
    <br>
    <span v-if="data">Data from local storage "{{ data }}"</span>
    <span v-if="!data">No data found in Local Storage</span><br>

    <router-link to="/home" class="btn btn-danger">Home</router-link>
    <router-link to="/about" class="btn btn-warning">About</router-link>
    <router-link to="/add" class="btn btn-success">Add</router-link>
    
    <span> |  Tester Local Storage :</span> 
    <button type="button" class="btn btn-primary" v-on:click="SaveData()">
      Save Item
    </button>
    <button type="button" class="btn btn-primary" v-on:click="GetData()">
      Get Item
    </button>
    <button type="button" class="btn btn-primary" v-on:click="RemoveData()">
      Remove Item
    </button>
  
  </div>
</template>

<script>

import LocalStorageSerice from "../../Services/LocalStorageService.js";

export default {
  data() {
    return {
    data:null
    };
  },
  methods: {
    SaveData() {
      LocalStorageSerice.SaveD("Chien","Luna");
    },
    GetData(){
      this.data = LocalStorageSerice.GetD("Chien");
    },
    RemoveData(){
      this.data = null;
      LocalStorageSerice.RemoveD("Chien");
    },

    
    }
};

</script>

<style>
a {
  margin-right: 25px;
  margin-bottom: 68px;
}
span{
  font-weight :bold;
  font-size: 24px;
}
</style>
