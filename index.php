<!--
  Author: Meher Ranjan[ @meherranjan ]
  Description: Pixel Art Canvas
-->
<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title></title>
  <meta name="description" content="">

  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="css/style.css">

  <script src="js/libs/modernizr-2.5.3.min.js"></script>
  <link rel="stylesheet" media="screen" type="text/css" href="css/colorpicker.css" />
  <!-- start Mixpanel -->
  <script type="text/javascript">(function(c,a){window.mixpanel=a;var b,d,h,e;b=c.createElement("script");b.type="text/javascript";b.async=!0;b.src=("https:"===c.location.protocol?"https:":"http:")+'//api.mixpanel.com/site_media/js/api/mixpanel.2.js';d=c.getElementsByTagName("script")[0];d.parentNode.insertBefore(b,d);a._i=[];a.init=function(b,c,f){function d(a,b){var c=b.split(".");2==c.length&&(a=a[c[0]],b=c[1]);a[b]=function(){a.push([b].concat(Array.prototype.slice.call(arguments,0)))}}var g=a;"undefined"!==
typeof f?g=a[f]=[]:f="mixpanel";g.people=g.people||[];h="disable track track_pageview track_links track_forms register register_once unregister identify name_tag set_config people.set people.increment".split(" ");for(e=0;e<h.length;e++)d(g,h[e]);a._i.push([b,c,f])};a.__SV=1.1})(document,window.mixpanel||[]);
mixpanel.init("5c355eda496bf57589156e1eb0b69055");</script>
  <!-- end Mixpanel -->
</head>
<body>
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
  <header></header>

  <div role="main" id="main-cont">
      <div id="grid"></div>      
      <input type="button" name="" value="Save To Desktop" id="savetodesktop">
      <input type="button" name="" value="Clear canvas" id="clearcanvas">
      <input type="checkbox" id="temp" data-img="db.png"><img src="./templates/db.png" alt="" >
      <div id="colorinput">
        
      </div>
  </div>

  <footer></footer>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>

  <script src="js/plugins.js"></script>
  <script type="text/javascript" src="js/colorpicker.js"></script>
  <script src="js/script.js"></script>

</body>
</html> 