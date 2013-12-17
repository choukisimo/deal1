<?php include 'views/header.php';

      $deal = new Deal(); 
      $d=array();
    if (isset($_GET['cat'])){ 
      $d=$deal->getDealByCategory($_GET['cat']);
    }
    else{
      header("location: index.php");
    }
?>
    
<main>
  <div id="section_ofertas" class="submain">
  <section class="clearfix">
  <!-- featured -->
  

  <!-- deals -->
 <?php foreach ($d as $v) { ?>
  <article style="height: 399px;">
  <div class="barTop">
  <p>
  </p>
  <a href="<?php echo $v->id; ?>" title="<?php echo $v->titre; ?>">
  <img src="<?php echo $v->image;  ?>" alt="<?php echo $v->titre; ?>" height="196" width="300">
  </a>
  <span><?php echo $deal->getDealRate($v->id);?></span>
  </div>
  <div class="barMiddle">
      <h2><a href="<?php echo $v->id; ?>" pack="" formativo="" gestión="" administrativa=""><?php echo $v->titre; ?></a></h2>
        <div class="vcard">
          <p class="fn"><?php echo $v->fournisseur;?></p>
      <p class="adr"><span class="street-address"><?php echo $v->adresse;?></span>
      <span class="region"><?php echo $v->ville;?></span>
      </p>
      </div>
      <div class="timeOut" style="font-size:12px">
        <strong><?php  echo $deal->getDealCount($v->id)->count; ?></strong>
        <span class="countDown moreThanADay finaliza" data-time="<?php echo $v->timer;?>">
        </span>
      </div>
      </div>
      <div class="barBottom">
      <span><?php echo $v->prixInitial; ?> Dhs</span>
      <strong><?php echo $v->prixReduit; ?> Dhs</strong><a href="<?php echo $v->id; ?>" value="<?php echo $v->id;?>" title="plus...">voir ce deal</a>
      </div>
  </article>
  <?php } ?>
  <!-- deals -->
  </section>

  </div>

  </main>
</div>

 <?php include 'views/footer.php'; ?>
</body>
</html>