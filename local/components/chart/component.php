<!--  <?
// if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

// $arResult = array();

// if ($this->StartResultCache())
// {
//     // Подключаем модуль информационных блоков
//     if(!CModule::IncludeModule("iblock"))
//             return;
//     // Параметры сортировки
//     $arSort = array("ID"=>"ASC");
//     // Параметры фильтра
//     $arFilter = array("ACTIVE" => "Y",
//                                       "IBLOCK_ID" => $arParams['IBLOCK_ID'],
//                                       );
//     // Производим выборку из инфоблока
//     $arRes = CIBlockElement::GetList($arSort, $arFilter);
    
//     // Количество элементов
//     $iCount = intval($arParams['IBLOCK_ITEMS_COUNT']);
//     // Добавляем элементы в массив $arResult
//     for($i = 0; $i < $iCount; $i++ ) {
//             if(!$arr = $arRes->Fetch()) {
//                     break;
//             }
            
//             $arResult["ITEMS"][] = $arr;
//     }
    
// $this->IncludeComponentTemplate();
// }
?> -->

<!-- <? 
// if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
// use Bitrix\Main\Loader;
    
// if(!Loader::includeModule("iblock"))
// {
//     return;
// }

// print_r($arParams);

// $arSelect = Array("ID", "NAME",);
// // $arFilter = Array("IBLOCK_ID" => IntVal($arParams["IBLOCK_ID"]), "ACTIVE"=>"Y", "PROPERTY_".$arParams["PROPERTY_CODE"]."_VALUE" => 'Да');
// $res = CIBlockElement::GetList(Array(), false, false, $arSelect);
// while($arFields = $res->GetNext())
// {
//     $arResult[] = $arFields;    
// }

// $this->includeComponentTemplate();
// ?> -->
<? 
// if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var CBitrixComponent $this */
/** @var array $arParams */
/** @var array $arResult */
/** @var string $componentPath */
/** @var string $componentName */
/** @var string $componentTemplate */
/** @global CDatabase $DB */
/** @global CUser $USER */
/** @global CMain $APPLICATION */

use Bitrix\Main\Loader,
	Bitrix\Main,
	Bitrix\Iblock;

    if(!Loader::includeModule("iblock"))
	{
		ShowError(GetMessage("IBLOCK_MODULE_NOT_INSTALLED"));
		return;
	}

    $arFilter = array(
        "IBLOCK_ID" => $arParams["IBLOCKS"],
    );
	
    $arOrder = array(
        "name" => "desc",
    );

    $arSelect = array(
		"ID",
		"IBLOCK_ID",
        "NAME",
        "PROPERTY_*"
    );

    $rsItems = CIBlockElement::GetList($arOrder, $arFilter, false, false, $arSelect);

		$arResult['ITEMS'] = array();
		while ($ob = $rsItems->GetNextElement()) {
			$arItem = $ob->GetFields();
			$arItem['PROPERTIES'] = $ob->GetProperties();
		
			$arResult['ITEMS'][] = $arItem;
		}
  
	$this->includeComponentTemplate(); 

 ?> 
