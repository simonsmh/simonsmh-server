<!DOCTYPE HTML >
<html lang="zh-cn">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
  <meta name="theme-color" content="#3f51b5">
  <link rel="shortcut icon" type="image/x-icon" href="<!--[home]-->/favicon.ico" media="screen" />
  <title>
  <!--[title]-->
  </title>
  <!-- CSS -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="<!--[cdn]-->/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <script src="<!--[jquery]-->/jquery.min.js">
  </script>
  <script src="<!--[cdn]-->/js/materialize.js">
  </script>
  <script src="http://materializecss.com/js/init.js">
  </script>
  <script>
  $('#proxyoptions label').tooltip();
  </script>
  <?=injectionJS();?>
</head>
 <body> 
  <div class="navbar-fixed"> 
   <nav class="indigo" role="navigation"> 
    <div class="nav-wrapper container"> 
     <a id="logo-container" href="index.php" class="brand-logo"> Glype </a> 
      <a href="<!--[home]-->" onclick="location='<!--[home]-->'" class="button-collapse top-nav hide-on-large-only"><i class="large material-icons">&#xE5C4;</i></a>
       <ul class="right hide-on-med-and-down">
        <li><a href="<!--[home]-->">返回主站</a></li>
       </ul>
      </div> 
    </nav>
   </div>  
  <div class="section no-pad-bot" id="index-banner"> 
   <div class="container"> 
    <br /> 
    <br /> 
    <h2 class="header center orange-text"><!--[header]--></h2> 
    <div class="row center"> 
     <h5 class="header col s12 light"><!--[describe]--></h5> 
    </div> 
    <div class="progress"> 
     <div class="indeterminate blue"> 
     </div> 
    </div> 
    <br /> 
   </div> 
  </div> 
  <div class="container"> 
   <div class="section"> 
    <div class="row"> 
<form action="includes/process.php?action=update" method="post" onsubmit="return updateLocation(this);">
<h3 class="center">输入网址</h3>
<div class="row">
<!--[error]-->
</div>
<div class="input-field"> 
<input value="www.google.com" id="input" name="u" type="text" class="validate" /> 
<label class="active" for="website">输入网址</label> 
</div>
<div class="row center">
<button class="btn-large waves-effect waves-light orange" onclick="submit()" type="submit" name="action">开始浏览<i class="material-icons right">send</i> </button> 
</div>
<h4 class="center">选项</h4>
<div class="row">
</div>
<ul id="options">
<?php foreach ($toShow as $option) echo '<li><input type="checkbox" name="'.$option['name'].'" id="'.$option['name'].'"'.$option['checked'].'><label for="'.$option['name'].'">'.$option['title'].'</label></li>';?>
</ul>
</form>
<div class="row">
<p class="center">Powered by <a href="http://www.glype.com/">Glype</a>&reg; <!--[version]-->.</p>
</div>
    </div>
   </div> 
  </div> 
<footer class="page-footer orange">
   <div class="footer-copyright">
    <div class="container">
        Host by
      <a class="orange-text text-lighten-3" href="<!--[home]-->">
        <!--[who]-->
      </a>
      . CSS from
      <a class="orange-text text-lighten-3" href="http://materializecss.com">
        Materialize
      </a>
      . Icons from
      <a class="orange-text text-lighten-3" href="https://www.google.com/design/icons/">
        Google
      </a>
      .
    </div>
  </div>
</footer>
 </body>
</html>

<!-- CSS use by my self
  <link href="<!--[home]-->/css/googleapi.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="<!--[home]-->/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <script src="<!--[home]-->/js/jquery.min.js">
  </script>
  <script src="<!--[home]-->/js/materialize.js">
  </script>
  <script src="<!--[home]-->/js/init.js">
  </script>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create', 'UA-73742380-1', 'auto');ga('send', 'pageview');
  </script>
 -->
