<?php

class Product
{
    public $product_name;
    public $product_brand;
    public $product_image;
    public $expiry_date;
    public $status=true;

    public function notFound(){
        $this->status=false;
    }
}