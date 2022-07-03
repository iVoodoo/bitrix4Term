<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
	"NAME" => GetMessage("IBLOCK_CHART_NAME"),
	"DESCRIPTION" => GetMessage("IBLOCK_CHART_DESCRIPTION"),
	"PATH" => array(
		"ID" => "content",
		"CHILD" => array(
			"ID" => "chart",
			"NAME" => GetMessage("T_IBLOCK_DESC_CHART"),
		),
	),
);
?>