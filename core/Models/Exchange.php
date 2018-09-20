<?php

require_once('core/autoload.php');

class Exchange
{

    private $availableExchanges;
    private $productsBag;

    function __construct()
    {
        $this->availableExchanges = array('BNB', 'BTX', 'BFX');
        $this->productsBag = [];

    }

    /**
     * This function is to request mooneda API to get all the products in cetrain Exchange
     * @param $exchange
     * @return array|bool
     */
    public function getAllProductfromExchange($exchange)
    {
        if (in_array($exchange, $this->availableExchanges)) {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_HTTPHEADER, array("Authorization:Bearer " . MoneedaToken));
            curl_setopt($ch, CURLOPT_URL, str_replace("[EXCHANGE]", $exchange, ExchangesProductspath));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $data = curl_exec($ch);
            curl_close($ch);
            if (isset($data)) {
                $this->setProductsBag(array_column(json_decode($data), 'id'));
                return $this->getProductsBag();
            } else {
                return false;
            }
        } else {
            return false;
        }

    }

    /**
     * productsBag setter funtion
     * @param array $productsBag
     */
    public function setProductsBag($productsBag)
    {
        $this->productsBag = $productsBag;
    }

    /**
     * productsBag getter funtion
     * @return array
     */
    public function getProductsBag()
    {
        return $this->productsBag;
    }

    /**
     * availableExchanges getter funtion
     * @return array
     */
    public function getAvailableExchanges()
    {
        return $this->availableExchanges;
    }
}