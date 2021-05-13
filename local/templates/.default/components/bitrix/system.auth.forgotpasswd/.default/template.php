<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><?

ShowMessage($arParams["~AUTH_RESULT"]);

?>

<div class="login-right">

<form name="bform" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>">
<?
if ($arResult["BACKURL"] <> '')
{
?>
	<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
<?
}
?>
	<input type="hidden" name="AUTH_FORM" value="Y">
	<input type="hidden" name="TYPE" value="SEND_PWD">

	<p><?echo GetMessage("sys_forgot_pass_label")?></p>

	<div>
		<span><b><?=GetMessage("sys_forgot_pass_login1")?></b></span>
		<div>
			<input type="text" name="USER_LOGIN" value="<?=$arResult["USER_LOGIN"]?>" />
			<input type="hidden" name="USER_EMAIL" />
		</div>
		<span><?echo GetMessage("sys_forgot_pass_note_email")?></span>
	</div>

<?if($arResult["PHONE_REGISTRATION"]):?>

	<div>
		<span><b><?=GetMessage("sys_forgot_pass_phone")?></b></span>
		<input type="text" name="USER_PHONE_NUMBER" value="<?=$arResult["USER_PHONE_NUMBER"]?>" />
		<span><?echo GetMessage("sys_forgot_pass_note_phone")?></span>
	</div>
<?endif;?>

<?if($arResult["USE_CAPTCHA"]):?>
	<div>
			<input type="hidden" name="captcha_sid" value="<?=$arResult["CAPTCHA_CODE"]?>" />
			<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" />
		<span><?echo GetMessage("system_auth_captcha")?></span>
		<input type="text" name="captcha_word" maxlength="50" value="" />
	</div>
<?endif?>
	<div>
		<input type="submit" name="send_account_info" value="<?=GetMessage("AUTH_SEND")?>" />
	</div>
</form>
	<a href="<?=$arResult["AUTH_AUTH_URL"]?>"><b><?=GetMessage("AUTH_AUTH")?></b></a>
</div>

<script type="text/javascript">
document.bform.onsubmit = function(){document.bform.USER_EMAIL.value = document.bform.USER_LOGIN.value;};
document.bform.USER_LOGIN.focus();
</script>
