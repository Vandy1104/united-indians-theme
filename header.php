
<!DOCTYPE html>
<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!-->
<html lang="en" dir="ltr"><!--<![endif]-->
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="author" content="Vandana">
    <meta name="description" content="United Indians is a Wellington NZ based non-profit community website. It also runs non-profit online store of various categories of products.">
    <meta name="keywords" content="non-profit, Indian community, online store, art, culture, blogs">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <!-- <link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon"> -->
    <!-- <link rel="stylesheet" href="//fonts.googleapis.com/css?family=font1|font2|etc" type="text/css"> -->
    <script type="text/javascript">
     var _gaq = _gaq || [];
     _gaq.push(['_setAccount', 'UA-XXXXXXXX-Y']);
     _gaq.push(['_trackPageview']);
     (function()
     {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
     })();
    </script>
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?><!-- notice the wordpress admin bar on top-->
  </head>
  <body>

    <header class="myTheme container-fluid col-12">
    <!-- bootstrap nav-walker -->

      <!-- <nav class="navbar navbar-expand-md navbar-light" role="navigation"> -->
      <nav class="navbar navbar-expand-lg navbar-light">

        <div class="container-fluid">

          <!-- Brand and toggle get grouped for better mobile display -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand text-light" href="http://localhost/final-summative/"></a>


          <!-- logo -->
          <?php
            if ( function_exists( 'the_custom_logo' ) ) {
              the_custom_logo();
            }
          ?>

          <div class="container-fluid">
          <?php
          wp_nav_menu(
            array(
            'theme_location' => 'top-menu',
           //  'menu' => 'Top Bar',
            'menu_class' => 'top-bar'
            )
          );

          ?>


    </div>
  </nav>
</header>
