<?php
  drupal_add_js('jQuery(document).ready(function($) {$(\'iframe\').wrap(\'<div class="video-wrapper"></div>\'); });', 'inline');
  drupal_add_js(drupal_get_path('theme', 'ncsulib_foundation').'/scripts/vendor/jquery.scrolldepth.min.js');
  drupal_add_js(drupal_get_path('theme', 'ncsulib_foundation').'/scripts/library-stories.js');
  hide($content['four_liner']);
  hide($content['field_featured_image']);
  hide($content['field_featured_image_landscape']);
  hide($content['field_assessments']);
  hide($content['field_flickr_set']);
  hide($content['field_problem_statement']);
?>
<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?> itemscope itemtype="http://schema.org/NewsArticle">

    <div class="story" itemprop="mainEntityOfPage" itemType="https://schema.org/WebPage" itemid="https://google.com/article">

      <div class="intro">
        <div class="story-title">
          <?php if ($title): ?>
          <?php print render($title_prefix); ?>
          <p><a href="/stories"><i class="fa fa-arrow-left"></i> Back to Library Stories</a></p>
          <h1 id="page-title" class="title" itemprop="headline" content="<?= $title; ?>"><?= $title; ?></h1>
          <div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
            <div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
              <meta itemprop="url" content="http://webdev.lib.ncsu.edu/sites/all/themes/ncsulib_foundation/images/ncsu-library-logo-white.png">
              <meta itemprop="width" content="600">
              <meta itemprop="height" content="60">
            </div>
            <meta itemprop="name" content="North Carolina State University Library">
          </div>


          <div class="right">
                <a id="fb-share-button" data-url="<?= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ?>" href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                <a id="tw-share-button" data-url="<?= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ?>" href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
          </div>
            <?php print render($title_suffix); ?>
          <?php endif; ?>

          <?php print render($title_prefix); ?>
          <?php if (!$page): ?>
            <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
          <?php endif; ?>
          <?php print render($title_suffix); ?>

        </div>
        <?php
          $photo_url = $content['field_featured_image_landscape']['#object']->field_featured_image_landscape['und'][0]['filename'];
          $alt = $content['field_featured_image_landscape']['#object']->field_featured_image_landscape['und'][0]['alt'];
          $title = $content['field_featured_image_landscape']['#object']->field_featured_image_landscape['und'][0]['title'];
        ?>

        <div id="featured-image">
          <img itemprop="image" src="/sites/default/files/<?= $photo_url; ?>" width="100%" alt="<?= $alt; ?>" rel="image_src">
          <?php if($title){ echo '<small>'.$title.'</small>';} ?>
        </div>
        <?php print render($content['field_teaser']); ?>
        <span itemprop="description" content="<?= strip_tags(render($content['field_teaser'])) ?>"></span>

      </div>

      <div class="story-body">

          <div class="story-statement">
            <?php print render($content['field_body']); ?>
            <p class="date-posted" itemprop="datePublished" content="<?= date('F j, Y', $created) ?>">Written on <?php print date('F j, Y', $created); ?></p>
            <span itemprop="dateModified" content="<?= date('F j, Y', $created) ?>"></span>
          </div>
          <aside class="story-statement-aside sidebar">
            <?php print render($content['field_story_lead']); ?>
            <?php print render($content['field_staff']); ?>
            <?php print render($content); ?>
            <?php
              // Printing the contents of a block to a page template
              // See https://www.drupal.org/node/26502
              $block = module_invoke('views', 'block_view', 'capture_and_promote-block_4');
              print '<h3>' . $block['subject'] . '</h3>';
              print render($block['content']);
            ?>
            <p class="subscribe"><i class="fa fa-rss-square"></i> <a href="/stories.rss">Subscribe to NCSU Library Stories</a><p>

          </aside>
        </div>

      </div>

    </div>

</article>