<?php if (!defined('CMS')) exit; ?>
<!--start topContainer-->
<div class="topContainerInner">
  <!--start header-->
  <header>
    <!--start logo-->
    <div id="logo">
      <div class="headerLogoTop">
          <a href="#">
        <?php echo $this->generateManagedLogo(); ?></a>
      </div>
      <div class="headerLogoBottom">
        <?php echo $this->generateManagedString('slogan', 'div', '- For your cats -', 'slogan'); ?>
      </div>
    </div>
	  <!--end logo-->
	
    <!--start menu-->
    <nav class="topmenu">
      <?php echo $this->generateMenu('menuTop', 'menu1'); ?>
    </nav>
  	<!--end menu-->
	</header>
  <!--end header-->
  <!--start intro-->

  <section id="intro">
   <div id="slides">
     <div class="slides_container">
      <?php
        echo $this->generateManagedImage('catBanner', THEME_DIR.THEME.'/images/banner1.jpg', array('width' => '900', 'height'=>'300')); 
      ?>
      </div>
   </div>
  </section>
  <!--end intro-->
 
<?php 
 if ($isHomePage){
?> 
   <!--start holder-->
   <div class="holder_content1">

     <section class="introText">
     <?php
       echo $this->generateManagedString('welcome', 'h1', 'Welcome');
     ?>
        <?php
       echo $this->generateManagedString('welcome', 'article', "Douglas Adams: One of the problems of taking things apart and seeing how they work - supposing you're trying to find out how a cat works--you take that cat apart to see how it works, what you've got in your hands is a non-working cat. The cat wasn't a sort of clunky mechanism that was susceptible to our available tools of analysis.");
     ?>
     
     </section>
    </div>
    <!--end holder-->
<?php
  }else{
?>
  <div class="spacerMain">&nbsp;</div>
<?php
  }
?>
  <div class="clear"><!-- --></div>
</div>
<!-- end top container -->  