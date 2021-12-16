<?php
include_once 'header.php';
if(isset($_GET['id'])) {
  echo file_get_contents('sub/'.$_GET['id'].'.html');
} else {
  echo file_get_contents('sub/main.html');
}
include_once 'footer.php';
