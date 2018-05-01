<?php /* Template Name: Stands */ ?>

<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Stands</h1>
            <?php
                $args = array(
                    'category_name' => 'stand',
                    'meta_key' => 'stand_number',
                    'meta_type' => 'NUMERIC',
                    'orderby' => 'stand_number',
                    'order' => 'ASC',
                    'posts_per_page' => -1
                );
                $stand_query = new WP_Query( $args );
            ?>

            <!-- Putting a pin in this for (maybe) later as it's taking me way too long to figure out -->

            <!--
            <form class="form-inline form-site">
                <div class="form-group">
                    <input id="all" name="radio" class="form-control" type="radio" value="all" checked />
                    <label for="all">All Stands</label>

                    <input id="onsite" name="radio" class="form-control" type="radio" value="onsite" />
                    <label for="onsite">Onsite</label>

                    <input id="offsite" name="radio" class="form-control" type="radio" value="offsite" />
                    <label for="offsite">Offsite</label>
                </div>
            </form>
            -->

            <div class="row">

                <?php while( $stand_query->have_posts() ) : $stand_query->the_post(); ?>

                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="card">
                                <a href="<?php the_permalink(); ?>">
                                    <img
                                        class="card-img-top img-fluid"
                                        src="<?php
                                                if ( has_post_thumbnail() ) {
                                                    the_post_thumbnail_url('medium');
                                                } else {
                                                    echo '/wp-content/themes/firecracker/library/images/default.jpg';
                                                }
                                            ?>"
                                        alt="Stand image"
                                    > <!-- end img element -->
                                </a>

                                <div class="card-body">
                                    <small>
                                        <?php echo get_the_title(); ?>
                                    </small>
                                    <h5 class="card-title">
                                        <a href="<?php the_permalink(); ?>" rel="bookmark">
                                            Stand # <?php echo get_field( 'stand_number', $stand_query->ID ); ?>
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
