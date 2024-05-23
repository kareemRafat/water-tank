 <!-- Page Title -->
 <div class="page-title" data-aos="fade" style="background-image: url(assets/img/page-title-bg.jpg);" dir="rtl">
    <div class="container position-relative">
        <h1>{{ $slot }}</h1>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="{{ route('home') }}">الـرئــيــســيــة</a></li>
                <li class="current">{{ $slot }}</li>
            </ol>
        </nav>
    </div>
</div><!-- End Page Title -->