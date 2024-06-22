<!doctype html>
<html lang="en">
<!-- head include code -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Blog Template · Bootstrap v5.0</title>
<!-- common css and all-link include here  -->
    <?php $this->load->view('common/head'); ?>
</head>

<body>
    <!-- header include -> top-bar && nav-bar  -->
    <?php $this->load->view('common/header'); ?>
    <!-- header include -> top-bar && nav-bar  -->

    <main class="container-fluid p-3">
        <div class="p-4 p-md-5 mb-4 text-white rounded bg-transparent top-header">
            <img src="<?=base_url('assets/images/banner/apple.jpg')?>" alt="">
            <!-- <div class="banner-text">
                <h1 class="display-4 fst-italic">Title of a longer featured blog post</h1>
                <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and
                    efficiently about what’s most interesting in this post’s contents.</p>
                <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
            </div> -->
        </div>




        <div class="row g-5">
            <div class="col-md-8">
                <!-- breadcrum start  -->
                <?php $this->load->view('common/brd'); ?>
                <!-- breadcrum start end -->
                <hr class="hr">
                <!-- mobile form load -->
                 <?php $this->load->view('common/ph') ?>

                <article class="blog-post pb-4 mb-4">
                    <!-- h1 section here -->
                    <section class="my-2">
                        <h1 class="blog-post-title">iPhone Repair Service in Gurgaon</h1>
                        <div class="heading_septrater"></div>

                        <p class="service_offer_para">Mobairu offers reliable iPhone repair services in Gurgaon, catering to all models, including older and newer ones. Our skilled technicians specialize in screen replacements, battery repairs, water damage restoration, and more. We use only genuine OEM parts and advanced diagnostic tools to ensure quality repairs. Whether it's a cracked screen or a malfunctioning battery, Mobairu provides efficient service with quick turnaround times. Experience hassle-free repairs with our doorstep service option across Gurgaon, ensuring convenience and customer satisfaction. Contact us today to schedule your iPhone repair or inquire about our services. 

                        </p>
                    </section>
                    <!-- h2 section  -->
                    <section class="my-2">
                        <h2 class="blog-post-title">Get Your iPhone Repaired at Your Doorstep in Gurgaon </h2>
                        <div class="heading_septrater"></div>
                        <p class="service_offer_para">Experience the ultimate convenience with Mobairu's doorstep iPhone repair service in Gurgaon. We understand the hassle of dealing with a damaged iPhone, which is why our skilled technicians come directly to you. Whether you're at home, at the office, or even at a cafe in Gurgaon, we'll bring the repair shop to your doorstep. 
                        </p>

                        <p class="service_offer_para">Our mobile repair service covers a wide range of issues, including cracked screens, battery replacements, water damage, and more. We use only genuine parts and advanced tools to ensure your iPhone is restored to its optimal condition. No need to worry about transportation or waiting in long queues at repair shops. We prioritize your convenience and provide quick, efficient repairs right where you are. </p>

                        <p class="service_offer_para">Schedule your iPhone repair with Mobairu today and experience professional service, transparent pricing, and peace of mind knowing your device is in capable hands.</p>

                    </section>
                    <!-- cost section -->
                    <section class="my-2">
                        <h2 class="blog-post-title">How Much Does iPhone Repair Cost in Gurgaon?</h2>
                        <div class="heading_septrater"></div>
                        <p class="service_offer_para">The <strong>cost of iPhone repair starts from INR with an Assured Warranty of up to 1 year</strong>. The exact cost of repair purely varies depending on the type of issues and overall extent of damage, etc. </p>
                    </section>
                    <!-- review cursole section -->
                    <section class="my-2">
                    <?php $this->load->view('common/review'); ?>

                    </section>
                    <!-- table -->
                    <section class="my-2">
                        <h2 class="blog-post-title">List of Mobairu's iPhone Repair Services in Gurgaon</h2>
                        <div class="heading_septrater"></div>
                        <p class="service_offer_para">At Mobairu, we offer comprehensive iPhone repair services in Gurgaon, ensuring your device receives expert care and attention. Whether it's a cracked screen, battery issue, water damage, or any other problem, our skilled technicians are equipped to handle it efficiently. </p>
                        



                            <table id="customers">
                                <tr>
                                    <!-- <th class="hd">S. No.</th> -->
                                    <th>Services</th>
                                    <th>Price</th>
                                </tr>
                                <tr>
                                    <!-- <td>1</td> -->
                                    <td><i class="bi bi-check-circle"></i> Macbook screen repair</td>
                                    <td>₹1999</td>
                                </tr>
                                <tr>
                                    <!-- <td>2</td> -->
                                    <td><i class="bi bi-check-circle"></i> Macbook battery repair</td>
                                    <td>₹2999</td>
                                </tr>
                            </table>
                            






                        <p class="service_offer_para">
                            Trust Mobairu for professional repairs using genuine parts and quick turnaround times. Contact us today to schedule your iPhone repair service in Gurgaon, and let us restore your device to its optimal performance.
                        </p>

                    </section>
                    <!-- Procedure -->
                    <section class="my-2">
                        <h3 class="blog-post-title">Mobairu's iPhone Repair Procedure </h3>
                        <div class="heading_septrater"></div>
                        <p class="service_offer_para">At Mobairu, we follow a meticulous iPhone repair procedure in Gurgaon to ensure your device receives the best care and attention. Our process is designed to provide efficient and effective repairs while maintaining transparency and quality. Here's how our iPhone repair procedure works: 
                            </p>

                        <ul class="survice_ul">
                            <li><strong>Diagnosis : </strong> We begin with a thorough inspection to identify the exact issue with your iPhone.  </li>

                            <li><strong>Estimation : </strong> Transparent cost estimation is provided based on the diagnosis. </li>

                            <li><strong>Repair : </strong> Skilled technicians use genuine parts to perform the necessary repairs.</li>

                            <li><strong>Testing : </strong> Rigorous testing post-repair to ensure functionality and performance.  </li>
                            
                            <li><strong>Quality Check: </strong>  Final inspection to guarantee your iPhone meets our high standards. 
                            </li>

                            <li><strong>Customer Satisfaction : </strong>  We prioritize your satisfaction with every repair. </li>

                        </ul>
                        <p class="service_offer_para">Trust Mobairu for reliable iPhone repairs in Gurgaon. Whether it's a cracked screen, battery replacement, or any other issue, our team is committed to delivering exceptional service. Contact us today to schedule your repair and experience our professional approach firsthand.</p>
                    </section>
                    <!-- why to choose -->
                    <section class="my-2">
                        <h4 class="blog-post-title">Why Choose Mobairu for Your iPhone Repair in Gurgaon:</h4>
                        <div class="heading_septrater"></div>
                        <p class="service_offer_para">Choosing Mobairu for your iPhone repair in Gurgaon means opting for convenience, quality, and expertise. We provide top-notch service to ensure your device is restored to perfect working condition. Here's why Mobairu is the best choice: </p>

                        <ul class="survice_ul">
                            <li><strong>Expert Technicians : </strong>  Our team consists of skilled professionals with extensive experience in iPhone repairs.</li>

                            <li><strong> Doorstep Service: </strong>  Enjoy the convenience of our mobile repair service, bringing the repair shop to your location. 
                            </li>

                            <li><strong> Genuine OEM Parts : </strong>  We use only high-quality, genuine OEM parts to ensure the longevity and performance of your iPhone.  </li>

                            <li><strong> Quick Turnaround: </strong> Efficient service with minimal downtime, so you get your device back swiftly. 
                            </li>

                            <li><strong> Transparent Pricing: </strong>  No hidden costs, providing clear and competitive pricing for all repairs</li>

                        </ul>
                        <p class="service_offer_para">Experience the best iPhone repair service in Gurgaon with Mobairu. Contact us today to book your repair and let our experts take care of your iPhone with precision and care. </p>
                    </section>
                    <!-- option available -->
                    <!-- <section class="my-2">
                        <h3 class="blog-post-title">Available Options for MacBook Repair in Kalkaji:</h3>
                        <div class="heading_septrater"></div>
                        <p class="service_offer_para">We understand your busy schedule and offer flexible solutions to
                            fit your needs. Choose from the following options to get your device repaired with Lappy
                            Maker: </p>

                        <ul class="survice_ul">
                            <li><strong>Free Doorstep Service : </strong> Our skilled engineers will come directly to
                                your location equipped with all the necessary tools and parts. </li>

                            <li><strong>Free Pickup and Drop Service : </strong> Save time and effort by letting us
                                collect and return your MacBook after repairs. </li>

                            <li><strong>Store Visit : </strong> Experience personalized service by visiting the nearest
                                Lappy Maker center and engaging with our experts. </li>

                        </ul>
                        <p class="service_offer_para">At Lappy Maker, we prioritize your convenience and satisfaction.
                            Whether it's doorstep service, pickup and drop, or a store visit, rest assured your MacBook
                            will receive top-notch care. Choose Lappy Maker for hassle-free MacBook repair in Kalkaji
                            today. </p>
                    </section> -->

                    
                    <section class="my-2">
                        <div class="container p-4">
                            <h3 class="mb-3">FAQ <a href="#">Dharmender</a></h3>
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item rounded-3 border-0 shadow mb-2">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button border-bottom collapsed fw-semibold Question"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                            aria-expanded="false" aria-controls="flush-collapseOne">
                                            How long does iPhone screen replacement take? 
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body Answer">
                                            <p>Screen replacements typically take about 1 Hour to 3 hours at Mobairu. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item rounded-3 border-0 shadow mb-2">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button border-bottom collapsed fw-semibold"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                            aria-expanded="false" aria-controls="flush-collapseTwo">
                                            Do you provide a warranty on repairs?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p>Yes, we offer a warranty on all our iPhone repairs for peace of mind. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item rounded-3 border-0 mb-2 shadow">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button border-bottom collapsed fw-semibold"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                                            aria-controls="flush-collapseThree">
                                            Can you fix water-damaged iPhones? 
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p>Yes, Mobairu specializes in repairing water-damaged iPhones using advanced techniques.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item rounded-3 border-0 mb-2 shadow">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button border-bottom collapsed fw-semibold"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour"
                                            aria-expanded="false" aria-controls="flush-collapsefour">
                                            What models of iPhones do you repair? 
                                        </button>
                                    </h2>
                                    <div id="flush-collapsefour" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p>We repair all iPhone models, including the latest ones like iPhone 13, 12, and earlier models.  </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item rounded-3 border-0 mb-2 shadow">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button border-bottom collapsed fw-semibold"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefive"
                                            aria-expanded="false" aria-controls="flush-collapsefive">
                                            How can I schedule an iPhone repair service?
                                        </button>
                                    </h2>
                                    <div id="flush-collapsefive" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p>You can schedule a repair service by contacting us by phone or using our website's booking form. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </article>



            </div>

            <div class="col-md-4">
                <!-- this is for common form on everypage  -->
                <?php $this->load->view('common/form'); ?>
            </div>
        </div>

    </main>


    <!-- common  footer add  -->
    <?php $this->load->view('common/footer'); ?>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
    const multipleItemCarousel = document.querySelector("#testimonialCarousel");

    if (window.matchMedia("(min-width:576px)").matches) {
        const carousel = new bootstrap.Carousel(multipleItemCarousel, {
            interval: false // Disable Bootstrap's built-in interval
        });

        var carouselWidth = $(".carousel-inner")[0].scrollWidth;
        var cardWidth = $(".carousel-item").width();
        var scrollPosition = 0;
        var autoSlideInterval = 3000; // 3 seconds

        function nextSlide() {
            if (scrollPosition < carouselWidth - cardWidth * 3) {
                scrollPosition += cardWidth;
                $(".carousel-inner").animate({
                    scrollLeft: scrollPosition
                }, 800);
            } else {
                scrollPosition = 0;
                $(".carousel-inner").animate({
                    scrollLeft: scrollPosition
                }, 800);
            }
        }

        // Handle next slide button click
        $(".carousel-control-next").on("click", function() {
            nextSlide();
        });

        // Handle previous slide button click
        $(".carousel-control-prev").on("click", function() {
            if (scrollPosition > 0) {
                scrollPosition -= cardWidth;
                $(".carousel-inner").animate({
                    scrollLeft: scrollPosition
                }, 800);
            }
        });

        // Auto slide functionality
        setInterval(function() {
            nextSlide();
        }, autoSlideInterval);

    } else {
        // For smaller screens, add Bootstrap class for sliding automatically
        $(multipleItemCarousel).addClass("slide");
    }
    </script>
</body>

</html>