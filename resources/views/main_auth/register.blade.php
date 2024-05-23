<x-main-layouts class="contact-page">
    <main class="main">

        <x-page-title>
            انضم الينا
        </x-page-title>

        <main class="main">

            <!-- Contact Section -->
            <section id="contact" class="contact section">

                <div class="container" data-aos="fade-up" data-aos-delay="100">
                    <div dir="rtl">
                        <h2>انضم الينا</h2>
                        <p>لديكم حساب بالموقع  <a href="{{ route('login') }}">تسجيل الدخول</a></p>
                    </div>
                    <div class="row gy-4 mt-1">

                        <div class="col-lg-12"  dir="rtl">
                            <form method="post" action="{{ route('auth.store') }}" class="php-email-form" data-aos="fade-up"
                                data-aos-delay="400">
                                @csrf
                                <div class="row gy-4">

                                    <div class="col-md-6">
                                        <input type="text" name="name" class="form-control"
                                            placeholder="الإسم" required="">
                                    </div>

                                    <div class="col-md-6 ">
                                        <input type="email" class="form-control" name="email"
                                            placeholder="البريد الإلكتروني" required="">
                                    </div>

                                    <div class="col-md-6 ">
                                        <input type="password" class="form-control" name="password"
                                            placeholder="كلمة المرور" required="">
                                    </div>

                                    <div class="col-md-6 ">
                                        <input type="password" class="form-control" name="password_confirmation"
                                            placeholder="تأكيد كلمة المرور" required="">
                                    </div>

                                    <div class="col-md-12">
                                        <input type="text" class="form-control" name="address" placeholder="العنوان"
                                            required="">
                                    </div>

                                    <div class="col-md-12">
                                        <input type="text" class="form-control" name="capacity" placeholder="السعة التخزينية لخزان المياة"
                                            required="">
                                    </div>

                                    <div class="col-md-12">
                                        <select class="form-control" name="service_type">
                                            <option>نوع الخدمة المطلوبة</option>
                                            <option value="منزلي">منزلي</option>
                                            <option value="تجاري">تجاري</option>
                                            <option value="صناعي">صناعي</option>
                                        </select>
                                    </div>


                                    <div class="col-md-12 text-center">
                                        <div class="loading">Loading</div>
                                        <div class="error-message"></div>
                                        <div class="sent-message">تم ارسال رسالتك بنجاح  - شكرا لك </div>

                                        <button type="submit">تسجيل</button>
                                    </div>

                                </div>
                            </form>
                        </div><!-- End Contact Form -->
                    </div>
                </div>
            </section><!-- /Contact Section -->
        </main>
</x-main-layouts>
