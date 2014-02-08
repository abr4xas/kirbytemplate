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
                <hr>

<div class="alert alert-danger">

    <h2>Oh snap!</h2>
    <h3><?php echo kirbytext($page->text()) ?> <a class="alert-link" href="<?php echo url() ?>">Go to index</a>.</h3>
</div>

                <br>
                <p>Me compras un caf&eacute;?</p>
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="RKG8G3ABP4XSW">
                    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </form> 
            <br>
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

