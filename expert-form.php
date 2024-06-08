<?php

include_once "core/jdf.php"

?>

<!DOCTYPE html>
<html class="light-style layout-navbar-fixed layout-wide" data-assets-path="assets/" data-template="front-pages" data-theme="theme-default" dir="rtl" lang="fa">

<head>
    <title>فرم عضویت در کارگروه‌های انجمن علمی کامپیوتر</title>

    <meta charset="UTF-8"/>
    <meta content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" name="viewport"/>

    <meta content="" name="description"/>

    <!-- Favicon -->
    <link href="assets/img/favicon/favicon.ico" rel="icon" type="image/x-icon"/>

    <!-- Tabler Icons -->
    <link href="assets/fonts/tabler-icons.css" rel="stylesheet"/>

    <!-- Core CSS -->
    <link href="assets/css/core.css" rel="stylesheet"/>
    <link href="assets/css/theme-default.css" rel="stylesheet"/>

    <link href="assets/css/demo.css" rel="stylesheet"/>
    <link href="assets/css/front-page.css" rel="stylesheet"/>

    <!-- Vendors CSS -->

    <link href="assets/libs/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet"/>
    <link href="assets/libs/node-waves/node-waves.css" rel="stylesheet"/>
    <link href="assets/libs/nouislider/nouislider.css" rel="stylesheet"/>
    <link href="assets/libs/swiper/swiper.css" rel="stylesheet"/>
    <link href="assets/libs/animate/animate.min.css" rel="stylesheet"/>
    <link href="assets/libs/select2/select2.css" rel="stylesheet"/>
    <link href="assets/libs/@form-validation/form-validation.css" rel="stylesheet"/>


    <!-- Page CSS -->
    <link href="assets/css/front-page-landing.css" rel="stylesheet"/>

    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>

    <!-- Better experience of RTL -->
    <link href="assets/css/rtl.css" rel="stylesheet"/>

</head>
<body class=" bg-body">

