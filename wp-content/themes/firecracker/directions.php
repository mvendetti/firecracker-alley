<?php /* Template Name: Directions */ ?>

<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Directions</h1>
            <?php
                // I think this is a stupid thing to do but #YOLO
                $id = 51;
                $post = get_post($id);
                $content = apply_filters('the_content', $post->post_content);
                echo $content;
            ?>
        </div>
    </div>
</div>





<?php get_footer(); ?>
