<!DOCTYPE HTML>
<html lang="ja" itemscope itemtype="http://schema.org/WebSite" prefix="og: http://ogp.me/ns#" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no,address=no,email=no">
  <title><?php echo $header_title; ?></title>
  <?php echo $header_ogp; ?>
  <?php echo $header_meta; ?>
  <link rel="stylesheet" href="/fonts/fontello-custom/css/fontello.css" media="all" />
  <link rel="stylesheet" href="/css/reset.css" media="all" />
  <link rel="stylesheet" href="/css/bootstrap-custom.css" media="all" />
  <link rel="stylesheet" href="/css/module.css" media="all" />
  <link rel="stylesheet" href="/css/common.css?<?php echo time(); ?>" media="all" />
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="/vendor/jquery-match-height/jquery.matchHeight-min.js"></script>
  <script src="/js/module.js"></script>
  <script src="/js/common.js"></script>
</head>
<body>

<?php echo $content_header; ?>

<?php echo $content_body; ?>

<?php echo $content_footer; ?>

</body>
</html>
