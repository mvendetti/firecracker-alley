<?php /* Template Name: Stands */ ?>

<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Stands</h1>
            <?php $catquery = new WP_Query( array( 'category_name' => 'stand', 'posts_per_page'=>-1 ) ); ?>
            <div class="row">
                <?php while($catquery->have_posts()) : $catquery->the_post(); ?>

                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="card">
                                <a href="<?php the_permalink(); ?>">
                                    <img class="card-img-top img-fluid" alt="Stand image" src="<?php
                                        if ( has_post_thumbnail() ) {
                                            the_post_thumbnail_url('medium');
                                        } else {
                                            echo '/wp-content/themes/firecracker/library/images/default.jpg';
                                        }?>">

                                </a>

                                <div class="card-body">
                                    <small>
                                        <?php echo get_the_title(); ?>
                                    </small>
                                    <h5 class="card-title">
                                        <a href="<?php the_permalink(); ?>" rel="bookmark">
                                            Stand # <?php echo get_field( "stand_number", $catquery->ID ); ?>
                                        </a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
        </div>
    </div>
</div>





<?php get_footer(); ?>
