<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
    <?php the_date()?>
    <?php the_content();?>
    <hr>
    <?php
        $fname=get_the_author_meta('first_name');
        $lname=get_the_author_meta('last_name');
        echo 'نویسنده :' .$fname.' ' .$lname;
        the_tags();
        echo '</br> دسته ها';
        the_category(',');
        echo '</br> ';


        ?>
<hr>
    <div class="comment-set">
        <?php comments_template();?>
    </div>

<?php  endwhile;endif; ?>