<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("404 Ошибка или ''Страница не найдена''");?>

<div class="rounded information">
	<div class="rounded-i">
	<p>К сожалению, страницы, к которой Вы обратились, не нашлось на сайте. Это могло произойти по следующим причинам:</p>
	<ul>
	    <li>Вам могли прислать неверную ссылку на эту страницу.</li>
	    <li>Вы могли случайно не верно набрать адрес этой страницы.</li>
	    <li>Возможно данная страница была переименована, перемещена или удалена.</li>
	</ul>
	</div>
</div>
<?$APPLICATION->IncludeComponent("bitrix:main.map", ".default", Array(
	"LEVEL"	=>	"3",
	"COL_NUM"	=>	"2",
	"SHOW_DESCRIPTION"	=>	"Y",
	"SET_TITLE"	=>	"Y",
	"CACHE_TIME"	=>	"3600"
	)
);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>