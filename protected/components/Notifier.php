<?php
/**
 * Created by PhpStorm.
 * User: ������
 * Date: 28.09.2015
 * Time: 15:30
 */
class Notifier{
    function zakaz($event){
        $text="������������,".$event->user->username.".�������, ��� ������� ��� ��������-������� Nizna-Lileya.com.ua.
    ��� ����� �".$event-> zakaz->id." ������ � ���������.
    � ������� ��� �� � ���� �������� � ����������� � ������� �������� ������.".$event->user->flash;
    mail($event->user->email,"����� ����� ",$text);
        $text="� ����� �������� ����� �����".$event-> zakaz->id.
            "�������".$event->user->username."������ � ��� �� ��������".$event->user->phone;
      mail('kuzmenko.kseniya@gmail.com',"����� ����� ",$text);
    }
}