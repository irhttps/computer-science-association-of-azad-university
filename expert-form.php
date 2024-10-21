<?php

use helper\DB;

require_once(__DIR__ . "/core/Config.php");
require_once(__DIR__ . "/core/helpers/DB.php");
include_once "core/jdf.php";

$db = new DB;

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
    <link href="assets/libs/select2/select2.css" rel="stylesheet"/>
    <link href="assets/libs/bootstrap-select/bootstrap-select.css" rel="stylesheet"/>
    <link href="assets/libs/@form-validation/form-validation.css" rel="stylesheet"/>
    <link href="assets/libs/animate-css/animate.css" rel="stylesheet"/>
    <link href="assets/libs/toastr/toastr.css" rel="stylesheet"/>
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

            <?php

            $groups_f = $db->getExpertGroups();
            $sub_groups_f = $db->getExpertSubGroups();

            if ($groups_f["status"] == "OK" && $sub_groups_f["status"] == "OK") {

                $groups = $groups_f["result"];
                $sub_groups = $sub_groups_f["result"];

                ?>

                <h6 class="text-muted mt-5">لیست کارگروه‌های انجمن</h6>

                <?php if (sizeof($groups) > 0) { ?>

                    <div class="swiper ps-3 pe-3 pb-4" id="swiper-multiple-slides">

                        <div class="swiper-wrapper">

                            <?php

                            foreach ($groups as $group) { ?>

                                <div class="swiper-slide">
                                    <div class="card h-100 card-expert">
                                        <div class="card-body d-flex justify-content-between align-items-center ">
                                            <div class="card-title mb-0 w-75 d-block">
                                                <h5 class="mb-2 me-2"><?php echo $group["name"] ?></h5>
                                                <small class="text-truncate d-block"><?php echo $group["desc"] ?></small>
                                            </div>
                                            <div class="card-icon">
                                                <span class="badge bg-label-<?php echo $group["class"] ?> rounded-pill p-3">
                                                    <i class="ti ti-<?php echo $group["icon"] ?> ti-sm"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php } ?>

                        </div>
                    </div>

                <?php } else { ?>

                    <div class="alert alert-info mt-3 mb-3" role="alert">
                        <p class="lh-2 mb-0 justify-text">
                            درحال حاضر کارگروهی وجود ندارد . لطفا بعدا بررسی نمایید.
                        </p>
                    </div>

                <?php } ?>

            <?php } else { ?>

                <div class="alert alert-danger mt-3 mb-3" role="alert">
                    <p class="lh-2 mb-0 justify-text">
                        خطایی در دریافت لیست کارگروه‌ها وجود دارد ، به زودی توسط توسعه دهنده برطرف خواهد شد.
                    </p>
                </div>

            <?php } ?>

            <div class="card mt-3" id="card-block">
                <form id="form">
                    <h5 class="card-header">فرم عضویت</h5>
                    <div class="card-body" >

                        <hr class="mt-0">


                        <div class="row g-3 mt-3">

                            <div class="col-md-5">

                                <div class="mb-4 row mt-md-3">
                                    <label class="col-md-5 col-form-label" for="full_name">نام شما</label>
                                    <div class="col-md-7">
                                        <input class="form-control" id="full_name" name="full_name" placeholder="فارسی تایپ کنید" type="text"/>
                                    </div>
                                </div>

                                <div class="mb-4 row mt-md-5">
                                    <label class="col-md-5 col-form-label" for="mobile">شماره موبایل</label>
                                    <div class="col-md-7">
                                        <input class="form-control ltr" id="mobile" name="mobile" placeholder="" type="text"/>
                                    </div>
                                </div>

                                <div class="mb-4 row mt-md-5">
                                    <label class="col-md-5 col-form-label" for="select_year">سال ورود</label>
                                    <div class="col-md-7">
                                        <select class="form-select select2" data-allow-clear="true" id="select_year" name="select_year">
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

                                <div class="mb-4 row mt-md-5">
                                    <label class="col-md-5 col-form-label" for="select_year_half">نیمسال ورود</label>
                                    <div class="col-md-7">
                                        <select class="form-select select2" data-allow-clear="true" id="select_year_half" name="select_year_half">
                                            <option value="">انتخاب کنید</option>
                                            <option value='0'>نیمسال اول (ورودی مهر)</option>
                                            <option value='1'>نیمسال دوم (ورودی بهمن)</option>
                                        </select>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-1"></div>

                            <div class="col-md-6">

                                <?php if ($groups_f["status"] == "OK") { ?>

                                    <div class="mb-4 row mt-md-3">
                                        <label class="col-md-5 col-form-label" for="select_group">کارگروه مورد نظر</label>
                                        <div class="col-md-7">

                                            <?php if (sizeof($groups) > 0) { ?>

                                                <select class="select2-icons form-select" id="select_group" name="select_group" data-allow-clear="true">

                                                    <?php foreach ($groups as $group) { ?>

                                                        <option data-icon="ti ti-<?php echo $group["icon"] ?>" value="<?php echo $group["key"] ?>"><?php echo $group["name"] ?></option>

                                                    <?php } ?>

                                                </select>

                                            <?php } else { ?>

                                                <div class="alert alert-info mt-3 mb-3" role="alert">
                                                    <p class="lh-2 mb-0 justify-text">
                                                        درحال حاضر کارگروهی وجود ندارد ُ لطفا بعدا بررسی نمایید.
                                                    </p>
                                                </div>

                                            <?php } ?>

                                        </div>

                                    </div>

                                <?php } else { ?>

                                    <div class="alert alert-danger mt-md-5 mb-3" role="alert">
                                        <p class="lh-2 mb-0 justify-text">
                                            خطایی در دریافت لیست کارگروه‌ها وجود دارد ، به زودی توسط توسعه دهنده برطرف خواهد شد.
                                        </p>
                                    </div>

                                <?php } ?>


                                <?php

                                if ($sub_groups_f["status"] == "OK") {

                                    ?>

                                    <div class="mb-4 row mt-md-5">
                                        <label class="col-md-5 col-form-label" for="select_favorites">حوزه‌های مورد علاقه من</label>
                                        <div class="col-md-7">

                                            <?php if (sizeof($sub_groups) > 0) { ?>

                                                <select class="selectpicker w-100" data-style="btn-default" id="select_favorites" name="select_favorites[]" data-show-subtext="true" data-live-search="true" multiple>

                                                    <?php

                                                    $isGroup = false;

                                                    foreach ($sub_groups as $sub_group) {

                                                        if ($sub_group["type"] == "group") {

                                                            if ($isGroup)
                                                                print_r("</optgroup>");

                                                            print_r("<optgroup label='{$sub_group["name"]}'>");
                                                            $isGroup = true;

                                                        } else {

                                                            print_r("<option value='{$sub_group["id"]}' data-subtext='{$sub_group["name_en"]}'>{$sub_group["name"]}</option>");

                                                        }

                                                    } ?>

                                                </select>

                                            <?php } else { ?>

                                                <div class="alert alert-info mt-3 mb-3" role="alert">
                                                    <p class="lh-2 mb-0 justify-text">
                                                        درحال حاضر حوزه‌ای در سیستم وجود ندارد ، به زودی افزوده خواهد شد.
                                                    </p>
                                                </div>

                                            <?php } ?>

                                        </div>

                                    </div>

                                <?php } else { ?>

                                    <div class="alert alert-danger mt-md-5 mb-3" role="alert">
                                        <p class="lh-2 mb-0 justify-text">
                                            خطایی در دریافت لیست حوزه‌ها وجود دارد ، به زودی توسط توسعه دهنده برطرف خواهد شد.
                                        </p>
                                    </div>

                                <?php } ?>

                                <div class="mb-4 row mt-md-5">
                                    <label class="w-auto col-form-label" for="isWorked">آیا تجربه‌کار در حوزه‌های کامپیوتر را داشتید؟</label>
                                    <div class="w-auto align-content-center">
                                        <input class="form-check-input" type="checkbox" value="" id="isWorked" name="isWorked"/>
                                    </div>
                                </div>

                                <div class="mb-4 row mt-md-5">
                                    <label class="w-auto col-form-label" for="isOk">آیا علاقه مند به همکاری در انجمن هستید؟</label>
                                    <div class="w-auto align-content-center">
                                        <input class="form-check-input" type="checkbox" value="" id="isOk" name="isOk"/>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                    <div class="card-footer d-flex justify-content-end">
                        <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
                        <input type="hidden" name="action" value="validate_captcha">
                        <button type="submit" class="btn btn-primary waves-effect waves-light m-1">ارسال فرم</button>
                    </div>
                </form>
            </div>

        </div>

        <div class="col-12 row my-4 d-flex justify-content-center">
            <a type="button" class="btn rounded-pill btn-twitter waves-effect waves-light w-auto mx-2 my-1" href="https://telegram.me/iauk_computer">
                <i class="tf-icons ti ti-brand-telegram ti-xs me-2"></i>
                کانال تلگرام
            </a>

            <a type="button" class="btn rounded-pill btn-warning waves-effect waves-light w-auto mx-2 my-1" href="https://telegram.me/iauk_computer">
                <i class="tf-icons ti ti-cast ti-xs me-2"></i>
                پادکست TechTopia
            </a>

            <a type="button" class="btn rounded-pill btn-info waves-effect waves-light w-auto mx-2 my-1" href="https://t.me/+_S5o8onOeUU3ZTE0">
                <i class="tf-icons ti ti-align-box-left-middle ti-xs me-2"></i>
                گروه تلگرام
            </a>

            <a type="button" class="btn rounded-pill btn-instagram waves-effect waves-light w-auto mx-2 my-1" href="https://www.instagram.com/iauk_computer/">
                <i class="tf-icons ti ti-brand-instagram ti-xs me-2"></i>
                صفحه اینستاگرام
            </a>

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
                    <a class="fw-medium" href="https://github.com/irhttps/computer-science-association-of-azad-university" target="_blank">گیتهاب</a>
                </span>
            </div>
            <div class="mobile-hidden">
                Copyright © 2024 IUK. All rights reserved
            </div>
        </div>
    </div>
