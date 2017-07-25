<?php

function appel_vue($title){
  include 'Vue/header.vue.php';
  include 'Vue/' . $title . '.vue.php';
  include 'vue/footer.vue.php';
}
