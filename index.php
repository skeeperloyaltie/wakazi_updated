<?php
include("__screens/__headers/header.php")
?>


<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <!-- <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button> -->
    </div>
    <div class="carousel-inner ratio ratio-21x9">
        <div class="carousel-item active" data-bs-interval="5000">
            <video src="static/images/Universe.mp4" class="d-block h-20 w-100" autoplay muted loop></video>
            <div class="carousel-caption">
                <h1 class="heading-h1">Artisans are the Alchemists.</h1>
                <p>Artisans are the alchemists of our time, turning ordinary materials into works of wonder.</p>
                <button style="font-size: 1.2em;"><a href="#collection">Discover more</a></button>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="5000">
            <video src="static/images/Pottery.mp4" class="d-block h-20 w-100" autoplay muted loop></video>
            <div class="carousel-caption">
                <h1 class="heading-h1">The true Artisan.</h1>
                <p>The true artisan is a seeker of beauty and truth, a philosopher of the tangible.</p>
                <button style="font-size: 1.2em;"><a href="#collection">Discover more</a></button>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="5000">
            <video src="static/images/Handtools.mp4" class="d-block h-20 w-100" autoplay muted loop></video>
            <div class="carousel-caption">
                <h1 class="heading-h1">The silent Philosophers.</h1>
                <p>Artisans are the silent philosophers of society, shaping the world with their hands and minds. </p>
                <button style="font-size: 1.2em;"><a href="#collection">Discover more</a></button>
            </div>
        </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>



<!-- Collections -->
<div class="collection-container justify-content-center" id="collection">
    <h1>Shop by collections</h1>
    <hr />
    <div class="row">
        <div class="collection-col col-12 col-md mx-3">
            <h4> Jewellery</h4>
            <a href="#"><img src="static/images/jewellery.webp" alt="..." /></a>
        </div>
        <div class="collection-col col-12 col-md mx-3">
            <h4> Home and Decor</h4>
            <a href="#"><img src="static/images/decor.jpg" alt="..." /></a>
        </div>
        <div class="collection-col col-12 col-md mx-3">
            <h4> Bags and Purses</h4>
            <a href="#"><img src="static/images/bag.webp" alt="..." /></a>
        </div>
        <div class="collection-col col-12 col-md mx-3">
            <h4> Art and Collectibles</h4>
            <a href="#"><img src="static/images/art2.jpg" alt="..." /></a>
        </div>
    </div>
    <div class="row">
        <div class="collection-col col-12 col-md mx-3">
            <h4> Books, Movies and Music</h4>
            <a href="#"><img src="static/images/books.jpg" alt="..." /></a>
        </div>
        <div class="collection-col col-12 col-md mx-3">
            <h4> Electronics</h4>
            <a href="#"><img src="static/images/electronics.jpg" alt="..." /></a>
        </div>
        <div class="collection-col col-12 col-md mx-3">
            <h4> Accesories</h4>
            <a href="#"><img src="static/images/accesories.jpg" alt="..." /></a>
        </div>
        <div class="collection-col col-12 col-md mx-3">
            <h4> Craft supplies and Tools</h4>
            <a href="#"><img src="static/images/craft.jpg" alt="..." /></a>
        </div>
    </div>
</div>



<!-- Product Section -->
<section id="products" class="py-5">
    <div class="container">
        <h2 class="text-center font-alt mb-5">Featured Products</h2>
        <!-- <?php foreach ($productsByCategory as $category => $products) : ?>
            <h3><?php echo htmlspecialchars($category); ?></h3>
            <div class="row g-4">
                <?php foreach ($products as $product) : ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="card product-card">
                            <img src="<?php echo htmlspecialchars($product['image_path']); ?>" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo htmlspecialchars($product['product_name']); ?></h5>
                                <p class="card-text"><?php echo htmlspecialchars($product['description']); ?></p>
                                <a href="#" class="btn btn-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?> -->
    </div>
</section>


