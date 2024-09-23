<a href="<?php the_permalink()?>" class="card-notice">
    <figure><?= get_the_post_thumbnail(get_the_ID());?></figure>
    <p class="date"><?= get_the_date('d/m/Y'); ?></p>
    <h3 class="subtitle"><?php the_title()?></h3>
</a>