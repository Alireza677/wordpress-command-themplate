<?php get_header();?>
<div class="container">
    <div class="row ltr-pages">
        <div class="col-lg-4">
            <?php  if(is_active_sidebar('blog-sidebar')) :
                dynamic_sidebar('blog-sidebar');
                endif;
                ?>

        </div>
        <div class="col-lg-8">
            <?php  if (has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title() ?> " class="img-fluid img-thumbnail">
            <?php endif;?>

            <h1> <?php the_title()?> </h1>

            <?php get_template_part('includes/section' , 'blogcontent');?>
        </div>




    </div>






</div>

<?php get_footer();?>
