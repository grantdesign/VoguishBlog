<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

CJSCore::Init();
?>
<!-- AUTH USER -->
<div class="login-right">

	<?
	if ($arResult['SHOW_ERRORS'] == 'Y' && $arResult['ERROR'])
		ShowMessage($arResult['ERROR_MESSAGE']);
	?>

	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Профиль пользователя</h3>
		</div>
		<div class="panel-body">
			Добро пожаловать, <?=$arResult['USER_NAME']?><br>
			Ваш профиль: <a href="<?=$arResult['PROFILE_URL']?>"><?=$arResult['USER_LOGIN']?></a><br>
			<a href="<?echo $APPLICATION->GetCurPageParam("logout=yes", array(
			"login",
			"logout",
			"register",
			"forgot_password",
			"change_password"));?>"><?=GetMessage('AUTH_LOGOUT_BUTTON')?></a>
		</div>
	</div>

</div>