<?php

class TMC_Request {

    public static function set($name, $value, $hash = 'default') {
        /* convert to upper */
        $hash = strtoupper($hash);

        /* check hash */
        switch ($hash) {
            case 'GET':
                $input = &$_GET;
                break;
            case 'POST':
                $input = &$_POST;
                break;
            case 'FILES':
                $input = &$_FILES;
                break;
            case 'COOKIE':
                $input = &$_COOKIE;
                break;
            case 'ENV':
                $input = &$_ENV;
                break;
            case 'SERVER':
                $input = &$_SERVER;
                break;
            default:
                $input = &$_REQUEST;
                $hash = 'REQUEST';
                break;
        }

        /* set value */
        $input[$name] = empty($value) ? NULL : $value;

        /* release memory */
        unset($name, $value, $hash);
    }

    public static function get($name, $hash = 'default') {
        /* convert to upper */
        $hash = strtoupper($hash);

        /* default is get method */
        if ($hash === 'METHOD') {
            $hash = strtoupper($_SERVER['REQUEST_METHOD']);
        }

        /* check hash */
        switch ($hash) {
            case 'GET':
                $input = &$_GET;
                break;
            case 'POST':
                $input = &$_POST;
                break;
            case 'FILES':
                $input = &$_FILES;
                break;
            case 'COOKIE':
                $input = &$_COOKIE;
                break;
            case 'ENV':
                $input = &$_ENV;
                break;
            case 'SERVER':
                $input = &$_SERVER;
                break;
            default:
                $input = &$_REQUEST;
                $hash = 'REQUEST';
                break;
        }

        /* result */
        $result = (isset($input[$name]) && !empty($input[$name])) ? $input[$name] : NULL;

        /* release memory */
        unset($input, $name, $hash);

        /* return */
        return $result;
    }

}

?>