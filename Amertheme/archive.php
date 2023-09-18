<?php get_header();?>
<div class="container">

    <h1><?php single_cat_title() ?></h1>
    <?php get_template_part('includes/section' , 'archive');?>



        <div id="pagination" class="row d-flex justify-content-center">

            <?php $args=array("prev_next"=> false) ?>

            <small ><?php previous_posts_link(); ?></small>

            <?php echo paginate_links($args); ?>

            <small><?php next_post_link(); ?></small>

        </div>
</div>

<?php get_footer();?>
