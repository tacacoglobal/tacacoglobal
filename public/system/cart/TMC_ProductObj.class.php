<?php

class TMC_ProductObj {

    private $product_id;
    private $product_name;
    private $product_price;
    private $product_number;
    private $product_total;
    private $product_image;

    public function getProductId() {
        return $this->product_id;
    }

    public function getProductName() {
        return $this->product_name;
    }

    public function getProductPrice() {
        return $this->product_price;
    }

    public function getProductNumber() {
        return $this->product_number;
    }

    public function setProductNumber($product_number) {
        $this->product_number = $product_number;
    }

    public function getProductTotal() {
        return $this->product_total;
    }

    public function setProductTotal($product_price, $product_number) {
        $this->product_total = $product_number * $product_price;
    }

    public function getProductImage() {
        return $this->product_image;
    }

    public function __construct($product_id, $product_name, $product_price, $product_number = 1, $product_image = NULL) {
        $this->product_id = $product_id;
        $this->product_name = $product_name;
        $this->product_number = $product_number;
        $this->product_price = $product_price;
        $this->product_total = $this->product_number * $this->product_price;
        $this->product_image = $product_image;
    }

}

?>