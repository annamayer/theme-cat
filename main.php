<?php 
  if (!defined('CMS')) exit; 
  echo $this->doctypeDeclaration(); 
  $isHomePage = false;
  include('_theme.php');
?>
