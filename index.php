<?php
/*
* The main template file
*/
?>
<?php get_header() ?>

<main class="container-fluid py-5">
        <div class="row">
            <div class="col-sm-8">

            <?php if(have_posts()) :  while(have_posts()) : the_post(); ?>
                <div>
                  <a href="<?php the_permalink(); ?>">
                    <h2><?php the_title(); ?></h2>
                 </a>
                    <p><?php echo get_the_date('F j, Y'); ?>  by <a href=""><?php the_author(); ?></a></p>
                    <div class="pb-2">
                        <i class="fas fa-tags"></i>
                        <p class="d-inline"><?php the_tags('Tagged: ', ' ~ ') ?></p>
                    </div>
                    <p>  <?php the_excerpt() ?></p>
                    <div class="mb-3">
                        <a href="<?php the_permalink(); ?>">
                            <?php _e('Read more...') ?>
                        </a>
                    </div>
                </div>
                <?php endwhile; else : ?>

            <aside class="col-sm-4">
                <div class="py-3">
                    <h4 class="font-italic">About</h4>
                    <p class="mb-0">Welcome to the official Tranquil Spa blog.
                         Here you will find all the latest news and what's going on here at the spa.
                        <hr>
                    </p>
                    </div>
                    <div class="py-3">
                        <h4 class="font-italic">Archives</h4>
                        <ol class="list-unstyled mb-0">
                            <li><a href="">March 2020</a></li>
                            <li><a href="">Febuary 2020</a></li>
                            <li><a href="">January 2020</a></li>
                        </ol>
                    </div>
                    <div class="py-3">
                       <h4 class="font-talic">Categories</h4> 
                       <ol class="list-unstyled mb-0">
                            <li><a href="">News</a></li>
                            <li><a href="">Offers</a></li>
                       </ol>
                    </div>
                    <div class="py-3">
                        <h4 class="font-italic">Followers</h4>
                        <i class="fab fa-facebook-square fa-2x"></i>
                        <i class="fab fa-twitter-square fa-2x"></i>
                        <i class="fab fa-instagram-square fa-2x"></i>
                        <i class="fab fa-pinterest-square fa-2x"></i>
                    </div>
                </aside>
        </div><!--/row-->
    </main>


    

 
    <p><?php _e('Sorry, no posts matched your criteria'); ?></p>
    <?php 
endif;
?>


     <nav>
          <ul class="nav">
              <li><?php next_posts_link(); ?></li> &nbsp;
               <li><?php previous_posts_link(); ?></li>
          </ul>
      </nav>
          </div>

    <!--FOOTER SECTION-->
    <?php get_footer() ?>