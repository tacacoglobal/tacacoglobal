<?php

class TMC_Form {

    public static function beginForm($attribute = array(), $enctype = FALSE) {
        $enctype = ($enctype == TRUE) ? 'multipart/form-data' : NULL;
        echo '<form ', self::putControl($attribute), ' enctype="', $enctype, '">';
    }

    public static function endForm() {
        echo '</form>';
    }

    public static function getLink($text = 'link 1', $link = '#', $attribute = array()) {
        echo '<a href="', $link, '"', self::putControl($attribute), '>', $text, '</a>';
    }

    public static function getInput($attribute = array()) {
        echo '<input ', self::putControl($attribute), ' />';
    }

    public static function getLabel($label_text, $attribute = array()) {
        echo '<label', self::putControl($attribute), '>', $label_text, '</label>';
    }

    public static function getContent($attribute = array(), $value = null) {
        echo '<textarea ', self::putControl($attribute), '>';
        echo '', $value, '</textarea>';
    }

    public static function getSelectList($attr = array(), $data = array()) {
        $str = '<select ' . self::putControl($attr) . '>';
        $str .= self::putContentInSelectList($data);
        $str .= '</select>';
        echo $str;
    }

    public static function putContentInSelectList($attribute = array()) {
        /* check empty */
        if (empty($attribute)) {
            return NULL;
        }

        /* result var */
        $result = '';

        /* current focus */
        $selected = (isset($attribute['selected'])) ? $attribute['selected'] : NULL;

        if (isset($attribute['data_source'])) {
            foreach ($attribute['data_source'] as $item) {
                if (is_array($item)) {
                    $str_focus = ($item[$attribute['value']] == $selected) ? 'selected' : NULL;
                    $str_show = NULL;
                    if (is_array($attribute['text'])) {
                        $rs = array();
                        foreach ($attribute['text'] as $index => $sub_text) {
                            $rs[] = $item[$sub_text];
                        }
                        $str_show = implode(' | ', $rs);
                    } else {
                        $str_show = $item[$attribute['text']];
                    }
                    $result .= '<option value="' . $item[$attribute['value']] . '" ' . $str_focus . '>' . $str_show . '</option>';
                } else {
                    $str_focus = ($item->$attribute['value'] == $selected) ? 'selected' : NULL;
                    $str_show = NULL;
                    if (is_array($attribute['text'])) {
                        $rs = array();
                        foreach ($attribute['text'] as $index => $sub_text) {
                            $rs[] = $item->$attribute[$sub_text];
                        }
                        $str_show = implode(' | ', $rs);
                    } else {
                        $str_show = $item->$attribute['text'];
                    }
                    $result .= '<option value="' . $item->$attribute['value'] . '" ' . $str_focus . '>' . $str_show . '</option>';
                }
            }
        }

        /* release memory */
        unset($attribute, $selected, $item, $str_focus, $str_show, $rs);

        /* return a string */
        return $result;
    }

    public static function putControl($property = array()) {
        /* exception */
        if (empty($property)) {
            return NULL;
        }

        /* result var */
        $result = array();
        /* draw control attribute */
        foreach ($property as $attr => $val) {
            $result[] = $attr . '="' . $val . '" ';
        }

        /* convert array to string */
        $result = implode(' ', $result);

        /* release memory */
        unset($property, $attr, $val);

        /* return */
        return $result;
    }

}

?>