<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>

    <div class="story">

      <div class="intro">

        <div class="story-title">
          <?php if ($title): ?>
          <?php print render($title_prefix); ?>
          <h1 id="page-title" class="title"><?php print $title; ?></h1>
            <?php print render($title_suffix); ?>
          <?php endif; ?>

          <?php print render($title_prefix); ?>
          <?php if (!$page): ?>
            <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
          <?php endif; ?>
          <?php print render($title_suffix); ?>
          <a href="/stories">&crarr; Back to Library Stories</a>
        </div>
        <?php print render($content['field_teaser']); ?>
        <?php print render($content['field_featured_image']); ?>

      </div>

      <div class="story-body">

          <div class="story-statement">
            <?php print $user_picture;?>
            <?php print render($content['field_problem_statement']); ?>
            <?php print render($content['body']); ?>
            <?php print render($content['field_assessments']); ?>
            <?php print render($content['field_flickr_set']); ?>
            <p class="date-posted">Written on <?php print date('F j, Y', $created); ?></p>
          </div>
          <aside class="story-statement-aside">
            <h2>About the Author</h2>

            <?php print $name; ?>
            <?php print render($content['field_staff']); ?>
            <?php print render($content); ?>

          </aside>
        </div>

      </div>

    </div>

</article>