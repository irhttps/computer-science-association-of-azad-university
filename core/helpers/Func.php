<?php

namespace helper;

class Func
{


    function clean_input($data) : string
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function clean_check($data) : string
    {
        if (isset($data) and !empty($data) and ($data == "1" || $data == "on")) {
            $check = 1;
        } else {
            $check = 0;
        }
        return $check;
    }

    function clean_array_input($array) : string
    {

        $array_string = "";
        if($array != null){

            foreach ($array as $a => $arr) {
                $array_string .= $arr . ",";
            }

            $array_string = rtrim($array_string , ",");
        }

        return $array_string;

    }


    function check_input($type , $value) : array
    {
        switch ($type)
        {
            case "full_name":

                if(empty($value))
                    return [ false , "نام و نام خانوادگی نمی‌تواند خالی باشد"];

                elseif (!preg_match('/^[\p{L}\s]+$/u', $value))
                    return [ false , "نام فقط باید شامل کارکتر فارسی، انگلیسی و فاصله باشد"];

                break;

            case "mobile":

                if(empty($value))
                    return [ false , "شماره موبایل نمی‌تواند خالی باشد"];

                elseif (!preg_match('/^0[0-9]{10}$/', $value))
                    return [ false , "شماره موبایل معتبر نمی‌باشد"];

                break;

            case "select_year":
                include_once "core/jdf.php";

                $current_year = jdate('Y', time());

                if($value == "")
                    return [ false , "سال ورود نمی‌تواند خالی باشد"];

                elseif (!is_numeric($value) || $value < 1390 || $value > $current_year)
                    return [ false , "سال ورود معتبر نیست"];

                break;

            case "select_year_half":

                if($value == "")
                    return [ false , "نیم سال ورود نمی‌تواند خالی باشد"];

                elseif ($value != "0" && $value != "1")
                    return [ false , "نیم سال ورود معتبر نیست"];

                break;

        }

        return [ true ];

    }

    function toast_generator($text , $type = "danger")
    {
        print_r("<script>

        toastr.options = {
            'closeButton': true,
            'debug': false,
            'newestOnTop': false,
            'progressBar': true,
            'positionClass': 'toast-top-right',
            'preventDuplicates': false,
            'onclick': null,
            'showDuration': '300',
            'hideDuration': '1000',
            'timeOut': '5000',
            'extendedTimeOut': '1000',
            'showEasing': 'swing',
            'hideEasing': 'linear',
            'showMethod': 'fadeIn',
            'hideMethod': 'fadeOut'
        };  
        
        ");

        if($type == "success"){

            print_r(" toastr.success('$text', 'موفق') </script>");

        }else{

            print_r(" toastr.error('$text', 'خطا') </script>");

        }

    }

    function check_captcha($captcha_response) : bool
    {
        $captcha = $captcha_response ?? false;

        if (!$captcha) {

            return false;

        } else {
            $secret   = '6LetlWYqAAAAAM7vse4NNkcuj1Sjp7OkQP-4bPfR';
            $response = file_get_contents(
                "https://www.google.com/recaptcha/api/siteverify?secret=" . $secret . "&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']
            );

            $response = json_decode($response);

            return $response->success == true && $response->score >= 0.5;

        }

    }



}