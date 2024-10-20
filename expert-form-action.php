<?php

use helper\DB;
use helper\Func;

require_once(__DIR__ . "/core/Config.php");
require_once(__DIR__ . "/core/helpers/Func.php");
require_once(__DIR__ . "/core/helpers/DB.php");

$db = new DB;
$func = new Func();

$full_name = $func->clean_input($_POST["full_name"]);
$mobile = $func->clean_input($_POST["mobile"]);
$select_year = $func->clean_input($_POST["select_year"]);
$select_year_half = $func->clean_input($_POST["select_year_half"]);
$select_group = $func->clean_input($_POST["select_group"]);
$select_favorites = $func->clean_array_input($_POST["select_favorites"]);
$isWorked = $func->clean_check($_POST["isWorked"]);
$isOk = $func->clean_check($_POST["isOk"]);
$captcha = $_POST['g-recaptcha-response'];

$captcha_val = $func->check_captcha($captcha);

if (!$captcha_val) $func->toast_generator("شما یک ربات تشخیص داده شدید :)");

if ($captcha_val) {

    $full_name_val = $func->check_input("full_name", $full_name);
    $mobile_val = $func->check_input("mobile", $mobile);
    $select_year_val = $func->check_input("select_year", $select_year);
    $select_year_half_val = $func->check_input("select_year_half", $select_year_half);
    $select_group_val = $func->check_input("select_group", $select_group);

    if (!$full_name_val[0]) $func->toast_generator($full_name_val[1]);
    if (!$mobile_val[0]) $func->toast_generator($mobile_val[1]);
    if (!$select_year_val[0]) $func->toast_generator($select_year_val[1]);
    if (!$select_year_half_val[0]) $func->toast_generator($select_year_half_val[1]);
    if (!$select_group_val[0]) $func->toast_generator($select_group_val[1]);

    if ($full_name_val[0] && $mobile_val[0] && $select_year_val[0] && $select_year_half_val[0] && $select_group_val[0]) {


        $newUserResult = $db->newUser($full_name , $mobile , $select_year , $select_year_half , $select_group , $select_favorites , $isWorked , $isOk , 0 , $_SERVER['HTTP_USER_AGENT'] , time());

        if($newUserResult["status"] == "OK"){

            $func->toast_generator("عضویت شما باموفقیت انجام شد" , "success");

            print_r("<script>setTimeout(function(){  location.reload(); }, 5000); </script>");

        }else{

            $func->toast_generator($select_group_val[1]);

        }


    }

}