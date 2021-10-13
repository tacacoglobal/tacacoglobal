<?php

class TMC_Datetime {

    public static function getNow($type = 0, $seperate = '/') {
        /* result var */
        $result = NULL;

        /* export */
        switch ($type) {
            case 0:
                $result = date('d' . $seperate . 'm' . $seperate . 'Y');
                break;

            case 1:
                $result = date('Y' . $seperate . 'm' . $seperate . 'd');
                break;
            case 2:
                $result = date('m' . $seperate . 'd' . $seperate . 'Y');
                break;
        }

        /* release memory */
        unset($type, $seperate);

        /* return string */
        return $result;
    }

    /*
     * input: string
     * output: bool
     * 0 is first is equal second day
     * 1 is first larger than second day
     * -1 is first smaller than second day
     */

    public static function cmp2days($first_day, $second_day) {
        /* result var 0 is equal, 1 is first day larger than second day, -1 reverse 1 */
        $result = NULL;

        /* calc time */
        $distance = strtotime($first_day) - strtotime($second_day);

        if ($distance == 0) {
            $result = 0;
        } else if ($distance > 0) {
            $result = 1;
        } else {
            $result = -1;
        }

        /* release memory */
        unset($first_day, $second_day, $distance);

        /* return int */
        return $result;
    }

    /*
     * input: int
     */

    public static function getPastTime($time = 86400) {
        /* default get yesterday */
        return date('d/m/Y', time() - $time);
    }

    /*
     * input: string
     * output: true is date, false is not
     */

    public static function isDate($date) {
        /* get seperate char */
        $pos1 = strpos($date, '/');
        $pos = ($pos1 !== FALSE) ? $pos1 : strpos($date, '-');

        /* not date */
        $flag = FALSE;

        /* not date */
        if ($pos === FALSE) {
            return $flag;
        }

        /* convert string to be an array */
        $parts = explode($date[$pos], $date);

        if (count($parts) == 3) {
            /* is date */
            $flag = checkdate($parts[0], $parts[1], $parts[2]);
        }

        /* return int */
        return $flag;
    }

    public static function getDistance2Date($date1, $date2) {
        $result = abs(strtotime($date1) - strtotime($date2));
        return floor($result / (24 * 60 * 60));
    }

}

?>