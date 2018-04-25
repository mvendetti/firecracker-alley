<?php /* Template Name: Stands */ ?>

<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1>Stands</h1>
            <?php $catquery = new WP_Query( 'cat=6' ); ?>
            <div class="row">
                <?php while($catquery->have_posts()) : $catquery->the_post(); ?>

                        <div class="col-md-3">
                            <div class="card">
                                <a href="<?php the_permalink(); ?>" class="card-img-top" alt="Card image">
                                    <?php
                                        if ( has_post_thumbnail() ) {
                                            the_post_thumbnail( array(157,157) );
                                        } else {
                                            'null';
                                        }
                                    ?>
                                </a>

                                <div class="card-body">
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
        <div class="col-md-4">
            <!-- sidebar crap or a map or something -->
        </div>
    </div>
</div>





<?php get_footer(); ?>
