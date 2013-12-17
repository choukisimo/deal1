<?php include 'views/header.php';
      $user=new User();
      $cat=new Category();
      $deal = new Deal(); 
      $d=$deal->getDealById();
      $r=$deal->getLastDeals();
?>
    
<main>
<div id="container">
<div id="stacksocial-wrapper">
  
  <div class="l-header--fixed navbarjs-fixed" style="width: 999px; left: 50%; margin-left: -499.5px;"></div>

<div class="main l-main">
  
    <div class="l-main__container">
      <h1 class="main__header l-main__header"><?php echo $d->titre;?></h1>
      
    </div>
  <div class="l-main__container grid">
    <div class="col-8">
      <div class="main-unit l-main-unit l-main-unit__slideshow slideshow">
  <div style="background: none" class="main-unit__image__container l-main-unit__image__container--slide">
    <img src="<?php echo $d->image;?>" class="main-unit__image l-main-unit__image main-unit__image--slide slidejs-display">
  </div>
  <div class="grid">
  </div>
</div>
      <div class="clear navbarjs-nav" id="navbar-sub">
  <div class="grid">
      <a class="main__pill l-main__pill navbarjs-pill anchor-link active" href="#overview" name="overview">Détail</a>
      <a class="main__pill l-main__pill navbarjs-pill anchor-link" href="#terms" name="terms">Conditions</a>
      <a class="main__pill l-main__pill navbarjs-pill anchor-link" href="#comments" name="comments">Adresse</a>
    <a class="main__pill l-main__pill anchor-link navbarjs-exclusive" href="#stacksocial-wrapper" name="top">
      <i class="icon-arrow-up"></i>
    </a>
    <?php if($user->isLogged()) { ?>
      <a class="purchase-unit__action__submit l-navbarjs__buy-button navbarjs-exclusive col-2" id="commit_link" href="cart.php?id=<?php echo $d->id;?>">
    Acheter <i class="icon-arrow-right"></i>
    <?php } ?>
</a>
  </div>
</div>
         <div class="main-unit l-main-unit">
  <div class="tab-content tab-content--active" id="overview">

    <div class="product-info-sect" id="5597">
      <article class="product-description">
   <?php echo $d->description;?>
     </article>
    </div>
    <hr class="main-unit__hr l-main-unit__hr">
  </div>

  <div class="tab-content tab-content--active" id="terms">
    <div class="main-unit__additional-info__headline l-main-unit__additional-info__headline">Conditions</div>
    <?php echo $d->conditions; ?>
  </div>

<hr class="main-unit__hr l-main-unit__hr">

    <div class="tab-content tab-content--active" id="comments">
    <div class="main-unit__additional-info__headline l-main-unit__additional-info__headline">Adresse</div>
    <ul><li><?php echo $d->adresse.', <b>'.$d->ville.'</b>'; ?></li></ul>
    </div>

</div>
   
    </div>
    <div class="col-4">
      <div class="purchase-unit__headline l-purchase-unit__headline" id="purchase-form">
  <div class="purchase-unit__price l-purchase-unit__price" style="font-size: 37px;"><?php echo $d->prixReduit;?> Dhs<span class="purchase-unit__price__cents l-purchase-unit__price__cents"></span></div>
  <div class="purchase-unit__promotion-information l-purchase-unit__promotion-information">
    <div class="purchase-unit__cost-price l-purchase-unit__cost-price"><i class="icon-tag icon-tag__purchase-unit"></i> <strike><?php echo $d->prixInitial;?> Dhs</strike></div>
    <div class="purchase-unit__promotion-info--bordered l-purchase-unit__promotion-info--bordered"><?php echo $deal->getDealRate($d->id);?> off</div>
  </div>
</div>

<div class="purchase-unit l-purchase-unit">
  <div class="purchase-unit__information l-purchase-unit__information">
    <div class="purchase-unit__information__topline l-purchase-unit__information__topline">
      <span class="l-purchase-unit__information__topline--left">
        <i class="icon-clock"></i> <span class="purchase-unit__information__time-container"><span class="countDown moreThanADay finaliza" data-time="<?php echo $d->timer;?>">
        </span></span>
      </span>
      <span class="l-purchase-unit__information__topline--right">
      </span>
    </div>
            <div class="purchase-unit__information__bottomline">
          <i class="icon-stack"></i> <?php echo $d->fournisseur;?>
        </div>

  </div>
  <div class="purchase-unit__hr"></div>
  <div class="purchase-unit__action l-purchase-unit__action">
