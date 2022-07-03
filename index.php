<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords_inner", "N");
$APPLICATION->SetPageProperty("title", "VR LIFE");
// $APPLICATION->AddChainItem($APPLICATION->GetTitle(), $APPLICATION->GetCurDir());
$APPLICATION->SetTitle("VR LIFE");
// CJSCore::Init(['amcharts']);
?><h2>О чем сайт</h2>
<p>
	 Сайт содержит информацию о VR. На сайте можно узнать информацию об истории виртуальной реальности, областях её применения, а также VR устройствах. Помимо сайт содержит новостной раздел и раздел со статьями.
</p>
<h2>Новости</h2>
<p>
	 На сайте также есть новостной раздел, где публикуется информация о новинках в индустрии виртуальной реальности.
</p>
<h2>Статьи</h2>
<p>
	 Раздел со статьями содержит различные статьи на тему VR, где представлены интересные темы из мира VR.
</p>
<p>
	 <?$APPLICATION->IncludeComponent(
	"chart", 
	".default", 
	array(
		"CHART_TYPE" => "pie",
		"IBLOCKS" => "9",
		"IBLOCK_TYPE" => "statsVr",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?><br>
</p><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>