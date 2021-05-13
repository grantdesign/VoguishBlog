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

<div class="blog-articals">
	<?php foreach ($arResult['ITEMS'] as $arItem): ?>
		<?php
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<div class="blog-artical" id="<?=$this->GetEditAreaId($arItem['ID'])?>">
			<div class="blog-artical-info">
				<div class="blog-artical-info-img">
					<a href="<?=$arItem['DETAIL_PAGE_URL']?>"><img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arResult['DETAIL_PICTURE']['ALT']?>"></a>
				</div>
				<div class="blog-artical-info-head">
					<h2><a href="<?=$arItem['DETAIL_PAGE_URL']?>"><?=$arItem['NAME']?></a></h2>
					<h6>Posted on, <?=$arItem['DISPLAY_ACTIVE_FROM']?> by <a href="<?=$arItem['DETAIL_PAGE_URL']?>"> <?=$arItem['PROPERTIES']['AUTHOR']['VALUE']?></a></h6>
				</div>
				<div class="blog-artical-info-text">
					<p><?=$arItem['PREVIEW_TEXT']?><a href="<?=$arItem['DETAIL_PAGE_URL']?>">[...]</a></p>
				</div>
				<div class="artical-links">
					<ul>
						<li><small> </small><span><?=$arItem['DISPLAY_ACTIVE_FROM']?></span></li>
						<li><a href="<?=$arItem['DETAIL_PAGE_URL']?>"><small class="admin"> </small><span><?=$arItem['PROPERTIES']['AUTHOR']['VALUE']?></span></a></li>
						<li><a href="<?=$arItem['DETAIL_PAGE_URL']?>"><small class="no"> </small><span><?=($arItem['PROPERTIES']['BLOG_COMMENTS_CNT']['VALUE']) ? $arItem['PROPERTIES']['BLOG_COMMENTS_CNT']['VALUE'] : 'No comments'?></span></a></li>
						<li><a href="<?=$arItem['DETAIL_PAGE_URL']?>"><small class="posts"> </small><span>View posts: <?=($arItem['SHOW_COUNTER']) ? $arItem['SHOW_COUNTER'] : 0?></span></a></li>
						<li><a href="<?=$arItem['DETAIL_PAGE_URL']?>"><small class="link"> </small><span>permalink</span></a></li>
					</ul>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	<?php endforeach; ?>
</div>

<!--start-blog-pagenate-->
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br><?=$arResult["NAV_STRING"]?>
<?endif;?>
<!--//End-blog-pagenate-->