<?php
//hello binary world

// обработка POST запроса
// если ответ верер - устанавливаем куки и рефреш страницы
// если ответ НЕ верен - выводим сообщение об ошибке

// отображаем страницу с учетом текущих куки если куки не установлены - устанавливаем на 001

$a = new main();
if ($a->step == '007') header("answer: 404 go pizzza");

if (isset($_COOKIE['step']) AND ($_COOKIE['step'] == '001') AND (trim($_POST['answer']) == 'hello binary world')) {
    $a->set_step('002');
} else if (isset($_COOKIE['step']) AND ($_COOKIE['step'] == '002') AND (trim($_POST['answer']) == 'hidden block')) {
    $a->set_step('003');
} else if (isset($_COOKIE['step']) AND ($_COOKIE['step'] == '003') AND (trim($_POST['answer']) == 'flex')) {
    $a->set_step('004');
} else if (isset($_COOKIE['step']) AND ($_COOKIE['step'] == '004') AND (trim($_POST['answer']) == 'pixel')) {
    $a->set_step('005');
} else if (isset($_COOKIE['step']) AND ($_COOKIE['step'] == '005') AND (trim($_POST['answer']) == 'so many clicks')) {
    $a->set_step('006');
} else if (isset($_COOKIE['step']) AND ($_COOKIE['step'] == '006') AND (trim($_POST['answer']) == 'cooookies')) {
    $a->set_step('007');
} else if (isset($_COOKIE['step']) AND ($_COOKIE['step'] == '007') AND (trim($_POST['answer']) == '404 go pizzza')) {
    $a->set_step('008');
    //header("Location: "); exit;
} else if (isset($_POST['answer'])) {
    $str = '<div class="alert">
                Ответ не верен!
            </div>';
}


include('header.php');
$a->get_html_carrent_step();
include('footer.php');


class main
{
    public $step;

    public function __construct()
    {
        if (!isset($_COOKIE['step'])) {
            $this->set_step('001');
        } else {
            $this->step = $_COOKIE['step'];
        }
    }

    public function set_step($step)
    {
        $this->step = $step;
        setcookie("step", $step);
    }

    public function get_html_carrent_step()
    {
        include($this->step . ".php");
    }


}



