<?php
/*
*The template for displaying the footer
*/
?>

<footer class="container-fluid py-5">
        <div class="row">
            <div class="col-sm-4">
               <h5>Stay Connected:</h5> 
               <form>
                   <div class="form-row form-group">
                    <div class="col-md-8">
                        <input type="email" class="form-control" placeholder="Email address">
                    </div>
                    <div class="col-md-4">
                       <button type="submit" class="btn btn-primary">
                            Sign up
                        <i class="fas fa-angle-double-right"></i>
                       </button> 
                    </div>
                   </div>
               </form>
               <!--social media icons-->
               <i class="fab fa-facebook-square fa-2x"></i>
               <i class="fab fa-twitter-square fa-2x"></i>
               <i class="fab fa-instagram-square fa-2x"></i>
               <i class="fab fa-pinterest-square fa-2x"></i>

            </div>
            <div class="col-sm-4">
                <h5>Out setting:</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis minus fugiat maxime error 
                    officia asperiores quas rem est dolore reprehenderit explicabo aperiam, molestias cum aliquam odio 
                    reiciendis obcaecati architecto impedit!</p>
            </div>
            <div class="col-sm-4">
                <h5>Navigation</h5>
                <ul class="list-group">
                    <li class="list-group-item"> <a href="blog.html">Blog</a></li>
                    <li class="list-group-item"> <a href="contact.html">Contact Us</a></li>
                    <li class="list-group-item"> <a href="">Privacy Policy</a></li>

                </ul>
            </div>
        </div>

    </footer>
    <?php wp_footer(); ?>
</body>
</html>