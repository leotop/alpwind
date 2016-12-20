<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Услуги нашей компании");
?>
<p>Консалтинговая группа &laquo;Альпийский ветер&raquo; основана 2002 году. На сегодняшний день Группа оказываем физическим лицам, холдинговым структурам и отдельным компаниям услуги по следующим направлениям консалтинга: юриспруденция, оценка, недвижимость, аудит и бухгалтерский учет. Мы решаем комплексные задачи, как работающего бизнеса, так и бизнеса, находящегося на этапе своего становления.</p>
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