<form method="POST" action="cart.php?id=<?php echo $d->id; ?>" accept-charset="UTF-8">
  <div style="margin:0;padding:0;display:inline">
    <br><br>
<?php if($user->isLogged()) { ?>
  <input type="submit" value="Acheter" name="commite" id="commite" class="purchase-unit__action__submit l-purchase-unit__action__submit">
 <?php } else {?> 
<input type="submit" value="Acheter" name="commit" id="commit" class="purchase-unit__action__submit l-purchase-unit__action__submit" disabled>
 <?php } ?>
  </form>
  </div>
<div class="purchase-unit__social-call-to-action l-purchase-unit__social-call-to-action">
    <div class="purchase-unit__social-call-to-action__text l-purchase-unit__social-call-to-action__text">
      Partager ce deal
    </div>

    <div class="purchase-unit__social-call-to-action__buttons l-purchase-unit__social-call-to-action__buttons">
      <a href="https://www.facebook.com/dialog/feed?app_id=154955004711101&amp;link=deal.php?id=<?php echo $d->id;?>"
      
       onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=436,width=626');return false;">
        <div class="purchase-unit__social-call-to-action__buttons__container l-purchase-unit__social-call-to-action__buttons__container"><i class="icon-facebook"></i> Share</div>
</a>      <a href="http://pinterest.com/pin/create/button/?url=http://deals.ma:8080/deals&amp;media=http://deals.ma:8080/deals/<?php echo $d->image;?>&amp;description=<?php echo $d->titre;?>" onclick="javascript:window.open(this.href,
    '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
        <div class="purchase-unit__social-call-to-action__buttons__container l-purchase-unit__social-call-to-action__buttons__container"><i class="icon-pinterest"></i> Pin It</div>
</a>      <a href="http://twitter.com/share?text=<?php echo $d->titre;?>&amp;url=http://deals.ma:8080/deals&amp;counturl=http://deals.ma:8080/deals" onclick="javascript:window.open(this.href,
    '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=260,width=600');return false;">
        <div class="purchase-unit__social-call-to-action__buttons__container l-purchase-unit__social-call-to-action__buttons__container"><i class="icon-twitter"></i> Tweet</div>
</a>    </div>
  </div>
</div>


<div class="box-unit">
  <div class="box-unit__container l-box-unit__container">
    <div class="box-unit__title l-box-unit__title">Recent Sales</div>

    <!-- Dérnier deals--> 
    <?php foreach ($r as $v) { ?>
      <div class="box-unit__item l-box-unit__item grid">
        <a href="<?php echo $v->id; ?>">
    <div class="box-unit__item__image col-4">
      <img src="<?php echo $v->image ?>" class="l-box-unit__item__image" alt="Redesign_dd_mainframe_630x473">
    </div>
    </a>
    <div class="box-unit__item__data l-box-unit__item__data col-8">
      <a href="<?php echo $v->id; ?>" title="<?php echo $v->titre ?>">
      <div class="box-unit__item__title l-box-unit__item__title"><?php if(strlen($v->titre) > 22 ){ echo substr($v->titre,0,22).'...';} else {echo $v->titre;} ?> <br/><span class="box-unit__item__price"><?php echo $v->prixReduit ?> Dhs</span></div>
      </a><div class="box-unit__item__information l-box-unit__item__information"><i class="icon-clock l-icon-clock--sale__thumbnail"></i> <abbr title="" data-prefix="false" class="timeago"><span class="countDown moreThanADay finaliza" data-time="<?php echo $v->timer; ?>"></span></abbr> | <a href="category.php?cat=<?php echo $v->categorie_id; ?>"><span class="box-unit__item__master-category"><?php $e=$cat->getCategoryName($v->categorie_id);echo $e->intitule; ?></a></div>
    </div>
  </div>
  <?php } ?>
    <!-- /Dérnier deals--> 
    
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


</main>
</div>

 <?php include 'views/footer.php'; ?>
</body>
</html>
