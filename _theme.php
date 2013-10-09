<?php if (!defined('CMS')) exit; 
?>
<html<?php echo $this->htmlAttributes(); ?>>
<meta charset="UTF-8">
<link rel="icon" href="<?php echo BASE_URL.THEME_DIR.THEME; ?>/images/favicon.gif" type="image/x-icon"/>
 <!--[if lt IE 9]>
 <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

<link rel="shortcut icon" href="<?php echo BASE_URL.THEME_DIR.THEME; ?>/images/favicon.gif" type="image/x-icon"/> 

<?php
    $site->addCss(BASE_URL.THEME_DIR.THEME.'/theme.css');
    echo $site->generateHead();
?>
  </head>
  <body class="body">
    <div class="theme">
      <div class="topContainer">
          <div class="wrapper">
             <?php
             include('_topContainer.php');
              ?>
          </div>
      </div>
      <div class="middleContainer">
        <div class="wrapper">
            <?php 
              if ($isHomePage){
                include('_containerHome.php'); 
              }else{
                include('_containerMain.php');   
              }
            ?>
          </div>
      </div>
      <div class="bottomUpperContainer">
        <div class="wrapper">
            <?php include('_footerUpper.php'); ?>        
        </div>
      </div>  
      <div class="bottomLowerContainer">
        <div class="wrapper">
            <?php include('_footerLower.php'); ?>        
        </div>
      </div> 
  <!-- Free template distributed by http://freehtml5templates.com -->   
  <?php
      $site->addJavascript(BASE_URL.LIBRARY_DIR.'js/jquery/jquery.js');
      echo $site->generateJavascript();
  ?>
    </div>
    <!-- end allPageContainer -->
  </body>
</html>
