<?php
/**
 * Created by PhpStorm.
 * User: Сергей
 * Date: 28.09.2015
 * Time: 15:30
 */
class Notifier{
    function zakaz($event){
        $text="Здравствуйте,".$event->user->username.".Спасибо, что выбрали Наш интернет-магазин Nizna-Lileya.com.ua.
    Ваш заказ №".$event-> zakaz->id." принят в обработку.
    В течение дня Мы с Вами свяжемся и договоримся о способе доставки товара.".$event->user->flash;
    mail($event->user->email,"Новый заказ ",$text);
    }


}