<!-- App features section-->
<section id="features" id="features" style="background: #e6cbee;">
    <div class="container px-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-8 order-lg-1 mb-5 mb-lg-0">
                <div class="container-fluid px-5">
                    <div class="row gx-5">
                        <div class="col-md-6 mb-5">
                            <!-- Feature item-->
                            <div class="text-center">
                                <i class="bi-phone icon-feature text-gradient d-block mb-3"></i>
                                <h3 class="font-alt">Product Sales</h3>
                                <p class="text-muted mb-0">Extremem product fucntionalities </p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-5">
                            <!-- Feature item-->
                            <div class="text-center">
                                <i class="bi-camera icon-feature text-gradient d-block mb-3"></i>
                                <h3 class="font-alt">Vendor Flexibility</h3>
                                <p class="text-muted mb-0">All vendors with flexible product Sales!</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-5 mb-md-0">
                            <!-- Feature item-->
                            <div class="text-center">
                                <i class="bi-gift icon-feature text-gradient d-block mb-3"></i>
                                <h3 class="font-alt">Free to Use</h3>
                                <p class="text-muted mb-0">Flexible system</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Feature item-->
                            <div class="text-center">
                                <i class="bi-patch-check icon-feature text-gradient d-block mb-3"></i>
                                <h3 class="font-alt">Security</h3>
                                <p class="text-muted mb-0">Secure product checkout!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 order-lg-0">
                <!-- Features section device mockup-->
                <div class="features-device-mockup">
                    <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                <stop class="gradient-start-color" offset="0%"></stop>
                                <stop class="gradient-end-color" offset="100%"></stop>
                            </linearGradient>
                        </defs>
                        <circle cx="50" cy="50" r="50"></circle>
                    </svg><svg class="shape-1 d-none d-sm-block" viewBox="0 0 240.83 240.83" xmlns="http://www.w3.org/2000/svg">
                        <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(120.42 -49.88) rotate(45)"></rect>
                        <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(-49.88 120.42) rotate(-45)"></rect>
                    </svg><svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="50" cy="50" r="50"></circle>
                    </svg>
                    <div class="device-wrapper">
                        <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                            <div class="screen bg-black">

                                <video muted="muted" autoplay="" loop="" style="max-width: 100%; height: 100%">
                                    <source src="static/images/demo-screen.mp4" type="video/mp4" />
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Quote/testimonial aside-->
<!-- <aside class="text-center bg-secondary">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-xl-8">
                    <div class="h2 fs-1 text-white mb-4">"An intuitive solution to a common problem that we all face, wrapped up in a ecommerce web system"</div>
                    <img src="{{ asset('images/tnw-logo.svg') }}" alt="..." style="height: 3rem" />
                </div>
            </div>
        </div>
    </aside> -->
<!-- Basic features section-->
<section class="bg-light">
    <div class="container px-5">
        <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
            <div class="col-12 col-lg-5">
                <h2 class="display-4 lh-1 mb-4">Enter a new age of web design</h2>
                <p class="lead fw-normal text-muted mb-5 mb-lg-0">This section is perfect for featuring some information about your application, why it was built, the problem it solves, or anything else! There's plenty of space for text here, so don't worry about writing too much.</p>
            </div>
            <div class="col-sm-8 col-md-6">
                <div class="px-5 px-sm-0"><img class="img-fluid rounded-circle" src="https://source.unsplash.com/u8Jn2rzYIps/900x900" alt="..." /></div>
            </div>
        </div>
    </div>
</section>
<!-- Call to action section-->
<!-- <section class="cta">
        <div class="cta-content">
            <div class="container px-5">
                <h2 class="text-white display-1 lh-1 mb-4">
                    Stop waiting.
                    <br />
                    Start building.
                </h2>
                <a class="btn btn-outline-light py-3 px-4 rounded-pill" href="https://startbootstrap.com/theme/new-age" target="_blank">Download for free</a>
            </div>
        </div>
    </section> -->
<!-- App badge section-->
<section class="" id="download" style="background-color:#8A3BA1">
    <div class="container px-5">
        <h2 class="text-center text-purple font-alt mb-4">Get the app now!</h2>
        <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center">
            <a class="me-lg-3 mb-4 mb-lg-0" href="#!"><img class="app-badge" src="static/images/google-play-badge.svg" alt="..." /></a>
            <a href="#!"><img class="app-badge" src="static/images/app-store-badge.svg" alt="..." /></a>
        </div>
    </div>
