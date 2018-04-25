<?php /* Template Name: Contact */ ?>

<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Contact Us!</h1>
            <?php
                // I think this is a stupid thing to do but #YOLO
                $id = 42;
                $post = get_post($id);
                $content = apply_filters('the_content', $post->post_content);
                echo $content;
            ?>
        </div>
    </div>
</div>





<?php get_footer(); ?>
