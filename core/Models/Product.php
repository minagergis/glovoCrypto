<?php

require_once('core/autoload.php');

class Product
{

    private $availableExchanges;
    private $productName;
    private $productPrice;


    function __construct()
    {
        $this->productName = '';
        $this->productPrice = '';
        $this->availableExchanges = array('BNB', 'BTX', 'BFX');
    }


    /**
     * Product Name Setter
     * @param string $productName
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;
    }

    /**
     * Product Price Setter
     * @param string $productPrice
     */
    public function setProductPrice($productPrice)
    {
        $this->productPrice = $productPrice;
    }

    /**
     * Product Name Getter
     * @return mixed
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * Product Price Getter
     * @return string
     */
    public function getProductPrice()
    {
        return $this->productPrice;
    }

    /**
     * This function is to request mooneda API to get the product details
     * @param $productID
     * @param $exchange
     * @return bool|mixed
     */
    public function getProductDetails($productID, $exchange)
    {

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Authorization:Bearer " . MoneedaToken));
        curl_setopt($ch, CURLOPT_URL, strtr(ExchangesProductItemsspath, ["[EXCHANGE]" => $exchange, "[MY-PRODUCT]" => $productID]));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $data = curl_exec($ch);
        curl_close($ch);
        if (isset($data)) {

            return $data;
        } else {
            return false;
        }


    }


}