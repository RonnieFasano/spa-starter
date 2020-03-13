
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
                            <?php wp_get_archives(); ?>
                        </ol>
                    </div>
                    <div class="py-3">
                       <h4 class="font-talic">Categories</h4> 
                       <ol class="list-unstyled mb-0">
                           <?php wp_list_categories('title_li='); ?>
                       </ol>
                    </div>
                    <div class="py-3">
                        <h4 class="font-italic">Followers</h4>
                        <i class="fab fa-facebook-square fa-2x"></i>
                        <i class="fab fa-twitter-square fa-2x"></i>
                        <i class="fab fa-instagram-square fa-2x"></i>
                        <i class="fab fa-pinterest-square fa-2x"></i>
                    </div>
