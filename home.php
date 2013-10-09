<?php 
  if (!defined('CMS')) exit; 
  echo $this->doctypeDeclaration(); 
  $isHomePage = true;
  include('_theme.php');
?>
