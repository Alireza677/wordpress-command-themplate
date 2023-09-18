<?php
/*
 Template Name: Contact Us template
 */
?>

<?php get_header('second');?>
<div class="container">
    <h1> <?php the_title(); ?> </h1>
    <div class="row">
        <div class="col-lg-8">
            <?php get_template_part('includes/section' , 'content');?>
        </div>
    </div>

    <div class="col-lg-4">
        <h4>This is sidebar</h4>
    </div>
</div>
<?php get_footer();?>

