<?php 
      require 'classes/users.class.php';
      require 'classes/deals.class.php' ;
      require 'classes/categories.class.php';
      require 'classes/cities.class.php';
      require 'classes/carts.class.php';
      require 'classes/commandes.class.php';
      require 'classes/index.class.php';
      $cat=new Category();
      $city=new City();
      $user=new User();
      $dcats=$cat->getCategories(); 
      $cities= $city->getCities();
?>

<html lang="fr" class="no-js" xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8">
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
  <title>Bienvenue à H-Deals</title>
<!-- CSS -->

  <link href="views/css/main.css"  rel="stylesheet">
  
  <link type="text/css" rel="stylesheet" media="all" href="views/css/application-3b17449bd0cbd648712f1934ad497150.css">
  <link type="text/css" rel="stylesheet" media="all" href="views/css/publisher-d5a5808ee9105eff1c335942485c63e4.css">
  <link type="text/css" rel="stylesheet" media="all" href="views/css/tuaw-0824903f90e157aedd1c3f5777cc896e.css">
  <link type="text/css" href="views/css/styleapp.css" rel="stylesheet">
 
  
 
  
 <!-- <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic"> -->
<!-- /CSS -->
<!-- /JS -->
  <script src="views/js/jquery-1.9.1.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
  <script type="text/javascript" src="views/js/app.js"></script>
  <script type="text/javascript" src="views/js/facebook.js"></script>
  <script type="text/javascript" src="views/js/kkcountdown.min.js"></script>
  <script src="views/js/application-0699c91aed7d875ea34ab8cad1537aa4.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(function(){
          $("#commit").click(function(){
          $(".error-label").hide();
          var hasError = false;
          var passwordVal = $("#authentication_user_password").val();
          var checkVal = $("#authentication_user_password_confirmation").val();
          if(passwordVal != checkVal ) {
              $("#authentication_user_password_confirmation").after('<span class="error-label">Les mots de passe ne correspondent pas. .</span>');
              hasError = true;
          }
          if(hasError == true) {return false;}
      });
  });
  </script>
  <script type="text/javascript">
              $(document).ready(function(){
                  $(".countDown").kkcountdown({
                      dayText   : 'jour ',
                      daysText  : 'j ',
                      hoursText : 'h ',
                      minutesText : "'",
                      secondsText : '',
                      displayZeroDays : false,
                      textAfterCount : 'Ce deal est terminé',
                      callback : function(){
                      }
                  });
              });
  </script>
<!-- /JS -->
</head>
<body>


<div id="fb-root"></div>

  <div id="pub-wrapper">

    <div id="frame">
      <div id="container">
          <div id="stacksocial-wrapper">
  
  
  <div class="l-header--fixed navbarjs-fixed" style="width: 999px; left: 50%; margin-left: -499.5px;"></div>
<div class="header l-header cf navbarjs-nav" id="navbar-header">
  <div class="l-header__container">

  <?php  if(!$user->isLogged()) {?>
  <!-- Connexion-->
  <div class="header__sub-object--right l-header__option l-header__option__right">
    <a href="login.php"><span class="header__account l-header__account--first">Se connecter</span></a>
    <a href="register.php"><span class="header__account header__account--bordered l-header__account--bordered">S'inscrire</span></a>
  </div>
  <!-- /Connexion-->
  <?php }else{?>
  <div class="header__account-container l-header__account-container header__sub-object--right l-header__option header__option__right--logged-in l-header__option__right js-dropdown-parent">
    <span class="header__account">
      <span class="l-header__account__avatar">
        <a href="panel.php"><img alt="Picture?type=square" class="l-header__account__avatar" src="views/images/1.gif"></a>
        
      </span>
    </span>
    <span class="header__account__info-container l-header__account__info-container">
      <span class="header__account__full-name l-header__account__full-name"><?php echo $user->getUserName()->nom.' '.$user->getUserName()->prenom; ?></span>

      <div class="header__dropdown__container--profile l-header__dropdown__container--profile js-dropdown" style="display: none;">
        <div class="header__dropdown__group l-header__dropdown__group" style="width:100%">
          <a href="/users/521401?show=my-account__profile"><div class="header__dropdown__item--profile l-header__dropdown__item--profile"><span class="l-header__dropdown__item__text--profile">Mon Profil</span></div></a>
          <a href="/users/521401?show=my-account__account"><div class="header__dropdown__item--profile l-header__dropdown__item--profile"><span class="l-header__dropdown__item__text--profile">Mes commandes</span></div></a>
          <a href="index.php?logout=true" data-method="delete" rel="nofollow"><div class="header__dropdown__item--profile l-header__dropdown__item--signout"><div class="header__dropdown__item--signout"><span class="l-header__dropdown__item__text--profile">Déconnexion →</span></div></div></a>
        </div>
      </div>

      <span class="header__account__session-destroy l-header__account__session-destroy"><a href="panel.php">Mon Compte <i class="l-icon-arrow--my-account icon-arrow-down-2 js-dropdown-account"></i></a></span>
    </span>
  </div>
  <?php } ?>

        <div class="header__option l-header__option">
          <a class="header__logo" href="/"><span class="header__option__home-link"><i class="icon-house icon-stack--header"></i></span></a>
        </div>

    <div class="header__sub-object l-header__option header__dropdown js-dropdown-parent">
      <div class="header__categories"><i class="icon-categories icon-categories--header l-icon-categories"></i>
        <div class="l-header__categories__text">Categories</div></div>
      <div class="header__dropdown__container l-header__dropdown__container js-dropdown" style="display: none;">
        <div class="header__dropdown__group l-header__dropdown__group">
    <?php foreach ($dcats as $v) {?>
            <a href="category.php?cat=<?php echo $v->id; ?>"><div class="header__dropdown__item l-header__dropdown__item"><img style="position: relative;top: 4px;left: -2px;padding-right: 1px;width:24px;" src="<?php echo $v->icone; ?>"><span class="l-header__dropdown__item__text"><?php echo $v->intitule; ?></span></div></a>
            <?php } ?>
        </div>
      </div>
    </div>
    <?php foreach ($cities as $v) {?>
        <a class="header__option l-header__option header__option--promotion header__sub-object" href="city.php?c=<?php echo $v->nomVille; ?>"><div class="header__categories--standalone">
      <div class="l-header__categories__text"><?php echo $v->nomVille; ?></div></div></a>
    <?php } ?>

    

  </div>
</div>
