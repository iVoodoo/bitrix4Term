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
