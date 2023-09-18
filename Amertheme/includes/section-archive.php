<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
<div id="archive-section" class="card mb-3" >
    <div class="card-body d-flex flex-grow-0 align-items-center justify-content-center">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <img src="<?php the_post_thumbnail_url('blog-small'); ?>" alt="<?php The_title() ?>" class="img-fluid">
            </div>
            <div class="col-lg-8">
            <div> <h3><?php the_title() ?></h3></div>
            <div><?php the_excerpt()?></div>
            <div><a href="<?php the_permalink(); ?>" class="btn btn-success"> ادامه مطلب </a></div>
            </div>
        </div>




    </div>
</div>




<?php  endwhile;endif; ?>