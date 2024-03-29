    <!-- header starts-->
    <div id="header-wrap">
      <div id="header" class="container_16">
        <div id="header-main">
          <h1 id="logo-text">
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
              </h1>
          <p id="slogan"><?php print $site_slogan; ?></p>
        </div><!-- navigation -->
        <div id="nav">
         <?php if ($main_menu): ?>
         <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'inline', 'clearfix')))); ?>
         <?php endif; ?>
        </div>
        <form action="#" id="search-theme-form">
          <div>
            <div id="search">
              <div class="form-item" id="edit-search-theme-form-1-wrapper">
                <label for="edit-search-theme-form-1">Search this site:</label> <input type="text" maxlength="128" name="search_theme_form" id="edit-search-theme-form-1" size="15" value="" title="Enter the terms you wish to search for." class="form-text" />
              </div><input type="image" src="images/search.png" class="btn" />
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- header ends here -->
    
    <!-- content starts -->
    <div id="content-wrapper" class="container_16">
    	
        <div id="breadcrumb" class="grid_16"><?php print $breadcrumb; ?></div>
      <!-- main -->
      <div id="main" class="grid_8">
        <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
        <a id="main-content"></a>
        <?php print render($title_prefix); ?>
        <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
        <?php print render($title_suffix); ?>
        <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
        <?php print render($page['content']); ?>
        <?php print $feed_icons; ?>
      </div>
      <!-- main ends here -->

      <!-- sidebars starts here -->
      <div id="sidebars" class="grid_8">

        <!-- left sidebar starts here -->
        <div class="grid_4 alpha sidebar-left">
          <div class="block">
            <h3 class="title">Popular</h3>
            <ul>
              <li><a href="#">Jumentum Aptent Aliquip Occuro Iusto Quia Aliquip Tamen</a></li>
              <li><a href="#">Jumentum Aptent Aliquip Occuro Iusto Quia Aliquip Tamen</a></li>
              <li><a href="#">Jumentum Aptent Aliquip Occuro Iusto Quia Aliquip Tamen</a></li>
              <li><a href="#">Jumentum Aptent Aliquip Occuro Iusto Quia Aliquip Tamen</a></li>
              <li><a href="#">Jumentum Aptent Aliquip Occuro Iusto Quia Aliquip Tamen</a></li>
            </ul>
            <div class="more-link"><a href="#">more</a></div>
          </div>

          <div class="block">
            <h3 class="title">Our sponsors</h3>
            <div class="content">
              <p>Omnis bonorum ne has, has etiam nihil facilisi ne, his singulis intellegat ea. Vim consul laudem quaestio in, no nobis dolores comprehensam duo, quot elit molestie et sea.</p>
              <ul>
                <li>
                  <a href="#">PHP wackiness<br />
                  <span>Consistency in a programming language? You must be joking.</span></a>
                </li>
                <li>
                  <a href="#">CSS frustrations<br />
                  <span>More lucrative than Rubic's Cube, but slightly more challenging.</span></a>
                </li>
                <li>
                  <a href="#">Internet Explorer incompatibilities<br />
                  <span>Just when everything was looking great...</span></a>
                </li>
              </ul>
            </div>
          </div>

          <div class="block">
            <h3 class="title">
              Quote of the moment
            </h3>
            <div class="content">
              <p>
                “Nunc vel velit feugiat odio pulvinar vestibulum. Etiam pellentesque viverra orci. Vestibulum tellus tellus, elementum sit amet, venenatis at, scelerisque non, arcu.” – Horace
              </p>
            </div>
          </div>

        </div>
        <!-- left sidebar ends here -->

        <!-- right sidebar starts here -->
        <div class="grid_4 omega sidebar-right">

          <div class="block">
            <h3 class="title">Featured</h3>
            <div class="featured-item">
              <h4><a href="#">Hos Rusticus Jus Olim</a></h4>
              <p>Iriure antehabeo populus. Molior loquor ad nostrud olim loquor tation lucidus. Neque iustum inhibeo diam iustum verto sino dolus validus si. Meus oppeto ymo comis obruo ibidem meus...</p>
            </div>
            <div class="featured-item">
              <h4><a href="#">Hos Rusticus Jus Olim</a></h4>
              <p>Iriure antehabeo populus. Molior loquor ad nostrud olim loquor tation lucidus. Neque iustum inhibeo diam iustum verto sino dolus validus si. Meus oppeto ymo comis obruo ibidem meus...</p>
            </div>
            <div class="featured-item">
              <h4><a href="#">Hos Rusticus Jus Olim</a></h4>
              <p>Iriure antehabeo populus. Molior loquor ad nostrud olim loquor tation lucidus. Neque iustum inhibeo diam iustum verto sino dolus validus si. Meus oppeto ymo comis obruo ibidem meus...</p>
            </div>
            <div class="featured-item">
              <h4><a href="#">Hos Rusticus Jus Olim</a></h4>
              <p>Iriure antehabeo populus. Molior loquor ad nostrud olim loquor tation lucidus. Neque iustum inhibeo diam iustum verto sino dolus validus si. Meus oppeto ymo comis obruo ibidem meus...</p>
            </div>
          </div>

        </div>
        <!-- right sidebar ends here -->

      </div>
      <!-- sidebars end here -->

    </div>
    <!-- content ends here -->

    <!-- footer starts here -->
    <div id="footer-wrapper" class="container_16">

      <!-- footer top starts here -->
      <div id="footer-content">

        <!-- footer left starts here -->
        <div class="grid_8" id="footer-left">
          <div class="block">
            <h3 class="title">Elsewhere on the web</h3>
            <div class="content">
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque, id pulvinar odio lorem non turpis. Nullam sit amet enim. Suspendisse id velit vitae ligula volutpat condimentum. Aliquam erat volutpat.</p>
              <ul class="footer-list">
                <li><a href="#">Lullabot - <span>Makers of fine Drupal products and services.</span></a></li>
                <li><a href="#">The Lullabot Podcast - <span>Listen to Drupal!</span></a></li>
                <li><a href="#">Do It With Drupal - <span>Learn Drupal from the people who wrote it.</span></a></li>
                <li><a href="#">Drupal.org - <span>Everything Drupal.</span></a></li>
                <li><a href="#">Drupal Groups - <span>Find Drupal people near you.</span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- footer left ends here -->

        <!-- footer right starts here -->
        <div class="grid_8" id="footer-right">
          <div class="block">
            <h3 class="title">Recent images</h3>
            <table>
              <tr class="row-1 row-first">
                <td><a href="#"><img src="images/thumbs/IMG_5473.jpg" alt="" title="" width="40" height="40" /></a></td>
                <td><a href="#"><img src="images/thumbs/IMG_5487.jpg" alt="" title="" width="40" height="40" /></a></td>
                <td><a href="#"><img src="images/thumbs/IMG_5485.jpg" alt="" title="" width="40" height="40" /></a></td>
                <td><a href="#"><img src="images/thumbs/IMG_5463.jpg" alt="" title="" width="40" height="40" /></a></td>
                <td><a href="#"><img src="images/thumbs/IMG_5494.jpg" alt="" title="" width="40" height="40" /></a></td>
              </tr>
            </table>
          </div>
          <div class="block">
            <h3 class="title">About us</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque, id pulvinar odio lorem non turpis. Nullam sit amet enim. Suspendisse id velit vitae ligula volutpat condimentum. Aliquam erat volutpat. Sed quis velit. Nulla facilisi. Nulla libero. Vivamus pharetra posuere sapien. <a href="#">more...</a></p>
          </div>
        </div>
        <!-- footer right ends here -->

      </div>
      <!-- footer top ends here -->

      <!-- footer bottom starts here -->
      <div id="footer-bottom">
        <p class="bottom-left">All your base are belong to us!</p>
        <ul class="links secondary-links">
          <li><a href="index.html" title="" class="active">Home</a></li>
          <li><a href="rss.xml" title="">RSS Feed</a></li>
          <li><a href="http://jigsaw.w3.org/css-validator/check/referer" title="">CSS</a></li>
          <li><a href="http://validator.w3.org/check/referer" title="">XHTML</a></li>
        </ul>
      </div>
      <!-- footer bottom ends here -->

    </div>
    <!-- footer ends here -->
