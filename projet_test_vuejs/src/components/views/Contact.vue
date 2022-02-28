<template>
  <div class="contact" id="contact">
    <navBar/>  
    <h1>Contact</h1>
  </div>
</template>


<script>
//import { Search, Edit, Check, Message, Star, Delete,} from '@element-plus/icons-vue'
import navBar from "../Layout/navBar.vue";
export default {
  name: "App",
  components: {
    navBar,
  },
};
</script>



<style>

#contact{
  margin-left: 500px !important;
  margin-top: 60px !important;
}
h1{
  margin-left: 60px;
}
</style>