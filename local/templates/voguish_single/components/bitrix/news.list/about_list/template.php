<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
//debug($arResult['ITEMS']);
$themeClass = isset($arParams['TEMPLATE_THEME']) ? ' bx-'.$arParams['TEMPLATE_THEME'] : '';
?>

<div class="span_3">
	<?php foreach ($arResult['ITEMS'] as $key => $arItem): ?>
		<?php if ($key % 2 == 0): ?>
			<?php
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
			<?php
				$file = resizeImage($arItem['PREVIEW_PICTURE'], 173, 108);
				$arItem['PREVIEW_PICTURE']['SRC'] = $file['src'];
			?>
			<div class="col-md-6 ab-top" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
				<ul class="span_2">
					<li class="span_2-left"><img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" class="img-responsive" alt="<?=$arItem['PREVIEW_PICTURE']['ALT']?>"></li>
					<li class="span_2-right">
						<h3><?=mbCutString($arItem['NAME'], 25)?></h3>
						<p><?=mbCutString($arItem['PREVIEW_TEXT'], 96)?></p>
					</li>
					<div class="clearfix"> </div>
				</ul>
			</div>
		<?php endif; ?>
	<?php endforeach; ?>
	<div class="clearfix"> </div>
</div>

<div class="span_4">
	<?php foreach ($arResult['ITEMS'] as $key => $arItem): ?>
		<?php if ($key % 2 == 1): ?>
			<?php
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
			<?php
				$file = resizeImage($arItem['PREVIEW_PICTURE'], 173, 108);
				$arItem['PREVIEW_PICTURE']['SRC'] = $file['src'];
			?>
			<div class="col-md-6 ab-top" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
				<ul class="span_2">
					<li class="span_2-left"><img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" class="img-responsive" alt="<?=$arItem['PREVIEW_PICTURE']['ALT']?>"></li>
					<li class="span_2-right">
						<h3><?=mbCutString($arItem['NAME'], 25)?></h3>
						<p><?=mbCutString($arItem['PREVIEW_TEXT'], 96)?></p>
					</li>
					<div class="clearfix"> </div>
				</ul>
			</div>
		<?php endif; ?>
	<?php endforeach; ?>
	<div class="clearfix"> </div>
</div>