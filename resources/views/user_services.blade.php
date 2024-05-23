<x-main-layouts class="about-page">
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
            height: 8px;
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
        <section id="about" class="about section">
            <div class="container">
                <div class="row position-relative" dir="rtl">

                    <div class="col-6 position-relative">
                        <img class="tank" src="{{ asset('assets/img/tank3.svg') }}" alt="">
                        <div class="progress-container position-absolute">
                            <div id="progress-bar">
                                <div id="indicator">
                                    <i class="bi bi-caret-right-fill"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 pt-5 d-flex justify-content-center align-items-center">
                        <div id="alertDiv" class="alert border-0 w-100 fs-5 h-50">

                        </div>
                    </div>


                </div>

            </div>

        </section><!-- /About Section -->


    </main>
    <script>
        function startProgress() {
            let indicator = document.getElementById("indicator");
            let alertDiv = document.getElementById("alertDiv");

            alertDiv.innerHTML = '';

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
                            alertDiv.innerText = 'يرجى العلم ان سعة الخزان قد اصبحت 60% ';
                            alertDiv.classList.add('alert-warning')
                        }
                        if (width == 90) {
                            alertDiv.innerText = 'يرجى العلم ان سعة الخزان قد اصبحت 90% ';
                            alertDiv.classList.add('alert-danger')
                        }

                        if (width == 100) {
                            // document.querySelector("#indicator i").style.display = 'none';
                        }
                    }
                }
            }, 100);
        }

        setTimeout(function() {
            startProgress()
        }, 2000)
    </script>
</x-main-layouts>
