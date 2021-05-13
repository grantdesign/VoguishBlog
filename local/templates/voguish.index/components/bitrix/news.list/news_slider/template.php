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
?>

<ul id="flexiselDemo3">
	<?php foreach ($arResult['ITEMS'] as $arItem): ?>
		<?php
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<?php
			$file = resizeImage($arItem['PREVIEW_PICTURE'], 175, 109);
			$arItem['PREVIEW_PICTURE']['SRC'] = $file['src'];
		?>
		<li id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<a href="<?=$arItem['DETAIL_PAGE_URL']?>">
				<div class="banner-1">
					<img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" class="img-responsive" alt="<?=$arItem['PREVIEW_PICTURE']['ALT']?>">
				</div>
			</a>
		</li>
	<?php endforeach; ?>
</ul>