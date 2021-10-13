<?php

class TMC_String {

    public static function getLeft($str_input, $number) {
        /* check empty */
        if (empty($str_input)) {
            return NULL;
        }

        /* remove spaces */
        $str_input = trim($str_input);

        /* lenght of string */
        $str_len = strlen($str_input);

        /* exception */
        $number = ($number <= 0 || $number >= $str_len) ? $str_len : $number;

        /* result var */
        $result = NULL;

        /* get characters */
        for ($i = 0; $i < $number; $i++) {
            $result .= $str_input[$i];
        }

        /* release memory */
        unset($str_input, $str_len, $number);

        /* return string */
        return trim($result);
    }

    public static function getRight($str_input, $number) {
        /* check empty */
        if (empty($str_input)) {
            return NULL;
        }

        /* remove spaces */
        $str_input = trim($str_input);

        /* lenght of string */
        $str_len = strlen($str_input);

        /* exception */
        $number = ($number <= 0 || $number >= $str_len) ? $str_len : $number;

        /* result var */
        $result = NULL;

        /* position starting */
        $pos = $str_len - $number;

        /* get characters */
        for ($i = $pos; $i < $str_len; $i++) {
            $result .= $str_input[$i];
        }

        /* release memory */
        unset($str_input, $str_len, $number, $pos);

        /* return string */
        return trim($result);
    }

    public static function getPart($str_input, $start = 0, $number) {
        /* check empty */
        if (empty($str_input)) {
            return NULL;
        }

        /* remove spaces */
        $str_input = trim($str_input);

        /* lenght of string */
        $str_len = strlen($str_input);

        /* exception */
        $start = ($start < 0 || $start >= $str_len) ? 0 : $start;
        $number = ($number <= 0 || $number >= $str_len) ? $str_len : $number;
        $stop = (($start + $number) >= $str_len) ? $str_len : ($start + $number);

        /* result var */
        $result = NULL;

        /* get characters */
        for ($i = $start; $i < $stop; $i++) {
            $result .= $str_input[$i];
        }

        /* release memory */
        unset($str_input, $str_len, $number, $start, $stop);

        /* return string */
        return trim($result);
    }

    public static function getKey($str_input, $prefix = '_key') {
        /* check empty */
        if (empty($str_input)) {
            return NULL;
        }

        /* remove spaces */
        $str_input = trim($str_input);

        /* lenght of string */
        $str_len = strlen($str_input);
        $key_len = strlen($prefix);

        /* result var */
        $result = NULL;

        /* get key */
        if (strtolower(self::getRight($str_input, $key_len)) == strtolower($prefix)) {
            $result = self::getLeft($str_input, ($str_len - $key_len));
        }

        /* release memory */
        unset($str_input, $str_len, $prefix, $key_len);

        /* return string */
        return trim($result);
    }

    public static function getReadMore($str_input, $number = 20) {
        /* check empty */
        if (empty($str_input)) {
            return NULL;
        }

        /* remove spaces */
        $str_input = trim($str_input);

        /* word list */
        $word_list = explode(' ', $str_input);

        /* word number */
        $word_number = count($word_list);

        /* exception */
        $number = ($number <= 0 || $number >= $word_number) ? $word_number : $number;

        /* result var */
        $result = array();

        /* get content */
        for ($i = 0; $i < $number; $i++) {
            $result[$i] = $word_list[$i];
        }

        /* release memory */
        unset($str_input, $word_list, $word_number, $number);

        /* return string */
        return implode(' ', $result);
    }

    public static function getCapcha($cap_len = 5, $start = 0, $stop = 1000) {
        return substr(md5(rand($start, $stop)), 0, $cap_len);
    }

    public static function getString($str_input) {
        return '"' . $str_input . '"';
    }

    public static function getUnsignString($str_input) {
        /* check empty */
        if (empty($str_input)) {
            return NULL;
        }

        /* remove spaces */
        $str_input = trim($str_input);

        /* remove vietnamemese */
        $str_input = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str_input);
        $str_input = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str_input);
        $str_input = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str_input);
        $str_input = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str_input);
        $str_input = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str_input);
        $str_input = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str_input);
        $str_input = preg_replace("/(đ)/", 'd', $str_input);
        $str_input = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str_input);
        $str_input = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str_input);
        $str_input = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str_input);
        $str_input = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str_input);
        $str_input = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str_input);
        $str_input = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str_input);
        $str_input = preg_replace("/(Đ)/", 'D', $str_input);

        /* return string */
        return $str_input;
    }

    public static function getUtf8String($str_input) {
        /* check empty */
        if (empty($str_input)) {
            return NULL;
        }

        /* remove spaces  */
        $str_input = trim($str_input);

        /* decode input string */
        $output_string = utf8_decode($str_input);

        /* result var */
        $result = NULL;

        /* compare input and output */
        if (strcmp($str_input, utf8_encode($output_string)) == 0) {
            $result = $output_string;
        } else {
            $result = $str_input;
        }

        /* release memory */
        unset($str_input, $output_string);

        /* return */
        return $result;
    }

    public static function getImageFromDocument($str_input) {
        /* check empty */
        if (empty($str_input)) {
            return NULL;
        }

        /* filter */
        preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $str_input, $image);

        /* result var */
        $result = (isset($image['src'])) ? $image['src'] : NULL;

        /* release memory */
        unset($str_input, $image, $document);

        /* return string */
        return $result;
    }

    public static function isSameString($str1, $str2) {
        $flag = 0;
        /* check len and position */
        if (strlen($str2) == strlen($str1) && strpos($str1, $str2) !== FALSE) {
            $flag = 1;
        }
        unset($str1, $str2);
        /* return int */
        return $flag;
    }

}

?>

