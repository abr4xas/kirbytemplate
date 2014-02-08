<?php
    $search = new search(array(
    'searchfield' => 'q',
    'mode' => 'and',
    'ignore' => array('error', 'docs', 'blog', 'feed', 'search'),
    'paginate' => 10

    ));

    $results = $search->results();

    if($results) $results->paginate(10);
?>
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

    <?php if($results): ?>
    <h1><?php echo $results->pagination->countItems() ?>
        <?php if($results->pagination->countItems()=='1'): ?> result
        <?php else: ?> results
        <?php endif ?> for <mark><?php echo $search->query(); ?></mark></h1>
    <?php endif ?>

        <?php if($results): ?>

        <?php foreach($results as $result): ?>

        <?php if($result->template() == 'article.text'): /*** post format: TEXT ***/ ?>

                <h1><a href="<?php echo $result->url() ?>"><?php echo html($result->title()) ?></a></h1>
                <p><span class="glyphicon glyphicon-time"></span> Posted on <time datetime="<?php echo $result->date('c') ?>"><?php echo $result->date('d.m.Y'); ?></time>
                <?php if ($result->categories() != ''): ?> in:
                    <?php foreach(str::split($result->categories()) as $category): ?>
                    <a href="<?php echo url('category:' . urlencode($category)) ?>"><?php echo $category; ?></a>
                    <?php endforeach ?>
                <?php endif ?></p>
                                <hr>
            <p><?php echo markdown(utf8_decode((excerpt($result->text(), 400)))) ?></p>

            <a class="btn btn-primary" href="<?php echo $result->url() ?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>


        <?php elseif($result->template() == 'article.link'): /*** post format: LINK ***/ ?>

                <h1><a href="<?php echo $result->customlink() ?>"><?php echo html($result->linktitle()) ?></a></h1>
                <p><span class="glyphicon glyphicon-time"></span> Posted on <time datetime="<?php echo $result->date('c') ?>"><?php echo $result->date('d.m.Y'); ?></time>
                <?php if ($result->categories() != ''): ?> in:
                    <?php foreach(str::split($result->categories()) as $category): ?>
                    <a href="<?php echo url('category:' . urlencode($category)) ?>"><?php echo $category; ?></a>
                    <?php endforeach ?>
                <?php endif ?></p>
            <hr>
            <?php echo kirbytext($result->text()) ?>
            <a class="btn btn-primary" href="<?php echo $result->url() ?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

        <?php elseif($result->template() == 'article.video'): /*** post format: VIDEO ***/ ?>
                <h1><a href="<?php echo $result->url() ?>"><?php echo kirbytext($result->title()) ?></a></h1>
                <p><span class="glyphicon glyphicon-time"></span> Posted on <time datetime="<?php echo $result->date('c') ?>"><?php echo $result->date('d.m.Y'); ?></time>
                <?php if ($result->categories() != ''): ?> in:
                    <?php foreach(str::split($result->categories()) as $category): ?>
                    <a href="<?php echo url('category:' . urlencode($category)) ?>"><?php echo $category; ?></a>
                    <?php endforeach ?>
                <?php endif ?></p>

            <?php echo kirbytext($result->video()) ?>
            <?php echo kirbytext($result->text()) ?>
            <a class="btn btn-primary" href="<?php echo $result->url() ?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>


        <?php elseif($result->template() == 'page'): /*** pages ***/ ?>

            <h1><a href="<?php echo $result->url() ?>"><?php echo html($result->title()) ?></a></h1>
            <p><?php echo markdown(utf8_decode((excerpt($result->text(), 400)))) ?></p>

        <?php endif ?>

        <?php endforeach ?>


        <?php if($results->pagination()->hasPages()): /*** pagination ***/ ?>
            <ul class="pager">
                <?php if($results->pagination()->hasPrevPage()): ?>
                <a class="prev" href="<?= $articles->pagination()->prevPageURL() ?>">&lsaquo;&lsaquo; newer posts</a></li>
                <?php endif ?>  
                <?php if($articles->pagination()->hasNextPage()): ?>
                <a class="next" href="<?= $articles->pagination()->nextPageURL() ?>">older posts &rsaquo;&rsaquo;</a></li>
                <?php endif ?>                
            </ul>

        <?php endif ?>

        <?php else: ?>
        <h1>Sorry... No Results.</h1>
        <?php endif ?>
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