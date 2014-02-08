<?php
/* 
Menu Snippet for the Baseblog Kirby Theme
******************************************/
?>
<div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="<?php echo url() ?>" class="navbar-brand">abr4xas.org</a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav navbar-right">
		  <?php foreach($pages->visible() AS $p): ?>
              <li><a<?php echo ($p->isOpen()) ? ' class="active"' : '' ?> href="<?php echo $p->url() ?>"><?php echo html($p->title()) ?></a></li>
		  <?php endforeach ?>
          </ul>

        </div>
      </div>
    </div>


