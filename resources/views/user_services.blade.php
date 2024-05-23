<x-main-layouts class="contact-page">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .tank {
            width: 500px;
        }

        .progress-container {
            width: 430px;
            margin: 20px 0;
            transform: rotate(90deg);
            top: 47%;
            right: 254px;
        }

        #progress-bar {
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, rgba(83, 209, 102, 1) 28%, rgba(228, 154, 22, 1) 61%, rgba(255, 0, 0, 1) 100%);
            position: relative;
            border-radius: 5px;
        }

        #indicator {
            width: 11px;
            height: 100%;
            background-color: transparent;
            color: white;
            position: absolute;
            left: 0;
            top: 0;
            transition: left 0.1s;
            border-radius: 2px;
        }

        #indicator i {
            position: absolute;
            bottom: -42px;
            left: -18px;
            color: dodgerblue;
            font-size: 40px;
            transform: rotate(270deg)
        }
    </style>
    <main class="main">

        <x-page-title>
            تفاصيل خدماتي
        </x-page-title>

        <!-- About Section -->
        <section id="contact" class="contact section">
            <div class="container">
                <div class="row position-relative" dir="rtl">
                    <div class="col-lg-6 col-12 position-relative">
                        <img class="tank" src="{{ asset('assets/img/tank3.svg') }}" alt="">
                        <div class="progress-container position-absolute">
                            <div id="progress-bar">
                                <div id="indicator">
                                    <i class="bi bi-caret-right-fill"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 pt-5 d-flex justify-content-center align-items-center">
                        <div id="alertDiv" class="alert alert-primary border-0 w-100 fs-5 h-md-50">
                            <form class="php-email-form sendForm" data-aos="fade-up" data-aos-delay="1200">
                                {{-- @csrf --}}
                                <div class="col-md-12">
                                    <select class="form-control" name="service_provider">
                                        <option>اختر مزود الخدمة</option>
                                        @foreach ($service_providers as $provider)
                                            <option value="{{ $provider->id }}"> {{ $provider->company_name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="col-md-12 text-right">
                                        <button
                                            style="padding:5px 8px;font-size:17px;margin-top:20px;background-color:dodgerblue"
                                            type="submit">تقديم الطلب</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                </div>

            </div>

        </section><!-- /About Section -->


    </main>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script>
        alertDiv.style.display = 'none';

        function startProgress() {
            let indicator = document.getElementById("indicator");
            let alertDiv = document.getElementById("alertDiv");

            let width = 0;
            let isPaused = false;
            let interval = setInterval(() => {
                if (width >= 100) {
                    clearInterval(interval);
                } else {
                    if (!isPaused) {
                        width++;
                        indicator.style.left = width + "%";
                        if (width == 60) {
                            isPaused = true;
                            Swal.fire({
                                title: 'تحذير!',
                                text: 'يرجى العلم ان سعة الخزان قد اصبحت 60% من السعة التخزينية ',
                                icon: 'warning',
                                confirmButtonText: 'OK'
                            }).then(() => {
                                isPaused = false;
                            });
                        }
                        if (width == 90) {
                            isPaused = true;
                            Swal.fire({
                                title: 'تحذير!',
                                text: 'يرجى العلم ان سعة الخزان قد اصبحت 90% من السعة التخزينية ',
                                icon: 'warning',
                                confirmButtonText: 'OK'
                            }).then(() => {
                                isPaused = false;
                            });
                        }
                        if (width == 100) {
                            isPaused = true;
                            Swal.fire({
                                title: 'تحذير!',
                                text: 'يرجى العلم ان سعة الخزان قد فرغت بشكل كامل .. يرجى الاتصال بمزود خدمة لإعادة ملئ الخزان',
                                icon: 'error',
                                confirmButtonText: 'OK'
                            }).then(() => {
                                clearInterval(interval);
                                alertDiv.style.display = 'block';
                            });
                        }
                    }
                }
            }, 100);
        }

        setTimeout(function() {
            startProgress()
        }, 2000)

        $('.sendForm').submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: "{{ route('request_service') }}",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: new FormData(this),
                method: 'POST',
                contentType: false,
                processData: false,
                success(data) {
                    Swal.fire({
                        title: 'تنويه',
                        text: 'تم تقديم الطلب الى مزود الخدمة وسيتم التواصل معكم قريباً وجاري تحويلكم الى الصفحة الرئيسية ' ,
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then(() => {
                        window.location.href = '/'
                    });
                }
            })
        })
    </script>
</x-main-layouts>
