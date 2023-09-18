<?php get_header();?>
<div class="container">
    <div class="row ltr-pages">

        <div class="col-lg-4">
           <?php get_template_part('sidebar' , 'page') ?>
        </div>
        <div class="col-lg-8">
            <h1> <?php the_title()?> </h1>

            <?php get_template_part('includes/section' , 'content');?>
        </div>

    </div>





</div>

<?php get_footer();?>
