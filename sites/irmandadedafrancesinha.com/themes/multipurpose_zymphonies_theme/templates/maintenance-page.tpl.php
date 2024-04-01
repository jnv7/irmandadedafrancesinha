<?php
/**
 * JNV
 * @file
 * Default theme implementation to display a single Drupal page while offline.
 *
 * All the available variables are mirrored in page.tpl.php. Some may be left
 * blank but they are provided for consistency.
 *
 * @see template_preprocess()
 * @see template_preprocess_maintenance_page()
 */
?>
<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

<head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
</head>

<body class="<?php print $classes; ?>" <?php print $attributes;?>>

<div id="header_wrapper">
  <header id="header" class="clearfix">
    <div class="top_left">
      <?php if ($logo): ?>
        <div id="logo"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><img src="<?php print $logo; ?>"/></a></div>
      <?php endif; ?>
      <h1 id="site-title">
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
        <div id="site-description"><?php print $site_slogan; ?></div>
      </h1>
    </div>
      </header>
</div>
<div id="page-wrap">
<div id="container">
  <div id="content">
    <section id="main" role="main" class="clearfix">
    <div id="toalha_mesa"><img class="logo_grande"></div>
    <?php print $messages; ?>
    <a id="main-content"></a>
    <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
    <?php print $content; ?>
    </section> <!-- /#main -->
 </div>
 </div>
</div>

<div id="footer">

  
  <div class="footer_credit">
    <div id="copyright" class="full-wrap clearfix">
      <div class="copyright">© 2017 Irmandade da Francesinha. Todos os direitos reservados.<br></div> 
      
      <!-- Social Links -->
        
              <span class="social-icons">
         <ul>
          <li><a class="fb" href="http://www.facebook.com/irmandadedafrancesinha" target="_blank" rel="me"><i class="fa fa-facebook"></i></a></li>
          <li><a class="twitter" href="http://www.twitter.com/irm_francesinha" target="_blank" rel="me"><i class="fa fa-twitter"></i></a></li>
          <li style="display: none;"><a class="gplus" href="" target="_blank" rel="me"><i class="fa fa-google-plus"></i></a></li>
          <li style="display: none;"><a class="linkedin" href="" target="_blank" rel="me"><i class="fa fa-linkedin"></i></a></li>
          <li style="display: none;"><a class="pinterest" href="" target="_blank" rel="me"><i class="fa fa-pinterest"></i></a></li>
          <li style="display: none;"><a class="youtube" href="" target="_blank" rel="me"><i class="fa fa-youtube"></i></a></li>
          <li><a class="rss" href="/rss.xml"><i class="fa fa-rss"></i></a></li>
         </ul>
        </span>
            <!-- End Social Links -->

      
    </div>
<div id="disclaimer" class="full-wrap clearfix"><div class="region region-disclaimer">
  <div id="block-panels-mini-disclaimer" class="block block-panels-mini">

      
  <div class="content">
    <div class="panel-display panel-1col clearfix" id="mini-panel-disclaimer">
  <div class="panel-panel panel-col">
    <div>


<div class="panel-pane pane-custom pane-1">
  
      
  
  <div class="pane-content">
    A Irmandade da Francesinha faz crónicas de experiências individuais de degustação às Francesinhas servidas por restaurantes, sempre numa perspectiva positiva de dignificar o prato e contribuir para a sua melhoria. Somos apenas consumidores comuns e não temos qualquer tipo de formação em hotelaria ou gastronómica, para além da mera perspectiva do utilizador. A Irmandade da Francesinha nunca se faz anunciar e as suas visitas são sempre incógnitas. Se algum cliente num restaurante disser ou sugerir que pertence à Irmandade da Francesinha, pedimos por favor que o sirvam bem, como a qualquer outro cliente, mas sabendo que não está a dizer a verdade.   </div>

  
  </div>
</div>
  </div>
</div>
  </div>
  
</div> <!-- /.block -->
</div>
 <!-- /.region -->
</div>

  </div>
  <div class="credits">
    Design by<a href="http://www.zymphonies.com"> Zymphonies</a>
  </div>
    <div id="overlay-div"></div>
</div>
</body>
</html>
