<?php

/**
 * Created by PhpStorm.
 * User: Сергей
 * Date: 27.09.2015
 * Time: 12:57
 */
class ZakazForm extends CFormModel
{
    public $email;
    public $phone;
    public $username;


    public function rules(){
        return array(
            array('username', 'required'),
        );
    }

}