</footer>
<!-- Footer: End -->

<!-- mouse pointer: Start -->
<div class="mouse mouse-outer"></div>
<div class="mouse mouse-inner"></div>
<!-- mouse pointer: End -->

<!-- toast error : Start -->
<div aria-atomic="true" aria-live="assertive" class="bs-toast toast-error toast toast-placement-ex m-2 fade top-50 start-50 translate-middle translate-middle-x animate__animated my-2" data-bs-delay="3000" role="alert">
    <div class="toast-header">
        <i class="ti ti-bell ti-xs me-2 text-danger"></i>
        <div class="me-auto fw-medium">خطای ارتباط با سرور</div>
        <button aria-label="بستن" class="btn-close" data-bs-dismiss="toast" type="button"></button>
    </div>
    <div class="toast-body">متاسفانه مشکلی در اتصال به سرور وجود دارد ، اینترنت را بررسی کنید.</div>
</div>
<!-- toast error : End -->

<div class="d-none" id="ajaxResult"></div>

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
<script src="assets/libs/select2/select2.js"></script>
<script src="assets/libs/select2/i18n/fa.js"></script>
<script src="assets/libs/bootstrap-select/bootstrap-select.js"></script>
<script src="assets/libs/bootstrap-select/i18n/defaults-fa_IR.js"></script>
<script src="assets/libs/@form-validation/popular.js"></script>
<script src="assets/libs/@form-validation/bootstrap5.js"></script>
<script src="assets/libs/@form-validation/auto-focus.js"></script>
<script src="assets/libs/block-ui/block-ui.js"></script>
<script src="assets/libs/toastr/toastr.js"></script>

<!-- Page JS -->
<script src="assets/js/front-main.js"></script>
<script src="https://www.google.com/recaptcha/api.js?render=6LetlWYqAAAAAN08D8T4XGfDZ4BJ3-wBO_Gx9Mal"></script>

<script>

    var baseurl = "http://127.0.0.1/projects/univercity/Register Form/";

</script>

</body>