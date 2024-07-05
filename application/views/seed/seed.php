<!doctype html>
<html lang="en">
<!-- head include code -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>iPhone Repair Service </title>
<!-- common css and all-link include here  -->
    <?php $this->load->view('common/head'); ?>
    <style>
        .form_heading{
            text-align:center;
        }
    </style>
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




        <div class="row g-5 cont-div">
            <div class="col-md-12">
                <!-- breadcrum start  -->
                <!-- breadcrum start  -->
                <?php $this->load->view('common/brd'); ?>
                <!-- breadcrum start end -->
                <!-- breadcrum start end -->
                <hr class="hr">
                
                <article class="blog-post pb-4 mb-4">
                    <!-- h1 section here -->
                    <section class="my-2">
                        <h1 class="blog-post-title">iPhone Repair Service:</h1>
                        <div class="heading_septrater"></div>

                        <p class="service_offer_para">Mobairu is your ultimate destination for all your iPhone Repair needs. Our expert technicians are equipped to handle a wide range of issues. No matter what issues your device may be having, just bring it to us or call our technician at your doorstep, we will get fixed in no time. Our commitment to excellence means you can have peace of mind knowing that your device is in good hands.  
                        </p>
                        <p class="service_offer_para">At Mobairu, we use only the OEM or quality parts to ensure your iPhone functions like new. Whether it's a minor fix or a major repair, you can trust Mobairu to restore your device promptly and efficiently. Trust Mobairu for reliable, affordable, and efficient iPhone repairs that you can count on. 
                        </p>
                    </section>
                    <!-- h2 section  -->
                    <section class="my-2">
                        <h2 class="blog-post-title">Get Your iPhone Repair with Up to 1-Year Warranty at Mobairu: </h2>
                        <div class="heading_septrater"></div>
                        <p class="service_offer_para">We believe in the quality of our iPhone repair services, which is why we offer an assured warranty of up to 1 year on all repairs which is rarely provided by other repair services. Our skilled technicians use OEM or high-quality parts to ensure your iPhone functions like new. </p>

                        <p class="service_offer_para">Whether it's a screen replacement, battery issue, or water damage repair or any other issues. You can trust that our repairs are built to last. If any issue arises within the warranty period, simply bring your iPhone back to us, and we'll address it at no additional cost.</p>

                        <p class="service_offer_para">Your satisfaction and peace of mind is our top priorities. Choose us for reliable, efficient, and guaranteed iPhone repair services.</p>

                    </section>
                    <!-- cost section -->
                    <section class="my-2">
                        <h2 class="blog-post-title">How Much Does it cost to repair iPhone? </h2>
                        <div class="heading_septrater"></div>
                        <p class="service_offer_para">The <b>Cost of iPhone repair starts from INR with an Assured Warranty of up to 1 Year</b>. The exact cost of repair purely depends on the type of issue and overall duration of warranty is being offered on that service etc. </p>
                    </section>
                    <!-- form section  -->
                    <div class="container-sm">
                        <div class="row">
                            <div class="col-md-5 p-2">
                                <?php $this->load->view('common/form'); ?>
                                <?php $this->load->view('common/mobile_form') ?>
                            </div>
                            <div class="col-md-7 d-flex justify-content-center align-item-center">
                                <div class="form-img-div">
                                    <img src="<?=base_url('assets/images/icons/1.png')?>" alt="mobairu" class="img-fluid">

                                    <!-- <video autoplay="" muted="" loop="" id="myVideo">
                                        <source src="<?=base_url('assets/images/icons/mob.mp4')?>" type="video/mp4">
                                    </video> -->
                                </div>
                            </div>
                           
                        </div>
                    </div>
                    <section class="my-2">
                    <?php $this->load->view('common/review'); ?>

                    </section>
                    <!-- table -->
                    <section class="my-2">
                        <h2 class="blog-post-title">iPhone repair Services Offered by Mobairu and its Cost: </h2>
                        <div class="heading_septrater"></div>
                        <p class="service_offer_para">We provide a comprehensive range of iPhone repair services to address all your device needs. Our services include:  </p>
                        



                            <div class="container">
                            <table id="customers">
                                <tr>
                                    <!-- <th class="hd">S. No.</th> -->
                                    <th>Name of Service </th>
                                    <th>Price</th>
                                </tr>
                                <tr>
                                    <!-- <td>1</td> -->
                                    <td><i class="bi bi-check-circle"></i> Screen Repair</td>
                                    <td>₹</td>
                                </tr>
                                <tr>
                                    <!-- <td>2</td> -->
                                    <td><i class="bi bi-check-circle"></i> Battery Replacement </td>
                                    <td>₹</td>
                                </tr>
                                <tr>
                                    <!-- <td>2</td> -->
                                    <td><i class="bi bi-check-circle"></i> Water Damage Repair </td>
                                    <td>₹</td>
                                </tr>
                                <tr>
                                    <!-- <td>2</td> -->
                                    <td><i class="bi bi-check-circle"></i> Camera Repair </td>
                                    <td>₹</td>
                                </tr>
                                <tr>
                                    <!-- <td>2</td> -->
                                    <td><i class="bi bi-check-circle"></i> Button Repair </td>
                                    <td>₹</td>
                                </tr>
                            </table>
                            </div>
                            






                        <p class="service_offer_para">No matter the issue, Mobairu has the expertise to get your iPhone back in perfect working condition. Contact us today to schedule your repair and get it repaired by the expert technicians.
                        </p>

                    </section>
                    <!-- Procedure -->
                    <section class="my-2">
                        <h3 class="blog-post-title">Mobairu’s Standard Procedure to Repairs Your iPhone:  </h3>
                        <div class="heading_septrater"></div>
                        <p class="service_offer_para">Mobairu’s repair process is designed to provide quick, efficient, and high-quality service which same or similar to the Apple's standards. Here’s how we do it: </p>

                        <ul class="survice_ul">
                            <li><strong>Diagnosis: </strong>  Our expert technicians thoroughly inspect your iPhone to accurately identify the issue. We use advanced diagnostic tools to ensure nothing is overlooked. 
                            </li>

                            <li><strong>Repair : </strong>Using high-quality parts that meet same or similar Apple's standards, we perform the necessary repairs. Whether it’s a screen replacement, battery change, or any other issue, our technicians apply their extensive expertise to restore your iPhone to optimal condition.</li>

                            <li><strong>Testing : </strong> After the repair, we rigorously test your iPhone to ensure all functions are working perfectly. This includes checking the screen, battery life, camera, buttons, and any other repaired components. </li>

                            <li><strong>Quality Check : </strong>  We conduct a meticulous quality check to ensure that it is working as intended. This step ensures that our repairs are reliable and long-lasting. 
                            </li>

                            <li><strong> Warranty : </strong>   We provide an assured warranty of up to 1 year on all repairs, reflecting our confidence in the quality of our work and giving you peace of mind.
                            </li>

                        </ul>
                        <p class="service_offer_para">Bring your iPhone to Mobairu and experience professional, reliable iPhone repair services that meet Apple's standards but all at an affordable cost.</p>
                    </section>
                    <!-- why to choose -->
                    <section class="my-2">
                        <h4 class="blog-post-title">Why Choose Mobairu for Your iPhone Repair </h4>
                        <div class="heading_septrater"></div>
                        <p class="service_offer_para">We at Mobairu, committed to provide exceptional iPhone repair services that you can trust. Here’s why you should choose us : </p>

                        <ul class="survice_ul">
                            <li><strong> Experienced Technicians : </strong> Our team consists of skilled professionals with extensive expertise in iPhone repairs.  </li>

                            <li><strong> High-Quality Parts: </strong>  We use only the best parts that meet or exceed Apple's standards, ensuring durability and performance.  </li>

                            <li><strong> Comprehensive Warranty : </strong>  Enjoy up to a 1-year warranty on all repairs, giving you peace of mind.  </li>

                            <li><strong>  Fast Turnaround : </strong> Most repairs are completed within the same day, so you won't be without your device for long.  </li>

                            <li><strong> Competitive Pricing: </strong> We offer high-quality repairs at affordable prices. </li>

                        </ul>
                        <p class="service_offer_para">Trust us for reliable, efficient, and affordable iPhone repair services. Contact us today to schedule your repair. Get your device repaired at your doorstep or call us to pick-up your device or you can also courier your device to us, we will repair it and send it back to you. </p>
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

                    <!-- review cursole section -->
                    
                    <section class="my-2">
                        <div class="container p-2">
                            <h3 class="mb-3">FAQ <a href="#">Dharmender</a></h3>
                            <div class="accordion accordion-flush" id="accordionFlushExample">

                                <div class="accordion-item rounded-3 border-0 shadow mb-2">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button border-bottom collapsed fw-semibold Question"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                            aria-expanded="false" aria-controls="flush-collapseOne">
                                            How long does an iPhone repair take?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body Answer">
                                            <p>Most iPhone repairs are completed within the same day, ensuring you get your device back quickly and efficiently. </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item rounded-3 border-0 shadow mb-2">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button border-bottom collapsed fw-semibold"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                            aria-expanded="false" aria-controls="flush-collapseTwo">
                                            Do you use genuine Apple parts?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p>We use high-quality parts that meets Apple's standards to ensure optimal performance and durability. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item rounded-3 border-0 mb-2 shadow">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button border-bottom collapsed fw-semibold"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                                            aria-controls="flush-collapseThree">
                                            Is there a warranty on the repairs?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p>Yes, all our repairs come with an assured warranty of up to 1 year, providing you with peace of mind. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item rounded-3 border-0 mb-2 shadow">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button border-bottom collapsed fw-semibold"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour"
                                            aria-expanded="false" aria-controls="flush-collapsefour">
                                            Can you repair water-damaged iPhones?
                                        </button>
                                    </h2>
                                    <div id="flush-collapsefour" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p>Yes, we specialize in repairing water-damaged iPhones, restoring them to full functionality using advanced techniques. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item rounded-3 border-0 mb-2 shadow">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button border-bottom collapsed fw-semibold"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefive"
                                            aria-expanded="false" aria-controls="flush-collapsefive">
                                            Do I need to make an appointment for my repair?
                                        </button>
                                    </h2>
                                    <div id="flush-collapsefive" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p>While appointments are recommended for faster service, we also welcome walk-ins at our repair centers.  </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </article>



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
    <!-- review slider -->
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