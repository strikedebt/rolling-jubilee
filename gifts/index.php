<?php

if (is_valid_submission()) {
  redirect_to_permalink();
} else if (is_valid_permalink()) {
  $vars = extract_vars_from_permalink();
  extract($vars);
}

function is_valid_submission() {
  return (
    $_SERVER['REQUEST_METHOD'] == 'POST'
  );
}

function redirect_to_permalink() {
  $vars = array();
  foreach ($_POST as $key => $value) {
    $vars[] = urlencode($key) . '=' . urlencode($value);
  }
  $vars = implode('&', $vars);
  $vars = base64_encode($vars);
  header("Location: ./?$vars");
  exit;
}

function is_valid_permalink() {
  return (
    !empty($_SERVER['QUERY_STRING'])
  );
}

function extract_vars_from_permalink() {
  $vars = $_SERVER['QUERY_STRING'];
  $vars = base64_decode($vars);
  $vars = explode('&', $vars);
  $vars_array = array();
  foreach ($vars as $key_value) {
    list($key, $value) = explode('=', $key_value);
    $key = urldecode($key);
    $value = urldecode($value);
    $vars_array[$key] = $value;
  }
  return $vars_array;
}

function attr_value($var) {
  global $$var;
  if (!empty($$var)) {
    echo htmlentities($$var);
  }
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Rolling Jubilee" />
    <meta name="copyright" content="Licensed under GPL and MIT." />
    <meta name="description" content="Rolling Jubilee is a network of debtors who liberate debtors through mutual aid. We legally buy debt for pennies on the dollar, but instead of collecting it, we abolish it." />
    <meta property="og:title" content="Rolling Jubilee" />
    <meta property="og:description" content="A bailout of the people, by the people. We legally buy debt for pennies on the dollar, but instead of collecting it, we abolish it." />
    <meta property="fb:admins" content="" />
    <meta property="og:image" content="http://i.imgur.com/6l0x1.png" />
    <meta property="og:url" content="http://rollingjubilee.org" />
    <meta property="og:type" content="website" />
    <title>Rolling Jubilee</title>
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <link rel="stylesheet" href="../assets/fonts/mensch/font.css?1355281719084" />
    <link rel="stylesheet" href="../assets/js/fancybox/jquery.fancybox.css?1355281719084" />
    <link rel="stylesheet" href="../assets/css/rj.min.css?1355281719084" />
  </head>
  <body id="join-the-team">

    <div class="container">

      <div class="row">

        <div class="span24 center bg arrow-down-steep" id="top">

          <div class="row">

            <div class="span7">

            </div>

            <div class="span10">

              <a href="/">
                <h1>Rolling Jubilee</h1>
                <img src="../assets/img/fg_logo.png" alt="Rolling Jubilee" id="logo"/>
              </a>

            </div>

            <div class="span7">

              <nav id="contribute">

                <ul>
                  <li><a href="/">< Return to the Jubilee</a></li>
                </ul>

              </nav>

            </div>

          </div>

          <div class="row">

            <div class="span10 offset7 intro">

              <div class="counter-text pre">Send a gift!</div>

              <h3>You are now a part of history! Share the excitement by giving the gift of jubilee this holiday season.</h3>

              <p>&nbsp;</p>

            </div>

          </div>

        </div>

        <div class="span24" id="ecard">

          <div class="row">

            <div class="span24">

              <div class="ecard">

                <div id="options">
                  <div id="one">
                    <img src="http://placehold.it/300x200">
                  </div>
                  <div id="two">
                    <img src="http://placehold.it/300x200">
                  </div>
                  <div id="three">
                    <img src="http://placehold.it/300x200">
                  </div>
                </div>

                <a class="wepay-widget-button wepay-rj" id="wepay_widget_anchor_509d930edb083" href="https://www.wepay.com/donations/526105166">Continue</a><script type="text/javascript">var WePay = WePay || {};WePay.load_widgets = WePay.load_widgets || function() { };WePay.widgets = WePay.widgets || [];WePay.widgets.push( {object_id: 526105166,widget_type: "donation_campaign",anchor_id: "wepay_widget_anchor_509d930edb083",widget_options: {donor_chooses: true,allow_cover_fee: true,enable_recurring: true,allow_anonymous: true,button_text: "Donate"}});if (!WePay.script) {WePay.script = document.createElement('script');WePay.script.type = 'text/javascript';WePay.script.async = true;WePay.script.src = '../assets/js/wepay.js';var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(WePay.script, s);} else if (WePay.load_widgets) {WePay.load_widgets();}</script>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js" type="text/javascript"></script>
    <script src="../assets/js/data-cache.js?1355281719084"></script>
    <script src="../assets/js/rj.min.js?1355281719084"></script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=434070606656838";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-35929760-1']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>
  </body>
</html>