<?php snippet('header'); ?>

    <?php snippet('menu'); ?>
    <div class="container page">
      <div class="page-header" id="banner">
        <div class="row">
          <div class="col-lg-6">
           <a href="<?php echo url() ?>"><h1><?php echo html($site->title()) ?></h1></a>
            <p class="lead"><code><?php echo html($site->description()) ?></code></p>
          </div>
        </div>
      </div>
<div class="row">
        <div class="col-lg-8">
 <!-- blog entry -->
                <h1><?php echo html($page->title()) ?></h1>
                <p> <span class="glyphicon glyphicon-time"></span> Posted on <time datetime="<?php echo $page->date('c') ?>"><?php echo $page->date('d.m.Y'); ?></time>
                <?php if ($page->categories() != ''): ?> in:
                    <?php foreach(str::split($page->categories()) as $category): ?>
                    <a href="<?php echo url('category:' . urlencode($category)) ?>"><?php echo $category; ?></a>
                    <?php endforeach ?>
                <?php endif ?></p>
                <hr>
                <?php echo kirbytext(utf8_decode($page->text())) ?> 
				<br>
				<p>Me compras un caf&eacute;?</p>
	            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
	                <input type="hidden" name="cmd" value="_s-xclick">
	                <input type="hidden" name="hosted_button_id" value="RKG8G3ABP4XSW">
	                <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
	                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
	            </form>	
            <br>
            <a class="btn btn-primary" type="button" href="<?php echo url() ?>"> Back</a>
            <a class="btn btn-info" type="button" target="_blank" href="https://twitter.com/intent/tweet?source=webclient&text=<?php echo rawurlencode($page->title()); ?>%20<?php echo rawurlencode ($page->url()); ?>%20<?php echo ('via @abr4xas')?>" target="blank" title="Tweet this"><i class="fa fa-twitter"></i> Tweet this</a>
            <hr>
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- bloio -->
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-7127443823639155"
             data-ad-slot="9038513565"
             data-ad-format="auto"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>            
            </div>

<?php snippet('sidebar') ?>
<?php snippet('footer') ?>