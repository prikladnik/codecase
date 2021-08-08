<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php 
// ���������� ��� ������� �������� ������ � ����������� �����������
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
// $cur_page - ������� ��������, $item_page - �� ��������, ��� ������� ��������� ����� ����
// ���� $caption ������, �� ��������������� ����� �� ��� $caption
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
      PrintPageTitle($page, "index.php", "������ ��� � ������� ������");
      PrintPageTitle($page, "primer.php", "������� �����", "�� �������� ������������ ������� �����");
      PrintPageTitle($page, "prices.php", "����");
      PrintPageTitle($page, "lit.php", "������� ����������");
      PrintPageTitle($page, "rasp.php", "���������� �������");
      PrintPageTitle($page, "contacts.php", "��������");
    ?>
    </title>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
	<meta name="description" content="������� ����� �� ������ ����������, ������ ����������. ���� ������ 6 ���.">
	<meta name="keywords" content="������ ����������, ������, ���������, ��������, ��������, ������������� ���������, �������� �������, �������, �����������, ���������, ������, ���������������� ���������, ������ ����, ����, ������������ ����������, ��������-�����, ������������ ������, �������������� ������ , ������ ����������� � ����������, �������������� ������, �������������� ����������, ���������� ����������, ��������� �������������� ������">
    <link rel="stylesheet" href="style.css" type="text/css" />	
</head>
<body>
<table class="main" align="center">
<tr><td>
	<div class="headpage"><center>���������� ����� �� ������ ���������� �� ��������!</div><br />
	<table class="inside" align="center">
	<tr align="center">
    <?php
      PrintMenuItem($page, "index.php", "������ ��� �<br />������� ������", "");
      PrintMenuItem($page, "primer.php", "������� �����", "�� �������� ������������ ������� �����");
      PrintMenuItem($page, "prices.php", "����", "");
      PrintMenuItem($page, "lit.php", "������� ����������", "");
      PrintMenuItem($page, "rasp.php", "����������", "");      
      PrintMenuItem($page, "contacts.php", "��������", "");
    ?>
	</tr>
	</table>
</td></tr>
