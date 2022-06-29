<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
	"NAME" => GetMessage("IBLOCK_CHART_NAME"),
	"DESCRIPTION" => GetMessage("IBLOCK_CHART_DESCRIPTION"),
	// "ICON" => "/images/news_all.gif",
	"COMPLEX" => "Y",
	"PATH" => array(
		"ID" => "content",
		"CHILD" => array(
			"ID" => "chart",
			"NAME" => GetMessage("T_IBLOCK_DESC_CHART"),
			"SORT" => 10,
			// "CHILD" => array(
			// 	"ID" => "news_cmpx",
			// ),
		),
	),
);

?>