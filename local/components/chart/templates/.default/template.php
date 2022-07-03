<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<?php
$chartParams = array();
$type = $arParams['CHART_TYPE'];
?>
<? foreach ($arResult["ITEMS"] as $arItem) : ?>

  <? 
    $key = $arItem["NAME"]; 
    $value = $arItem["PROPERTIES"]["STATS_VALUE"]["~VALUE"];
    $chartParams[$key] = $value; 
  ?>

<? endforeach; ?>
<div id="chartdiv"></div>

<script>
	BX.ready(function() {
    let type = '<?= $type;?>';
		drawChart(<?= json_encode($chartParams) ?>, type);		
	});
</script>