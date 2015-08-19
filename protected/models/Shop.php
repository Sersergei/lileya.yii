<?php
class Shop
{

    public static function GetCartContent()
    {
        if (is_string(Yii::app()->user->getState('cart')))
            return json_decode(Yii::app()->user->getState('cart'), true);
        else
            return Yii::app()->user->getState('cart');
    }
    public static function setCartContent($cart)
    {
        return Yii::app()->user->setState('cart', json_encode($cart));
    }
    public static function t($string, $params = array())
    {
        return Yii::t($string, $params);
    }
    public static function setFlash($message)
    {
        Yii::app()->user->setFlash('success', $message);
    }

    public static function getPriceTotal()
    {
        $price_total = 0;
        foreach (Shop::getCartContent() as $product) {
            $price_total += ($product['count'] * $product['price']);
        }
        return $price_total;
    }
    public static function getTotal()
    {
        $total = 0;
        foreach (Shop::getCartContent() as $product) {
            $total += $product['count'];
        }
        return $total;
    }

}
