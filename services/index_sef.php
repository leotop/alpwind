<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");
$APPLICATION->SetPageProperty("class", "main_push");
?><?
if(CModule::IncludeModule("iblock"))
{
$CODE = explode("/", $APPLICATION->GetCurDir());
$rsIBlock = CIBlock::GetList(array(), array("CODE"=>str_replace("/", "", $CODE[2]))); 
$arIBlock = $rsIBlock->GetNext(); 
}
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:catalog",
	"services",
	Array(
		"AJAX_MODE" => "N",
		"SEF_MODE" => "Y",
		"IBLOCK_TYPE" => "services",
		"IBLOCK_ID" => $arIBlock["ID"],
		"USE_FILTER" => "N",
		"USE_COMPARE" => "N",
		"SHOW_TOP_ELEMENTS" => "N",
		"PAGE_ELEMENT_COUNT" => "30",
		"LINE_ELEMENT_COUNT" => "3",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_ORDER" => "asc",
		"LIST_PROPERTY_CODE" => Array("MENU"),
		"INCLUDE_SUBSECTIONS" => "Y",
		"LIST_META_KEYWORDS" => "UF_KEYWORDS",
		"LIST_META_DESCRIPTION" => "UF_DESCRIPTION",
		"LIST_BROWSER_TITLE" => "UF_TITLE",
		"DETAIL_PROPERTY_CODE" => Array("MENU"),
		"DETAIL_META_KEYWORDS" => "-",
		"DETAIL_META_DESCRIPTION" => "-",
		"DETAIL_BROWSER_TITLE" => "TITLE",
		"BASKET_URL" => "/personal/basket.php",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"DISPLAY_PANEL" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"CACHE_FILTER" => "N",
		"SET_TITLE" => "Y",
		"SET_STATUS_404" => "N",
		"PRICE_CODE" => Array(),
		"USE_PRICE_COUNT" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"PRICE_VAT_INCLUDE" => "Y",
		"PRICE_VAT_SHOW_VALUE" => "N",
		"LINK_IBLOCK_TYPE" => "",
		"LINK_IBLOCK_ID" => "",
		"LINK_PROPERTY_SID" => "",
		"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Товары",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"AJAX_OPTION_SHADOW" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"AJAX_OPTION_HISTORY" => "N",
		"SEF_FOLDER" => "/services/{$arIBlock["CODE"]}/",
		"SEF_URL_TEMPLATES" => Array(
			"sections" => "index.php",
			"section" => "#SECTION_CODE#/",
			"element" => "#SECTION_CODE#/#ELEMENT_ID#.php",
			"compare" => "compare.php?action=#ACTION_CODE#"
		),
		"VARIABLE_ALIASES" => Array(
			"sections" => Array(),
			"section" => Array(),
			"element" => Array(),
			"compare" => Array(
				"ACTION_CODE" => "action"
			),
		)
	),
false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>