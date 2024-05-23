<x-main-layouts class="contact-page">
    <main class="main">

        <x-page-title>
            تسجيل الدخول
        </x-page-title>

        <main class="main">

            <!-- Contact Section -->
            <section id="contact" class="contact section">

                <div class="container" data-aos="fade-up" data-aos-delay="100">
                    <div dir="rtl">
                        <h2>انضم الينا</h2>
                        <p> ليس لديك حساب ؟ <a href="{{ route('register') }}">تسجيل عميل جديد</a></p>
                    </div>
                    <div class="row gy-4 mt-1">

                        <div class="col-lg-12"  dir="rtl">
                            <form method="post" action="{{ route('auth.authenticate') }}" class="php-email-form" data-aos="fade-up"
                                data-aos-delay="400">
                                @csrf
                                <div class="row gy-4">
                                    <div>
                                        <div class="col-md-6 ">
                                            <input type="email" class="form-control" name="email"
                                                placeholder="البريد الإلكتروني" value="{{ old('email') }}" >
                                                @error('email')
                                                    <div class="text-danger mt-1">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>

                                    <div>
                                        <div class="col-md-6 ">
                                            <input type="password" class="form-control" name="password"
                                                placeholder="كلمة المرور" >
                                                @error('password')
                                                    <div class="text-danger mt-1">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12 text-right">
                                        <div class="loading">Loading</div>
                                        <div class="error-message"></div>
                                        <div class="sent-message">تم ارسال رسالتك بنجاح  - شكرا لك </div>

                                        <button type="submit">تسجيل الدخول</button>
                                    </div>

                                </div>
                            </form>
                        </div><!-- End Contact Form -->
                    </div>
                </div>
            </section><!-- /Contact Section -->
        </main>
</x-main-layouts>
