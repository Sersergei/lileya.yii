<?php
/**
 * Created by PhpStorm.
 * User: Сергей
 * Date: 28.09.2015
 * Time: 15:30
 */
class Notifier{
    function zakaz($event){
        $text="Здравствуйте, ".$event->user->username.". Спасибо, что выбрали Наш интернет-магазин http://nizna-lileya.esy.es.
    Ваш заказ № ".$event-> zakaz->id." принят в обработку.
    В течение дня Мы с Вами свяжемся и договоримся о способе доставки товара. ".$event->user->flash;
    mail($event->user->email,"Новый заказ ",$text);
        $text="В твоем магазине новый заказ № ".$event-> zakaz->id.
            "Заказал ".$event->user->username." вяжись с ним по тедефону ".$event->user->phone;
      mail('kuzmenko.kseniya@gmail.com',"Новый заказ ",$text);
    }
}