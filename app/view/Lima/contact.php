
<section class="contact section-padding" id="contact">
    <div class="container">
        <div class="main-heading mx-auto">
            <h2 class="main-head-animation">Contact</h2>
            <span>Bizimlə Əlaqə</span>
        </div>
        <div class="contact-field my-4 row flex-wrap-reverse">
            <div class="contact-info-field p-2 col-12 col-md-4">



                <div class="location">



                    <i class="fas fa-street-view"></i>
                    <h5>Location
                        <a data-fancybox data-type="iframe" data-preload="false" data-width="640" data-height="480" href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2435330.2461244175!2d-119.22978090041478!3d35.016509229685205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c229d213a60943%3A0x3458deb43bf50b32!2sCalifornia%20City%2C%20CA%2C%20USA!5e0!3m2!1sen!2seg!4v1630528358426!5m2!1sen!2seg"
                           style="border:0;">
                            <i class="fas fa-external-link-alt"></i>
                        </a>
                    </h5>

                    <address class="mb-0"><?=$settings['location']?></address>
                </div>



                <div class="email">
                    <i class="far fa-envelope"></i>
                    <h5>Email</h5>
                    <a href=""><span
                            class="__cf_email__"
                            data-cfemail="becad1d0dffedbc6dfd3ced2db90ddd1d3">[<?=$settings['email_adress']?>]</span></a>
                </div>



                <div class="phone">
                    <i class="fas fa-phone-alt"></i>
                    <h5>Phone</h5>
                    <a href="tel:#"><?=$settings['phone_number']?></a>
                </div>



                <div class="social">
                    <i class="fas fa-share-alt"></i>
                    <h5>Social Links</h5>
                    <div class="social-links pt-2 d-flex align-items-center justify-content-center">
                        <?php foreach (menu(2) as $key => $menu): ?>
                            <a class="mx-2" href="<?=menu_url($menu['url'])?>">
                                <?=htmlspecialchars_decode($menu['title'])?>
                            </a>

                        <?php endforeach; ?>

                        <!--
                            <a class="mx-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="mx-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="mx-2" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="mx-2" href="#"><i class="fab fa-linkedin-in"></i></a>

                           -->

                    </div>

                </div>
            </div>



            <div class="contact-form-field p-4 col-12 col-md-8">
                <form action="" id="contact-form" onsubmit="return false;" method="post">
                    <div class="alert alert-danger" style="display: none" id="contact-error-msg" role="alert"></div>
                    <div class="alert alert-success" style="display: none" id="contact-success-msg" role="alert"></div>


                    <div class="name mb-3">
                        <input class="w-100 p-2" type="text" name="name" required placeholder="Name" id="name">
                    </div>


                    <div class="email mb-3">
                        <input class="w-100 p-2" type="email" name="email" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" required placeholder="Email" id="email">
                    </div>


                    <div class="phone mb-3">
                        <input class="w-100 p-2" type="text" name="phone" required placeholder="Number" id="phone">
                    </div>


                    <div class="message mb-3">
                        <input class="w-100 p-2" name="subject"  required placeholder="Müraciət Səbəbiniz" id="subject">
                    </div>


                    <div class="message mb-3">
                        <textarea class="w-100 p-2" name="message" required placeholder="Mesajınız" id="message"></textarea>
                    </div>



                    <button type="submit" onclick="contact('#contact-form')"> Send Message</button>
                    <p class="mt-3 contact-message"></p>
                </form>
            </div>




        </div>
    </div>
</section>
