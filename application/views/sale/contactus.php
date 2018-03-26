<?php include 'include/header.php'; ?>
<title>Contact Us</title>
<?php include 'include/navbar.php'; ?>
<style type="text/css">
    #life {
        background: url("http://res.cloudinary.com/saletancy-com/image/upload/v1521885862/saletancy_contactus_x99v0h.jpg");
        background-size:100% 100%;
        background-repeat: no-repeat;
        padding: 0px;
        width: 100%
    }
    #bigbtn :hover{
        background-color:white;
    }
</style>
<div style="height:130px">
</div>
<br>
<section id="contact-one">

    <div class="container-fluid">
        <div id="life">
            <div class="row">
                <br><br>
                <div class="col-lg-7 col-sm-12 pull-left">
                    <br><br>
                    <h1 style="color:black;position: relative;">ISN'T IT TIME WE TALKED ?</h1>
                    <p class="story col-sm-6" style="color:black;">
                        <span>
                            We are here to answer any questions you may have about our saletancy. Reach out to us and we'll respond as soon as we can.
                        </span><br><br>
                        <span>Tell us what you’re struggling with right now. we promise we'll do our best to give you solution.</span><br>
                    </p><br><br>

                    <button type="submit" class="btn btn-primary" id="bigbtn">GET IN TOUCH WITH US</button>

                </div>
            </div>
        </div>
    </div>

</section>
<br>
<div class="container">
    <div class="section-header">
        <h3 class="text-center">
            What’s going to happen when you contact us<br>

        </h3>
        <p class="stoy">
            One of us will get in touch to arrange a call. We’re happy to organize calls around your schedule. Early morning? Late evening   No problem.<br>
            The aim is to learn about you and your business. Your goals, your aspirations, what you’d love to do but can’t for whatever reason, and what you feel isn’t working.<br>
            We’ll also let you know what you should be doing that you’re NOT doing.
            How much will this call cost you? Nothing . Nil . Zero. Really ? Yes, really.<br>
            We’ll then give you a proposal of how we can help you to get out of your challenges. how our solutions can help you to get more leads?

        </p>
    </div>
</div>



<section id="about">
        <div class="container">
            <header class="section-header">
                <h3>GET IN TOUCH</h3>
                <p> Choose your convenient way to get in touch with us ,we’ll get back to you promptly. We promise.</p>
            </header>
            <div class="row about-cols">

                <div class="col-md-4 wow fadeInUp">
                    <div class="about-col" style="text-align:center">
                        <div class="img">
                            <img src="http://res.cloudinary.com/saletancy-com/image/upload/v1521917408/email-us-min_ignqex.jpg" alt="" class="img-fluid">
                        </div>
                        <h2 class="title"><a href="#">Mail</a></h2>
                        <p>
                        The fastest way to get hold of us. Send us an email                       
                     </p>

                       <!-- <div id="intro" style="background-color:white;height:20px;text-align:center">
                            <a href="#featured-service" class="btn-get-started">Get Started</a>
                        </div>-->

                    </div>
                </div>

                <div class="col-md-4 wow fadeInUp">
                    <div class="about-col" style="text-align:center">
                        <div class="img">
                            <img src="http://res.cloudinary.com/saletancy-com/image/upload/v1521917408/contact-on-social-media-min_fgixgi.jpg" alt="" class="img-fluid">
                        </div>
                        <h2 class="title"><a href="#">Social Media</a></h2>
                        <p>
                        You’ll find us on channels like Twitter, Facebook,LinkedIn and Youtube.


                        </p>
                       
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="about-col" style="text-align:center">
                        <div class="img">
                            <img src="http://res.cloudinary.com/saletancy-com/image/upload/v1521917408/contact-us-by-phone-min_mqk6oo.jpg" alt="" class="img-fluid">
                        </div>
                        <h2 class="title"><a href="#">Phone</a></h2>
                        <p>
                        Tel : (+91) 1204128885


                        </p><br>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>


<div class="container">
    <div class="row">
    </div><br><br>
    <section id="contact" class="section-gray-bg section-spaceing">

        <div class="container">
            <div class="section-header">
                <h3>Contact Us</h3>
                <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you.</p><br><br>
            </div>
            <div class="row">
                <!-- Contact Info -->
                <div class="col-md-4 section-header">

                    <h3>Have you any question?</h3>
                    <p>We are glad to you here! have you and queary just contact us today we are always here for you sarve!</p><br>
                    <ul class="address-info-text">
                        <li><span><i class="fa fa-map-marker" style="font-size:24px;color:#18d26e;"></i></span> P-88, P Block Sanjay nagar,  Ghaziabad, Uttar Pradesh 201002</li>
                        <li><span><i class="fa fa-phone" style="font-size:24px;color:#18d26e;"></i></span>+ 070178 99611.</li>
                        <li><span><i class="fa fa-envelope-o" style="font-size:24px;color:#18d26e;"></i></span>www.saletancy.com</li>

                    </ul>

                </div>
                <!-- / Contact Info -->
                <!-- Contact Form -->
                <div class="col-md-8" id="contact" style="margin-top:-50px">
                    <div class="container">

                        <div class="form" style="color:red">
                            <?php echo form_open('contactus/send_message',['role'=>'form']); ?>
                            <form action="" method="post" role="form">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <input type="name" name="name" class="form-control" id="name" placeholder="Full Name" required="required" />
                                        <span class="help-block error"><?php echo form_error('name')?></span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Business Email" required="required" />
                                        <span class="help-block error"><?php echo form_error('email')?></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <input type="text" name="website" class="form-control" id="company" placeholder="Company Name" required="required">
                                        <span class="help-block error"><?php echo form_error('website')?></span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="tel" name="phone" class="form-control" id="phone" placeholder="Phone Number" required="required">
                                        <span class="help-block error"><?php echo form_error('phone')?></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <textarea rows="6" name="message" class="form-control" id="description" placeholder="Message" required="required"></textarea>
                                        <span class="help-block error"><?php echo form_error('message')?></span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div id="intro" style="background-color:white;height:20px;text-align:center">
                                        <button class="btn-get-started" value="Send Message">Send Message</button>
                                    </div>
                                </div>
                                <?php echo form_close(); ?>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- / Contact Form -->
            </div>
        </div>
    </section>


</div>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1749.9019504231644!2d77.4533118!3d28.69551210000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1513773203815" height="450px" width="100%" style="overflow:hidden;" ; frameborder="0" style="border:0" allowfullscreen></iframe>


<?php include 'include/footer.php'; ?>