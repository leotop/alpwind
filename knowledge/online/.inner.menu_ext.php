<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

global $APPLICATION;

$aMenuLinksExt = $APPLICATION->IncludeComponent(
	"bitrix:menu.sections",
	"",
	Array(
		"IBLOCK_ID" => "19",
		"IS_SEF" => "Y",
		"SEF_BASE_URL" => "/knowledge/online/",
		"SECTION_PAGE_URL" => "#SECTION_CODE#/",
		"DETAIL_PAGE_URL" => "#SECTION_CODE#/#ELEMENT_ID#.php",
		"IBLOCK_TYPE" => "services",
		"DEPTH_LEVEL" => "1",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600"
	)
);
	
$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);
?>