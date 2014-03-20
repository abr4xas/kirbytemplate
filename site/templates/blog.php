<?php snippet('header'); ?>
    <?php snippet('menu'); ?>
    <div class="container page">
        <div class="row">
          <div class="col-lg-6">
           <a href="<?php echo url() ?>"><h1><?php echo html($site->title()) ?></h1></a>
            <code><?php echo html($site->description()) ?></code>
          </div>       
        </div>
<div class="row">
            <div class="col-lg-8">        
        <?php if(param('category')) {   /*** article overview ***/
            $articles = $pages->find('blog')
                            ->children()
                            ->visible()
                            ->filterBy('categories', param('category'), ',')
                            ->flip()
                            ->paginate(4);
                            echo ('<div class="page-header">
                                    <h1>Category Archives: <small>'),(param('category')), ('</small></h1>
                                   </div>');                         
            } else {
            $articles = $pages->find('blog')
                            ->children()
                            ->visible()
                            ->flip()
                            ->paginate(4);
        }?>
        <?php foreach($articles as $article): ?>
        <?php if($article->template() == 'article.text'): /*** post format: TEXT ***/ ?>
                <!-- blog entry -->
                <h3><a href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a></h3>
                <p><span class="glyphicon glyphicon-time"></span> Posted on <time datetime="<?php echo $article->date('c') ?>"><?php echo $article->date('d.m.Y'); ?></time>
                <?php if ($article->categories() != ''): ?> in:
                    <?php foreach(str::split($article->categories()) as $category): ?>
                    <a href="<?php echo url('category:' . urlencode($category)) ?>"><?php echo $category; ?></a>
                    <?php endforeach ?>
                <?php endif ?></p>
                <hr>
                <?php echo markdown((excerpt($article->text(), 550))) ?>
                <a class="btn btn-primary" href="<?php echo $article->url() ?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
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
                <hr>        
        <?php elseif($article->template() == 'article.link'): /*** post format: LINK ***/ ?>
                <h3><a href="<?php echo $article->url() ?>"><?php echo html($article->linktitle()) ?></a></h3>
                <p><span class="glyphicon glyphicon-time"></span> Posted on <time datetime="<?php echo $article->date('c') ?>"><?php echo $article->date('d.m.Y'); ?></time>
                <?php if ($article->categories() != ''): ?> in
                    <?php foreach(str::split($article->categories()) as $category): ?>
                    <a href="<?php echo url('category:' . urlencode($category)) ?>"><?php echo $category; ?></a>
                    <?php endforeach ?>
                <?php endif ?></p>
                <hr>
                <?php echo kirbytext($article->text()) ?>
                <a class="btn btn-primary" href="<?php echo $article->url() ?>">Permalink <span class="glyphicon glyphicon-chevron-right"></span></a>
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
                <hr>  
        <?php elseif($article->template() == 'article.video'): /*** post format: VIDEO ***/ ?>

                <p><span class="glyphicon glyphicon-time"></span> Posted on <time datetime="<?php echo $article->date('c') ?>"><?php echo $article->date('d.m.Y'); ?></time>
                <?php if ($article->categories() != ''): ?> in
                    <?php foreach(str::split($article->categories()) as $category): ?>
                    <a href="<?php echo url('category:' . urlencode($category)) ?>"><?php echo $category; ?></a>
                    <?php endforeach ?>
                <?php endif ?></p>
                <hr>
                <div class="video">
                    <?php echo kirbytext($article->video()) ?>
                </div>
                <hr>
                <a class="btn btn-primary" href="<?php echo $article->url() ?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
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
                <hr>              
        <?php endif ?>
        <?php endforeach ?>
        <?php if($articles->pagination()->hasPages()): /*** pagination ***/ ?>
		    <ul class="pager">
                <?php if($articles->pagination()->hasPrevPage()): ?>
                <li class="previous"><a href="<?= $articles->pagination()->prevPageURL() ?>">&larr; Newer</a></li>
                <?php endif ?>  
                <?php if($articles->pagination()->hasNextPage()): ?>
                <li class="next"><a href="<?= $articles->pagination()->nextPageURL() ?>"> Older  &rarr;</a></li>
                <?php endif ?>                
            </ul>
        <?php endif ?>        
    </div>
<?php snippet('sidebar') ?>
<?php snippet('footer') ?>