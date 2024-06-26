<x-main-layouts class="contact-page">
    <main class="main">

        <x-page-title>
            اتـصـل بـنـا
        </x-page-title>

        <main class="main">

            <!-- Contact Section -->
            <section id="contact" class="contact section">

                <div class="container" data-aos="fade-up" data-aos-delay="100">

                    <div class="row gy-4">

                        <div class="col-lg-6">
                            <div class="info-item d-flex flex-column justify-content-center align-items-center"
                                data-aos="fade-up" data-aos-delay="200">
                                <i class="bi bi-geo-alt"></i>
                                <h3>العنوان</h3>
                                <p>حفر الباطن  - المملكة العربية السعودية</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="col-lg-3 col-md-6">
                            <div class="info-item d-flex flex-column justify-content-center align-items-center"
                                data-aos="fade-up" data-aos-delay="300">
                                <i class="bi bi-telephone"></i>
                                <h3>اتصل بنا </h3>
                                <p>0096623659772</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="col-lg-3 col-md-6">
                            <div class="info-item d-flex flex-column justify-content-center align-items-center"
                                data-aos="fade-up" data-aos-delay="400">
                                <i class="bi bi-envelope"></i>
                                <h3>البريد الإلكتروني</h3>
                                <p>info@watertank.com</p>
                            </div>
                        </div><!-- End Info Item -->

                    </div>

                    <div class="row gy-4 mt-1">
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d899053.5297447492!2d46.1401033934213!3d28.330785060436867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fd740cea9fbbce7%3A0xa123ca0fe0255ab6!2z2K3ZgdixINin2YTYqNin2LfZhiDYp9mE2LPYudmI2K_Zitip!5e0!3m2!1sar!2seg!4v1716486693952!5m2!1sar!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div><!-- End Google Maps -->

                        <div class="col-lg-6"  dir="rtl">
                            <form class="php-email-form" data-aos="fade-up"
                                data-aos-delay="400">
                                <div class="row gy-4">

                                    <div class="col-md-6">
                                        <input type="text" name="name" class="form-control"
                                            placeholder="الإسم" required="">
                                    </div>

                                    <div class="col-md-6 ">
                                        <input type="email" class="form-control" name="email"
                                            placeholder="البريد الإلكتروني" required="">
                                    </div>

                                    <div class="col-md-12">
                                        <input type="text" class="form-control" name="subject" placeholder="الموضوع"
                                            required="">
                                    </div>

                                    <div class="col-md-12">
                                        <textarea class="form-control" name="message" rows="6" placeholder="يرجى ترك رسالتك هنا" required=""></textarea>
                                    </div>

                                    <div class="col-md-12 text-center">
                                        <div class="loading">Loading</div>
                                        <div class="error-message"></div>
                                        <div class="sent-message">تم ارسال رسالتك بنجاح  - شكرا لك </div>

                                        <button type="submit">اعتمد الرسالة</button>
                                    </div>

                                </div>
                            </form>
                        </div><!-- End Contact Form -->
                    </div>
                </div>
            </section><!-- /Contact Section -->
        </main>
</x-main-layouts>
