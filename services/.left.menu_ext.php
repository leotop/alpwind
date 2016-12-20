<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

global $APPLICATION;

$aMenuLinksExt = $APPLICATION->IncludeComponent(
	"campell:menu.iblock",
	"",
	Array(
		"ID" => $_REQUEST["ELEMENT_ID"], 
		"IBLOCK_TYPE" => "services", 
		"IBLOCK_URL" => "/services/#ID#/", 
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"DEPTH_LEVEL" => "1",
	)
);
	
$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);
?>