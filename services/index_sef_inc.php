<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"left",
	Array(
		"ROOT_MENU_TYPE" => "inner", 
		"MAX_LEVEL" => "2", 
		"CHILD_MENU_TYPE" => "inner", 
		"USE_EXT" => "Y", 
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => Array()
	)
);?> 


    <?$APPLICATION->IncludeComponent(
			"bitrix:menu",
			"spec",
			Array(
				"ROOT_MENU_TYPE" => "spec", 
				"MAX_LEVEL" => "1", 
				"MENU_CACHE_TYPE" => "A",
				"MENU_CACHE_TIME" => "3600",
				"MENU_CACHE_USE_GROUPS" => "Y",
				"MENU_CACHE_GET_VARS" => Array()
			)
		);?> 
