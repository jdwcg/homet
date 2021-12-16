<?php
include_once 'header.php';
if(isset($_GET['id'])) {
  echo file_get_contents('sub_homet/'.$_GET['id'].'.html');
} else {
  echo file_get_contents('sub_homet/main.html');
}
include_once 'footer.php';
