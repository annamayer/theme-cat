<?php if (!defined('CMS')) exit; ?>
<!--start holder-->
<div class="holder_content">
   <section class="group1">
      <?php echo $this->generateBlock('home1'); ?>
   </section>
   
   <section class="group2">
      <?php echo $this->generateBlock('home2'); ?>
   </section>
   
   <section class="group3">
      <?php echo $this->generateBlock('home3'); ?>
   </section>
 
   </div>
<!--end holder-->

<!--start holder-->
   <div class="holder_content2">
      <section class="group6">
         <?php echo $this->generateBlock('main'); ?>
      </section>
    <div class="clear"><!-- --></div>
</div>
<!--end holder-->