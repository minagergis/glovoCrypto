<?php
require_once('core/autoload.php');


class TradesController
{

    private $Product;
    private $Exchange;

    function __construct()
    {
        $this->Product = new Product();
        $this->Exchange = new Exchange();

    }

    /**
     * This function is to get the common products across all the available Exchanges
     * and present it into the ticker view
     * @route /products
     * @return ticker view
     */
    public function getCommonProductsFromExchange()
    {
        $products = [];
        $arrayOfExchanges = $this->Exchange->getAvailableExchanges();
        if (isset($arrayOfExchanges) and isset($arrayOfExchanges[0])) {

            foreach ($arrayOfExchanges as $exchange) {
                $products = array_merge($products, $this->Exchange->getAllProductfromExchange($exchange));
            }

            $count = array_count_values($products);
            $commonProducts = array_keys($count, count($arrayOfExchanges));
            if (isset($commonProducts[0])) {
                //var_dump( $commonProducts);
                include ('core/Resources/tikers.view.php');
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    /**
     * This function is to get the price of certain product across the 3 available Exchanges
     * @route /ticker/PRODUCTID
     * @param $productID
     * @return bool|string
     */
    public function getPricesForProductFromExchange($productID)
    {
        $arrayOfExchanges = $this->Exchange->getAvailableExchanges();
        if (isset($arrayOfExchanges) and isset($productID)) {
            foreach ($arrayOfExchanges as $exchange) {
                $productDetails = json_decode($this->Product->getProductDetails($productID, $exchange));
                $productData[$exchange] = isset($productDetails->price) ? strval($productDetails->price) : '0';
            }
            if (isset($productData)) {
                return json_encode($productData);
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    /**
     * This function to view the simple welcoming page
     * @route /
     * @return index view
     */
    public function getIndex(){
        include ('core/Resources/index.view.php');
    }


}