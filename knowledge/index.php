<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("class", "consultation");
$APPLICATION->SetTitle("Консультация on-line");
?> 
<p></p>
 
<p></p>
 <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list",
	"online",
	Array(
		"IBLOCK_TYPE" => "knowledge",
		"IBLOCK_ID" => "19",
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_CODE" => "",
		"SECTION_URL" => "",
		"COUNT_ELEMENTS" => "N",
		"TOP_DEPTH" => "1",
		"DISPLAY_PANEL" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600"
	)
);?> 
<script id="bx24_form_inline" data-skip-moving="true">
        (function(w,d,u,b){w['Bitrix24FormObject']=b;w[b] = w[b] || function(){arguments[0].ref=u;
                (w[b].forms=w[b].forms||[]).push(arguments[0])};
                if(w[b]['forms']) return;
                s=d.createElement('script');r=1*new Date();s.async=1;s.src=u+'?'+r;
                h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
        })(window,document,'https://alpwind.bitrix24.ru/bitrix/js/crm/form_loader.js','b24form');

        b24form({"id":"6","lang":"ru","sec":"05d6bt","type":"inline"});
</script><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>