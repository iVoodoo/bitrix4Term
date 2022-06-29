<!-- 
// Запрещаем прямой доступ
// if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

// Подключаем модуль информационных блоков
// if(!CModule::IncludeModule("iblock"))
//         return;
// // Получаем список инфоблоков
// $arIBlock=array();
// $rsIBlock = CIBlock::GetList(Array("sort" => "asc"), Array("ACTIVE"=>"Y"));
// while($arr=$rsIBlock->Fetch())
// {
//         $arIBlock[$arr["ID"]] = "[".$arr["ID"]."] ".$arr["NAME"];
// }

// // Массив описаний параметов компонента
// $arComponentParameters = array(
//         // Группы
//         "GROUPS" => array(
//                 "IBLOCK_PARAMS" => array(
//                         "NAME" => GetMessage("IBLOCK_PARAMS_NAME")
//                 )
//         ),
//     // Массив описания параметров
//         "PARAMETERS" => array(
//                 // ID инфоблока
//                 "IBLOCK_ID" => array(
//                         "PARENT" => "IBLOCK_PARAMS",
//                         "NAME" => GetMessage("IBLOCK_ID_NAME"),
//                         "TYPE" => "LIST",
//                         "VALUES" => $arIBlock,
//                         "REFRESH" => "Y"             
//                 ),
                
//                 // Количество элементов инфоблока для выборки
//                 "CHART_TYPE"   =>  array(
//                     "PARENT"    =>  "IBLOCK_PARAMS",
//                     "NAME"      =>  "Тип диаграммы",
//                     "TYPE"      =>  "LIST",
//                     "VALUES"    =>  array(
//                         "pie" =>  "Круговая диаграмма",
//                         "xy_chart" =>  "Столбчатая диаграмма",
//                     ),
//                     "MULTIPLE"  =>  "N",
//                 ),
//    )
// ); -->
<? 
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

if(!CModule::IncludeModule("iblock"))
	return;

$arTypesEx = CIBlockParameters::GetIBlockTypes();

$arIBlocks = Array();
$db_iblock = CIBlock::GetList(Array("SORT"=>"ASC"), Array("SITE_ID"=>$_REQUEST["site"], "TYPE" => ($arCurrentValues["IBLOCK_TYPE"]!="-"?$arCurrentValues["IBLOCK_TYPE"]:"")));
while($arRes = $db_iblock->Fetch())
	$arIBlocks[$arRes["ID"]] = "[".$arRes["ID"]."] ".$arRes["NAME"];


$arTypes = CIBlockParameters::GetIBlockTypes();

 $arIBlocks=array();
$db_iblock = CIBlock::GetList(array("SORT"=>"ASC"), array("SITE_ID"=>$_REQUEST["site"], "TYPE" => ($arCurrentValues["IBLOCK_TYPE"]!="-"?$arCurrentValues["IBLOCK_TYPE"]:"")));
while($arRes = $db_iblock->Fetch())
	$arIBlocks[$arRes["ID"]] = "[".$arRes["ID"]."] ".$arRes["NAME"];

$arProperty_LNS = array();
$rsProp = CIBlockProperty::GetList(array("sort"=>"asc", "name"=>"asc"), Array("ACTIVE"=>"Y", "IBLOCK_ID"=>(isset($arCurrentValues["IBLOCK_ID"])?$arCurrentValues["IBLOCK_ID"]:$arCurrentValues["ID"])));
while ($arr=$rsProp->Fetch())
{
	$arProperty[$arr["CODE"]] = "[".$arr["CODE"]."] ".$arr["NAME"];
	if (in_array($arr["PROPERTY_TYPE"], array("L", "N", "S")))
	{
		$arProperty_LNS[$arr["CODE"]] = "[".$arr["CODE"]."] ".$arr["NAME"];
	}
}


$arComponentParameters = array(
	"GROUPS" => array(
	),
	"PARAMETERS"  =>  array(
		"IBLOCK_TYPE"  =>  Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("BN_P_IBLOCK_TYPE"),
			"TYPE" => "LIST",
			"VALUES" => $arTypesEx,
			"DEFAULT" => "news",
			"REFRESH" => "Y",
		),
		"IBLOCKS"  =>  Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("BN_P_IBLOCK"),
			"TYPE" => "LIST",
			"VALUES" => $arIBlocks,
			"DEFAULT" => '',
			"MULTIPLE" => "N",
		),
        "CHART_TYPE"   =>  array(
            "PARENT"    =>  "IBLOCK_PARAMS",
            "NAME"      =>  GetMessage("CHART_TYPE"),
            "TYPE"      =>  "LIST",
            "VALUES"    =>  array(
                "pie" =>  "Круговая диаграмма",
                "xy_chart" =>  "Столбчатая диаграмма",
            ),
            "MULTIPLE"  =>  "N",
        ),
		
	),
);
?>