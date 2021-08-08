<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php 
// возвращает имя текущей страницы вместе с переданными параметрами
function GetPageName()
{ 
  try {
    $s = explode('/', $_SERVER['REQUEST_URI']);
    return $s[count($s) - 1];
  } catch ( ErrorException $e ) {
    return "";
  }
}

function MyIif($expr, $s1, $s2)
{
  if ($expr)
    return $s1;
  else
    return $s2;
}
// $cur_page - текущая страница, $item_page - та страница, для которой выводится пункт меню
// если $caption пустой, он устанавливается таким же как $caption
function PrintMenuItem($cur_page, $item_page, $caption, $title)
{
  if ($cur_page == $item_page)
    echo "<td>$caption</td>";
  else
  {
    $t_str = MyIif($title <> "", " title=\"".$title."\"", "");
    echo "<td><a href=\"$item_page\"$t_str>$caption</a></td>";
  }
}

function PrintPageTitle($cur_page, $item_page, $title)
{
  if ($cur_page == $item_page)
    echo "$title";
  else
    echo "";
}
$page = GetPageName();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title><?php
      PrintPageTitle($page, "index.php", "Список тем и правила работы");
      PrintPageTitle($page, "primer.php", "Примеры работ", "На странице представлены примеры работ");
      PrintPageTitle($page, "prices.php", "Цены");
      PrintPageTitle($page, "lit.php", "Учебная литература");
      PrintPageTitle($page, "rasp.php", "Расписание занятий");
      PrintPageTitle($page, "contacts.php", "Контакты");
    ?>
    </title>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
	<meta name="description" content="Решение задач по высшей математике, услуги репетитора. Опыт больше 6 лет.">
	<meta name="keywords" content="высшая математика, отчеты, дипломные, курсовые, рефераты, аналитическая геометрия, линейная алгебра, пределы, производные, интегралы, дифуры, дифференциальные уравнения, теория поля, ряды, операционное исчисление, симплекс-метод, транспортная задача, математические модели , теория вероятности и статистика, математическая логика, вычислительная математика, дискретная математика, уравнения математической физики">
    <link rel="stylesheet" href="style.css" type="text/css" />	
</head>
<body>
<table class="main" align="center">
<tr><td>
	<div class="headpage"><center>Выполнение работ по высшей математике на Школьной!</div><br />
	<table class="inside" align="center">
	<tr align="center">
    <?php
      PrintMenuItem($page, "index.php", "Список тем и<br />правила работы", "");
      PrintMenuItem($page, "primer.php", "Примеры работ", "На странице представлены примеры работ");
      PrintMenuItem($page, "prices.php", "Цены", "");
      PrintMenuItem($page, "lit.php", "Учебная литература", "");
      PrintMenuItem($page, "rasp.php", "Расписание", "");      
      PrintMenuItem($page, "contacts.php", "Контакты", "");
    ?>
	</tr>
	</table>
</td></tr>
