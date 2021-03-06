<!DOCTYPE html>
<!--[if lte IE 8]><html class="ie"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en" prefix="og: http://ogp.me/ns#"> <!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo html($page->title()) ?> | <?php echo html($site->title()) ?></title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
<?php if($page->description() != ''): ?>
    <!-- Summary Card twitter -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@abr4xas">
    <meta name="twitter:creator" content="@abr4xas">
    <meta name="twitter:title" content="<?php echo html($page->title()) ?> | <?php echo html($site->title()) ?>">
    <meta name="twitter:description" content="<?php echo html($page->title()) ?> | <?php echo html($page->description()) ?>">
    <meta name="twitter:image" content="logo.png">
    <!-- open graph -->
    <meta property="og:title" content="<?php echo html($page->title()) ?> | <?php echo html($site->title()) ?>">
    <meta property="og:type" content="website"> 
    <meta property="og:url" content="<?php echo $page->tinyurl() ?>">
    <meta property="og:image" content="<?php echo url() ?>logo.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">
    <meta property="og:description" content="<?php echo html($page->title()) ?> | <?php echo html($page->description()) ?>">    
    <meta name="description" content="<?php echo html($page->description()) ?>" />
<?php else: ?>
    <meta property="og:description" content="<?php echo html($site->description()) ?>">
    <meta name="description" content="<?php echo html($site->description()) ?>" />    
<?php endif ?>
	<?php echo css('assets/css/bootstrap.min.css') ?>
    <?php echo css('assets/css/personal.css') ?>
    <meta name="apple-mobile-web-app-title" content="<?php echo html($site->title()) ?>">
    <link rel="icon" href="favicon.ico" />
    <link rel="apple-touch-icon" href="<?php echo url('assets/images/apple-touch-icon.png') ?>" />
    <link rel="alternate" type="application/rss+xml" href="<?php echo url('feed') ?>" title="<?php echo html($site->title()) ?>" />
    <link type="text/plain" rel="author" href="humans.txt" />
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>