</section>
<section class="footer-top" id="footer-1" style="background-color: #C03FE7DF;">
    <div class="container text-center">
        <div class="row align-items-center flex-column flex-sm-row">
            <div class="col">
                <img src="static/images/x-diamond-fill.svg" />
                <h5>Great Value</h5>
                <p class="col-p">We offer competitive prices on our product range.</p>
            </div>
            <div class="col">
                <img src="static/images/credit-card-2-front-fill.svg" />
                <h5>Safe Payment</h5>
                <p class="col-p">Pay with the world’s most popular and secure payment methods.</p>
            </div>
            <div class="col">
                <img src="static/images/shield-lock-fill.svg" />
                <h5>Shop with Confidence</h5>
                <p class="col-p">Our Buyer Protection covers your purchase from click to delivery</p>
            </div>
            <div class="col">
                <img src="static/images/question-circle-fill.svg" />
                <h5>24/7 Help Center</h5>
                <p class="col-p">Round-the-clock assistance for a smooth shopping experience.</p>
            </div>
        </div>
    </div>
</section>


<!-- Footer-->
<section class="footer" style="background-color: #AA12B8; border: bottom 0;">
    <footer class="main-footer text-center ">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <h3 style="text-align: left; color: #FAFAFA;">Shopping Guide</h3>
                    <a href="__superadmin__/index.html">
                        <p style="text-align: left; color: white;">How do I pay on wakazi?</p>
                    </a>
                    <a href="__superadmin__/index.html">
                        <p style="text-align: left; color: white;">How long does my order arrive?</p>
                    </a>
                    <a href="__superadmin__/index.html">
                        <p style="text-align: left; color: white;">How to shop on wakazi?</p>
                    </a>
                    <a href="__superadmin__/index.html">
                        <p style="text-align: left; color: white;">Forgot password?</p>
                    </a>
                </div>
                <div class="col">
                    <h3 style="text-align: left; color: #F8F1F8;">Customer Help</h3>
                    <a href="__superadmin__/index.html">
                        <p style="text-align: left; color: white;">Privacy Policy</p>
                    </a>
                    <a href="__superadmin__/index.html">
                        <p style="text-align: left; color: white;">Terms and Conditions</p>
                    </a>
                    <a href="__superadmin__/index.html">
                        <p style="text-align: left; color: white;">Account Settings</p>
                    </a>
                    <a href="__superadmin__/index.html">
                        <p style="text-align: left; color: white;">Delivery and Shipping</p>
                    </a>
                    <a href="__superadmin__/index.html">
                        <p style="text-align: left; color: white;">FAQ Center</p>
                    </a>
                </div>
                <div class="col">
                    <h3 style="text-align: left; color: #FFFFFF;">Business</h3>
                    <a href="__superadmin__/index.html">
                        <p style="text-align: left; color: white;">Want to be a Seller?</p>
                    </a>
                    <a href="__superadmin__/index.html">
                        <p style="text-align: left; color: white;">Seller Center</p>
                    </a>
                    <a href="__superadmin__/index.html">
                        <p style="text-align: left; color: white;">Wakazi Shop</p>
                    </a>
                </div>
                <div class="col">
                    <h3 style="align-items: start; color: #FFFFFF;">Stay Connected</h3>
                    <a href="https://www.youtube.com/@WakaziWorks" target="blank" style="padding-right: 20px;"><img src="static/images/youtube.svg" /></i></a>
                    <a href="https://ke.linkedin.com/company/wakazi-works-platform" target="blank" style="padding-right: 20px;"><img src="static/images/linkedin.svg" /></a>
                    <a href="https://twitter.com/wakaziworks" target="blank" style="padding-right: 20px;"><img src="static/images/twitter-x.svg" /></i></a>
                    <a href="https://www.instagram.com/wakazi_works/" target="blank"><img src="static/images/instagram.svg" /></i></a>
                </div>
            </div>
        </div>
        <div class="bottom-footer" style="background-color: #831470; border: bottom 0;">
            <div>
                <div class="mb-2" style="color: white;">&copy; Wakazi Works 2024</div>
                <a href="__superadmin__/index.html">Privacy</a>
                <span class="mx-2">&middot;</span>
                <a href="__superadmin__/index.html">Terms</a>
                <span class="mx-2">&middot;</span>
                <a href="__superadmin__/index.html">FAQ</a>
            </div>
        </div>
    </footer>

</section>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>

    </html>