<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->
    <?=HTML::style('static/plugin/twitter-bootstrap/docs/assets/css/bootstrap.css')?>
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <?=HTML::style('static/plugin/twitter-bootstrap/docs/assets/css/bootstrap-responsive.css')?>

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
  </head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Project name</a>
          <!--.nav-collapse --> 
          <div class="nav-collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div>
          <!--/.nav-collapse -->
        </div>
      </div>
    </div>
    
    <!-- container -->   
    <div class="container">

      <h1>Bootstrap starter template</h1>
      <p>
          Use this document as a way to quick start any new project.<br>
          All you get is this message and a barebones HTML document.
      </p>

    </div>
    <!-- /container -->

    <!-- Le javascript -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?=HTML::script('static/plugin/twitter-bootstrap/docs/assets/js/jquery.js')?>
    <?=HTML::script('static/plugin/twitter-bootstrap/docs/assets/js/bootstrap-transition.js')?> 
    <?=HTML::script('static/plugin/twitter-bootstrap/docs/assets/js/bootstrap-alert.js')?> 
    <?=HTML::script('static/plugin/twitter-bootstrap/docs/assets/js/bootstrap-modal.js')?> 
    <?=HTML::script('static/plugin/twitter-bootstrap/docs/assets/js/bootstrap-dropdown.js')?> 
    <?=HTML::script('static/plugin/twitter-bootstrap/docs/assets/js/bootstrap-scrollspy.js')?> 
    <?=HTML::script('static/plugin/twitter-bootstrap/docs/assets/js/bootstrap-tab.js')?> 
    <?=HTML::script('static/plugin/twitter-bootstrap/docs/assets/js/bootstrap-tooltip.js')?> 
    <?=HTML::script('static/plugin/twitter-bootstrap/docs/assets/js/bootstrap-popover.js')?> 
    <?=HTML::script('static/plugin/twitter-bootstrap/docs/assets/js/bootstrap-button.js')?> 
    <?=HTML::script('static/plugin/twitter-bootstrap/docs/assets/js/bootstrap-collapse.js')?> 
    <?=HTML::script('static/plugin/twitter-bootstrap/docs/assets/js/bootstrap-carousel.js')?> 
    <?=HTML::script('static/plugin/twitter-bootstrap/docs/assets/js/bootstrap-typeahead.js')?> 
   
  </body>
</html>
