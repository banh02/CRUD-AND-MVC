<?php
$url = isset($_GET['url']) == true ? $_GET['url'] : "/";
require_once 'Controller/HomeController.php';
require_once 'Controller/ActionController.php';

switch ($url) {

   case '/':
   case 'sanpham':
      $ctr = new HomeController();
      $ctr->index();
      break;


   case 'create':
      $ctr = new ActionController();
      $ctr->create();
      break;


   case 'save_SP':
      $ctr = new ActionController();
      $ctr->saveSP();
      break;

   case 'update_SP':
      $ctr = new ActionController();
      $ctr->updateSP();
      break;

   case 'save_update_SP':
      $ctr = new ActionController();
      $ctr->saveupdateSP();
      break;

   case 'delete_SP':
      $ctr = new ActionController();
      $ctr->deleteSP();
      break;
}
?>