<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("������ ����� ��������");
?>
<p>�������������� ������ &laquo;���������� �����&raquo; �������� 2002 ����. �� ����������� ���� ������ ��������� ���������� �����, ����������� ���������� � ��������� ��������� ������ �� ��������� ������������ �����������: �������������, ������, ������������, ����� � ������������� ����. �� ������ ����������� ������, ��� ����������� �������, ��� � �������, ������������ �� ����� ������ �����������.</p>
 <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.main",
	"services",
	Array(
		"IBLOCK_TYPE" => "services",
		"IBLOCK_URL" => "",
		"DISPLAY_PANEL" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>