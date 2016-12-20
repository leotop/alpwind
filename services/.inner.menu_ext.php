<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

global $APPLICATION;

$aMenuLinksExt = $APPLICATION->IncludeComponent(
	"campell:menu.sections",
	"",
	Array(
		"IS_SEF" => "Y",
		"SEF_BASE_URL" => "/services/",
		"SECTION_PAGE_URL" => "#IBLOCK_CODE#/#SECTION_CODE#/",
		"DETAIL_PAGE_URL" => "#IBLOCK_CODE#/#SECTION_CODE#/#ELEMENT_ID#.php",
		"IBLOCK_TYPE" => "services",
		"DEPTH_LEVEL" => "2",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600"
	),
false
);
	
$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);
?>