<?php get_header();?>

    <div class="container pt-5 pb-5">
        <h1> Latest News </h1>

        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>      

            <div class="card mb-3" id="post-<?php the_ID();?>" >
                <div class="card-body">
                    <div class="row">

                    <div class="col-md-2">
                        <?php if ( has_post_thumbnail() ) {the_post_thumbnail( 'frontpage-thumb' );}?>
                    </div>
                    
                    <div class="col-md-8">
                        <h3><?php the_title()?></h3>
                        <?php the_excerpt()?>
                    </div>
                </div>
                    <a href="<?php the_permalink()?>" class="btn btn-success">READ MORE</a>
                </div>
            </div>

        <?php endwhile; endif; ?>

    </div>

<?php get_footer();?>