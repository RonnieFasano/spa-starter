<?php
/*
* The main template file
*/
?>
<?php get_header() ?>

    <div class="container-fluid text-center py-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h3>Welcome to Tranquil Spa</h3>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/divider-purple.png" alt="divider" class="w-25">
            </div>
        </div>

        <div class="row mt-4 d-flex justify-content-around">
            <div class="col-sm-3">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/makeup.jpg" alt="makeup image" class="card-img-top rounded-circle">
                <div class="card-body">
                    <p>Hair &amp; make up</p>
                </div>
            </div>
            <div class="col-sm-3">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/candles.jpg" alt="candles image" class="card-img-top rounded-circle">
                <div class="card-body">
                    <p>Spa Facilities</p>
                </div>
            </div>
            <div class="col-sm-3">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/retreat.jpg" alt="retreat image" class="card-img-top rounded-circle">
                <div class="card-body">
                    <p>Take a tour</p>
                </div>
            </div>
        </div>
    </div>

<!--LATEST OFFERS-->
    <div class="container-fluid text-center bg-dark py-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h3 class="text-light">Latest Spa Offers</h3>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/divider-silver.png" alt="divider" class="pb-4 w-25">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
              <div class="card">
                 <h4 class="card-header py-5">
                     Family Swim Package<span class="font-weight-bold price">$60</span>
                 </h4>
                 <div class="card-body">
                     <blockquote class="blockquote mb-0">
                        <p>Our most popular swim package, great values for families or groups up to 12 people </p> 
                     </blockquote>
                 </div>
                 <ul class="list-group">
                     <li class="list-group-item font-italic">Up to 12 people</li>
                     <li class="list-group-item font-italic">Private sessions</li>
                     <li class="list-group-item font-italic">Swim lessons also available</li>
                 </ul>
              </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                   <h4 class="card-header py-5">
                       For the bride<span class="font-weight-bold price">$40</span>
                   </h4>
                   <div class="card-body">
                       <blockquote class="blockquote mb-0">
                          <p>Our wedding packages are perfect for your big day. We can cater for groups large or small </p> 
                       </blockquote>
                   </div>
                   <ul class="list-group">
                       <li class="list-group-item font-italic">Hair &amp; make up</li>
                       <li class="list-group-item font-italic">Groups of any size</li>
                       <li class="list-group-item font-italic">Champagne &amp; cocktails available</li>
                   </ul>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="card">
                   <h4 class="card-header py-5">
                       Weekend pass<span class="font-weight-bold price">$60</span>
                   </h4>
                   <div class="card-body">
                       <blockquote class="blockquote mb-0">
                          <p>Take full advantage of all the facilities we have to offer with our unlimited weekend pass </p> 
                       </blockquote>
                   </div>
                   <ul class="list-group">
                       <li class="list-group-item font-italic">Pool &amp: sauna</li>
                       <li class="list-group-item font-italic">Full use of our gym</li>
                       <li class="list-group-item font-italic">Includes 2 treatments per person</li>
                   </ul>
                </div>
              </div>
        </div>  <!--closing row-->
    </div>  <!--closing container-->

    <!--ABOUT US-->
    <div class="container-fluid py-5 text-center bg-light">
        <div class="row">
            <div class="col-sm-6 offset-sm-3">
                <h3>About Us</h3>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/divider-purple.png" alt="divider" class="w-25">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <p class="text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque ipsam deserunt, eum magni provident sequi error quibusdam explicabo eos ex adipisci vero incidunt quia nemo sed aliquid laborum. Veniam, commodi!
                Dolorum commodi officiis recusandae autem ipsa animi maiores adipisci nihil quam nostrum minus impedit nobis eligendi reprehenderit voluptatem, et omnis neque ab alias. Tempore fugit eligendi dicta quia necessitatibus laudantium!
                Iste ab velit maiores et quasi ut fugiat quam perferendis cumque! Nulla explicabo ipsam voluptatum labore reiciendis, et facilis enim tempore non pariatur delectus voluptate facere unde doloremque reprehenderit ipsa.
                Commodi ratione ullam accusamus. Tempora harum iste quo! Inventore, debitis odit animi tempore veritatis voluptate quo quia itaque laboriosam eum! Earum natus tenetur ex nulla quisquam cupiditate, ullam animi quaerat!
                Corrupti neque impedit cum inventore nisi vero voluptatum rerum vel, magnam non officiis maxime, quidem similique. Unde aliquam nihil nisi blanditiis ipsum. Earum autem officia vel voluptas corporis placeat id.</p>
            </div>
        </div>
    </div>
<!--PRICE LIST-->
    <div class="container-fluid py-5 bg-dark">
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center">
                <h3 class="text-light">Pricing List</h3>
                <img src="images/divider-silver.png" alt="divider" class="pb-4 w-25">
            </div>
        </div>
        <div class="row my-4">
            <div class="col-sm-8">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/massage.jpg" alt="massage pic">
            </div>
            <div class="col-sm-4">
                <h4 class="title text-center">Massages</h4>
                <ul class="list-group list-group-flush text-light">
                    <li class="list-group-item">Massage 1 <em>-$10</em></li>
                    <li class="list-group-item">Massage 2 <em>-$10</em></li>
                    <li class="list-group-item">Massage 3 <em>-$10</em></li>
                    <li class="list-group-item">Massage 4 <em>-$10</em></li>
                    <li class="list-group-item">Massage 5 <em>-$10</em></li>
                </ul>
            </div>       
        </div>
        <div class="row my-4">
            <div class="col-sm-4">
                <h4 class="title text-center">Facials</h4>
                <ul class="list-group list-group-flush text-light">
                    <li class="list-group-item">Facials 1 <em>-$10</em></li>
                    <li class="list-group-item">Facials 2 <em>-$10</em></li>
                    <li class="list-group-item">Facials 3 <em>-$10</em></li>
                    <li class="list-group-item">Facials 4 <em>-$10</em></li>
                    <li class="list-group-item">Facials 5 <em>-$10</em></li>
                </ul>
            </div> 
            <div class="col-sm-8">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/facial.jpg" alt="massage pic">
            </div> 
        </div>
        <div class="row my-4">
            <div class="col-sm-8">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/cosmetics.jpg" alt="massage pic">
            </div>
            <div class="col-sm-4">
                <h4 class="title text-center">Hair &amp; make-up</h4>
                <ul class="list-group list-group-flush text-light">
                    <li class="list-group-item">Hair style 1 <em>-$10</em></li>
                    <li class="list-group-item">Hair style 2 <em>-$10</em></li>
                    <li class="list-group-item">Hair style 3 <em>-$10</em></li>
                    <li class="list-group-item">Hair style 4 <em>-$10</em></li>
                    <li class="list-group-item">Hair style 5 <em>-$10</em></li>
                </ul>
            </div>       
        </div>
    </div>  <!--container-->

    <!--FOOTER SECTION-->
    <?php get_footer() ?>