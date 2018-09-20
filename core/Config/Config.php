<?php

/**
 * Config File :
 * for defining the constants like the API base url and the tokens
 */

define('MoneedaToken',"eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJlbWFpbCI6ImRldkBnbG92b2FwcC5jb20iLCJpZCI6IjVhNTcyZGEyNTM4OWMzNzZiZWZlNjY1NCIsImlhdCI6MTUxNTY2MjgyMn0.a6homMOumqLBxwfX9nOwbBaxmSx-srkS8dISSPCPPYE");
define('ExchangesProductspath',"https://api.moneeda.com/api/exchanges/[EXCHANGE]/products");
define('ExchangesProductItemsspath',"https://api.moneeda.com/api/exchanges/[EXCHANGE]/ticker?product=[MY-PRODUCT]");