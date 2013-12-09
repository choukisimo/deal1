  <div id="content">
          <div style="clear: both;" id="footer" class="footer group">
          </div>

          <div id="super-footer" class="footer group">
            <!-- footer -->
            <!-- H:308 --><div class="about">
                
                <p><strong>H-DEALS.MA</strong> Le principe de notre plateforme est simple et repose sur le principe du « deal » : il faut un nombre minimum d’acheteurs pour obtenir une remise. Plus vous serez nombreux à vous inscrire, plus vos chances d’obtenir les réductions seront grandes.</p>
            </div>
            <div class="slide">
                <h6>Explore</h6>
                <ul>
                <li><a href="#">A propos</a></li>
                <li><a href="sitemap.xml">Site map</a></li>
                <li><a href="register.php">S'inscrire</a></li>
                <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            <div class="slide">
               <h6>Villes</h6>
                <ul>
                <?php foreach ($cities as $v) {?>
                  <li><a href="city.php?c=<?php echo $v->nomVille; ?>"><?php echo $v->nomVille; ?></a></li>
                <?php }?>
                </ul>
            </div>
            <div class="slide">
                <h6>Catégories</h6>
                <ul>
                <?php foreach ($dcats as $v) {?>
                  <li><a href="category.php?cat=<?php echo $v->id; ?>"><?php echo $v->intitule; ?></a></li>
                <?php }?>
                </ul>
            </div><!-- /H -->
          </div>
        </div><!-- /#content -->
