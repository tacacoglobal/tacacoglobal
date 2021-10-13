<?php

class TMC_Cart {

    private static $cart_name;

    public static function create_cart($cart_name = 'block_cart') {
        /* set name */
        self::$cart_name = $cart_name;

        /* create cart */
        $_SESSION[self::$cart_name] = array();

        /* release memory */
        unset($cart_name);
    }

    public static function get_cart() {
        return $_SESSION[self::$cart_name];
    }

    public static function add_item(TMC_ProductObj $product) {
        //update product
        if (isset($_SESSION[self::$cart_name][$product->getProductId()])) {
            //edit number and total
            $number = $_SESSION[self::$cart_name][$product->getProductId()]->getProductNumber() + 1;
            $price = $_SESSION[self::$cart_name][$product->getProductId()]->getProductPrice();
            $_SESSION[self::$cart_name][$product->getProductId()]->setProductNumber($number);
            $_SESSION[self::$cart_name][$product->getProductId()]->setProductTotal($number, $price);
        } else {
            //new product
            $_SESSION[self::$cart_name][$product->getProductId()] = $product;
        }

        /* release memory */
        unset($product);
    }

    public static function edit_item(TMC_ProductObj $product) {
        /* check empty */
        if (!empty($_SESSION[self::$cart_name])) {
            if (isset($_SESSION[self::$cart_name][$product->getProductId()])) {
                //edit number and total
                $_SESSION[self::$cart_name][$product->getProductId()]->setProductNumber($product->getProductNumber());
                $number = $_SESSION[self::$cart_name][$product->getProductId()]->getProductNumber();
                $price = $_SESSION[self::$cart_name][$product->getProductId()]->getProductPrice();
                $_SESSION[self::$cart_name][$product->getProductId()]->setProductTotal($number, $price);
            }

            /* release memory */
            unset($product);
        }
    }

    public static function delete_item(TMC_ProductObj $product) {
        /* check empty */
        if (!empty($_SESSION[self::$cart_name])) {
            //delete
            if (isset($_SESSION[self::$cart_name][$product->getProductId()])) {
                unset($_SESSION[self::$cart_name][$product->getProductId()]);
            }

            /* release memory */
            unset($product);
        }
    }

    public static function get_total() {
        /* total price */
        $total = 0;

        $cart = self::get_cart();

        foreach ($cart as $id => $product) {
            $total += $product->getProductTotal();
        }

        /* return */
        return $total;
    }

    public static function delete_cart() {
        /* release memory */
        unset($_SESSION[self::$cart_name]);
    }

}

?>