<div class="container-fluid container-xxl">

    <!-- Navbar: Start -->
    <nav class="layout-navbar shadow-none  py-0">
        <div class="container-fluid container-xxl">
            <div class="navbar  bg-navbar-theme navbar-expand-lg landing-navbar px-3 px-md-4">

                <!-- Menu logo wrapper: Start -->
                <div class="navbar-brand app-brand demo d-flex m-auto">

                    <a class="app-brand-link" href="https://www.rtl-theme.com/vuexy-admin-html-template/">
                        <img class="app-brand-logo demo" src="assets/img/logo/logo.png" alt="لوگو"/>
                        <span class="app-brand-text demo menu-text fw-bolder ms-2 ps-1">انجمن علمیءء کامپیوتر</span>
                    </a>

                </div>
                <!-- Menu logo wrapper: End -->

            </div>
        </div>
    </nav>
    <!-- Navbar: End -->

    <!-- Sections:Start -->
    <div style="margin-top: 120px">

        <div class="position-relative banner">
            <img class="rounded mb-2 h-px-150 w-100 object-fit-cover" src="assets/img/images/banner-background.png">

            <h1 class="title">فرم عضویت در کارگروه‌ها</h1>
            <p class="desc">انجمن علمی کامپیوتر دانشگاه آزاد اسلامی واحد کاشان</p>

        </div>


        <div class="alert alert-light mt-3 mb-3" role="alert">
            <p class="lh-2 mb-0 justify-text">
                این فرم برای عضویت دانشجویان
                <b>رشته کامپیوتر دانشگاه آزاد کاشان</b>
                در کارگروه‌های تعیین شده می‌باشد، لطفا تنها در صورتی که دانشجوی رشته‌های مربوطه در دانشگاه آزاد کاشان هستید اقدام به تکمیل فرم کنید.
            </p>
        </div>

        <div class="col-12">

            <h6 class="text-muted mt-5 ps-3 pe-3">لیست کارگروه‌های انجمن</h6>

            <div class="swiper ps-3 pe-3 pb-4" id="swiper-multiple-slides">

                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="card h-100 card-expert">
                            <div class="card-body d-flex justify-content-between align-items-center ">
                                <div class="card-title mb-0 w-75 d-block">
                                    <h5 class="mb-2 me-2">هک و امنیت</h5>
                                    <small class="text-truncate d-block">تست نفوذ ، مهندسی معکوس ، باگ بانتی ، تیم قرمز و آبی</small>
                                </div>
                                <div class="card-icon">
                                    <span class="badge bg-label-dark rounded-pill p-3">
                                        <i class="ti ti-shield-lock ti-sm"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card h-100 card-expert">
                            <div class="card-body d-flex justify-content-between align-items-center ">
                                <div class="card-title mb-0 w-75 d-block">
                                    <h5 class="mb-2 me-2">شبکه</h5>
                                    <small class="text-truncate d-block">ارتباطات بیسیم ، CCNA ، رایانش ابری ، شبکه‌های بیسیم و سیار</small>
                                </div>
                                <div class="card-icon">
                                    <span class="badge bg-label-warning rounded-pill p-3">
                                        <i class="ti ti-access-point ti-sm"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card h-100 card-expert">
                            <div class="card-body d-flex justify-content-between align-items-center ">
                                <div class="card-title mb-0 w-75 d-block">
                                    <h5 class="mb-2 me-2">هوش مصنوعی</h5>
                                    <small class="text-truncate d-block">شبکه‌عصبی ، یادگیری ماشین ، یادگیری عمیق ، رباتیک</small>
                                </div>
                                <div class="card-icon">
                                    <span class="badge bg-label-primary rounded-pill p-3">
                                        <i class="ti ti-brain ti-sm"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card h-100 card-expert">
                            <div class="card-body d-flex justify-content-between align-items-center ">
                                <div class="card-title mb-0 w-75 d-block">
                                    <h5 class="mb-2 me-2">توسعه و طراحی وب</h5>
                                    <small class="text-truncate d-block">فرانت‌اند ، بک‌اند ، وردپرس ، DEVOPS</small>
                                </div>
                                <div class="card-icon">
                                    <span class="badge bg-label-info rounded-pill p-3">
                                        <i class="ti ti-world-www ti-sm"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card h-100 card-expert">
                            <div class="card-body d-flex justify-content-between align-items-center ">
                                <div class="card-title mb-0 w-75 d-block">
                                    <h5 class="mb-2 me-2">بازی سازی</h5>
                                    <small class="text-truncate d-block">بازی‌های 2D ، 3D ، آنریل‌انجین ، یونیتی</small>
                                </div>
                                <div class="card-icon">
                                    <span class="badge bg-label-danger rounded-pill p-3">
                                        <i class="ti ti-device-gamepad ti-sm"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card h-100 card-expert">
                            <div class="card-body d-flex justify-content-between align-items-center ">
                                <div class="card-title mb-0 w-75 d-block">
                                    <h5 class="mb-2 me-2">برنامه نویس موبایل</h5>
                                    <small class="text-truncate d-block">اپلیکیشن اندروید ، IOS ، کراس پلتفرم (فلاتر)</small>
                                </div>
                                <div class="card-icon">
                                    <span class="badge bg-label-success rounded-pill p-3">
                                        <i class="ti ti-device-mobile ti-sm"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card h-100 card-expert">
                            <div class="card-body d-flex justify-content-between align-items-center ">
                                <div class="card-title mb-0 w-75 d-block">
                                    <h5 class="mb-2 me-2">UI/UX</h5>
                                    <small class="text-truncate d-block">طراحی رابط و تجربه کاربری سایت و اپلیکیشن</small>
                                </div>
                                <div class="card-icon">
                                    <span class="badge bg-label-google-plus rounded-pill p-3">
                                        <i class="ti ti-wand ti-sm"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card h-100 card-expert">
                            <div class="card-body d-flex justify-content-between align-items-center ">
                                <div class="card-title mb-0 w-75 d-block">
                                    <h5 class="mb-2 me-2">سخت افزار</h5>
                                    <small class="text-truncate d-block">سیستم‌های کامپیوتری ، تعمیر ، عیب یابی ، تعویض</small>
                                </div>
                                <div class="card-icon">
                                    <span class="badge bg-label-facebook rounded-pill p-3">
                                        <i class="ti ti-cpu ti-sm"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <div class="card mt-3">
                <h5 class="card-header">فرم عضویت</h5>
                <div class="card-body">

                    <hr class="mt-0">

                    <form class="row g-3 mt-3" id="form">

                        <div class="col-md-6">

                            <div class="mb-4 row">
                                <label class="col-md-4 col-form-label" for="html5-text-input">نام و نام خانوادگی</label>
                                <div class="col-md-8">
                                    <input class="form-control" id="formValidationName" name="formValidationName" placeholder="فارسی تایپ کنید" type="text"/>
                                </div>
                            </div>

                            <div class="mb-4 row">
                                <label class="col-md-4 col-form-label" for="html5-text-input">شماره موبایل</label>
                                <div class="col-md-8">
                                    <input class="form-control ltr" id="formValidationName" name="formValidationName" placeholder="" type="text"/>
                                </div>
                            </div>

                            <div class="mb-4 row">
                                <label class="col-md-4 col-form-label" for="html5-text-input">سال ورود</label>
                                <div class="col-md-8">
                                    <select class="form-select select2" data-allow-clear="true" id="select-year" name="select-year">
                                        <option value="">انتخاب کنید</option>
                                        <?php
                                        $current_year = jdate('Y', time());
                                        for ($y = $current_year; $y >= $current_year - 8; $y--) {
                                            print_r("<option value='$y'>$y</option>");
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-4 row">
                                <label class="col-md-4 col-form-label" for="html5-text-input">نیمسال ورود</label>
                                <div class="col-md-8">
                                    <select class="form-select select2" data-allow-clear="true" id="select-year-half" name="select-year-half">
                                        <option value="">انتخاب کنید</option>
                                        <option value='0'>نیمسال اول (ورودی مهر)</option>
                                        <option value='1'>نیمسال دوم (ورودی بهمن)</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="formValidationName">نام و نام خانوادگی</label>
                            <input class="form-control" id="formValidationName" name="formValidationName" placeholder="نـوید" type="text"/>
                        </div>


                    </form>
                </div>
            </div>
        </div>

        <div class="divider divider-dashed">
            <div class="divider-text">فرم عضویت</div>
        </div>
    </div>

</div>

<!-- Footer: Start -->
<footer class="landing-footer footer-text">
    <div class="footer-bottom py-3">
        <div class="container d-flex flex-wrap justify-content-between flex-md-row flex-column text-center text-md-start">
            <div class="mb-2 mb-md-0">
                <span class="footer-text">
                    طراحی و توسعه توسط
                    <span class="text-danger byte-hover">بایت ‌مَستر</span>
                    دریافت سورس کد در
                    <a class="fw-medium" href="#support" target="_blank">گیتهاب</a>
                </span>
            </div>
            <div class="mobile-hidden">
                طراحی شده با 💜 توسط اجزاء ویکسی
            </div>
        </div>
    </div>
</footer>
<!-- Footer: End -->

<!-- mouse pointer: Start -->
<div class="mouse mouse-outer"></div>
<div class="mouse mouse-inner"></div>
<!-- mouse pointer: End -->

<!-- build:js -->
<script src="assets/libs/jquery/jquery.js"></script>
<script src="assets/libs/popper/popper.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/libs/node-waves/node-waves.js"></script>
<script src="assets/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="assets/libs/hammer/hammer.js"></script>
<script src="assets/libs/i18n/i18n.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="assets/libs/nouislider/nouislider.js"></script>
<script src="assets/libs/swiper/swiper.js"></script>
<script src="assets/libs/wow/wow.min.js"></script>
<script src="assets/libs/select2/select2.js"></script>
<script src="assets/libs/select2/i18n/fa.js"></script>
<script src="assets/libs/@form-validation/popular.js"></script>
<script src="assets/libs/@form-validation/bootstrap5.js"></script>
<script src=assets/libs/@form-validation/auto-focus.js"></script>
<script src="assets/libs/jdate/jdate.js"></script>

<!-- Main JS -->
<script src="assets/js/front-main.js"></script>

<!-- Page JS -->
<script src="assets/js/front-page-landing.js"></script>

</body>