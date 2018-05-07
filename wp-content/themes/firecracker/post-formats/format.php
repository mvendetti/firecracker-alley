
              <?php
                /*
                 * This is the default post format.
                 *
                 * So basically this is a regular post. if you don't want to use post formats,
                 * you can just copy ths stuff in here and replace the post format thing in
                 * single.php.
                 *
                 * The other formats are SUPER basic so you can style them as you like.
                 *
                 * Again, If you want to remove post formats, just delete the post-formats
                 * folder and replace the function below with the contents of the "format.php" file.
                */
              ?>

              <article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">

                <header class="article-header entry-header">

                  <h1 class="entry-title single-title" itemprop="headline" rel="bookmark"><?php the_title(); ?></h1>

                  <p class="byline entry-meta vcard">

                    <?php
                        $uriSegments = explode( '/', parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH ) );
                        $segment_1 = $uriSegments[1];
                        $link = get_field( 'link' );
                        $address = get_field( 'stand_address' );

                        if ( $segment_1 === 'news' ) {
                            printf( __( 'Posted', 'bonestheme' ).' %1$s %2$s',
                               /* the time the post was published */
                               '<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
                               /* empty argument for now because I suck at PHP */
                               ''
                           );
                       }

                       if ( $segment_1 === 'stand' ) {
                           printf( __( '<span class="stand-number">Stand #', 'bonestheme' ).' %1$s %2$s',
                                get_field( 'stand_number' ) . '</span>' . ' – ' . '<span class="stand-location">' . get_field( 'stand_location' ) . '<span>', ''
                           );
                       }
                    ?>

                  </p>

                </header> <?php // end article header ?>

                <section class="entry-content cf" itemprop="articleBody">
                  <?php
                    // the content (pretty self explanatory huh)
                    the_content();

                    wp_link_pages( array(
                      'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
                      'after'       => '</div>',
                      'link_before' => '<span>',
                      'link_after'  => '</span>',
                    ) );

                    if ( $link && $segment_1 === 'stand' ) {
                        echo '<strong>Our website:</strong> <a target="_blank" href="' . $link . '">' . $link . '</a>' . '<br /><br />';
                    }

                    if ( $address ) {
                        echo "<h2>Directions</h2>

                            <iframe
                                 width='100%'
                                 height='300'
                                 frameborder='0' style='border: 0;'
                                 src='https://www.google.com/maps/embed/v1/place?key=AIzaSyBsufXa9CyTo4dXAaimIQXoPsRRFoTWrLQ
                                 &q=$address' allowfullscreen>
                             </iframe>";
                    }
                  ?>

                </section> <?php // end article section ?>

                <?php //comments_template(); ?>

              </article> <?php // end article ?>
