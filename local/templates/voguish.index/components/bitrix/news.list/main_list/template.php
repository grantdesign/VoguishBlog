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

<div class="nam-matis">
	<div class="nam-matis-top">
		<?php foreach ($arResult['ITEMS'] as $key => $arItem): ?>
			<?php if ($key % 2 == 0): ?>
				<?php
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
				<?php
					$file = resizeImage($arItem["PREVIEW_PICTURE"], 368, 230);
					$arItem['PREVIEW_PICTURE']['SRC'] = $file['src'];
				?>
				<div class="col-md-6 nam-matis-1" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
					<a href="<?=$arItem['DETAIL_PAGE_URL']?>"><img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" class="img-responsive" alt="<?=$arItem['PREVIEW_PICTURE']['ALT']?>"></a>
					<h3><a href="<?=$arItem['DETAIL_PAGE_URL']?>"><?=$arItem['NAME']?></a></h3>
					<p><?=mbCutString($arItem['PREVIEW_TEXT'], 141)?></p>
				</div>
			<?php endif; ?>
		<?php endforeach; ?>
		<div class="clearfix"> </div>
	</div>
	<div class="nam-matis-top">
		<?php foreach ($arResult['ITEMS'] as $key => $arItem): ?>
			<?php if ($key % 2 == 1): ?>
				<?php
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
				<?php
					$file = resizeImage($arItem["PREVIEW_PICTURE"], 368, 230);
					$arItem['PREVIEW_PICTURE']['SRC'] = $file['src'];
				?>
				<div class="col-md-6 nam-matis-1" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
					<a href="<?=$arItem['DETAIL_PAGE_URL']?>"><img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" class="img-responsive" alt="<?=$arItem['PREVIEW_PICTURE']['ALT']?>"></a>
					<h3><a href="<?=$arItem['DETAIL_PAGE_URL']?>"><?=$arItem['NAME']?></a></h3>
					<p><?=mbCutString($arItem['PREVIEW_TEXT'], 141)?></p>
				</div>
			<?php endif; ?>
		<?php endforeach; ?>
		<div class="clearfix"> </div>
	</div>
</div>