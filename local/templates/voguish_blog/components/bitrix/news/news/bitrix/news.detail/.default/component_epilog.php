<div class="respon">
	<h2>Комментарии</h2>
	<?$APPLICATION->IncludeComponent("bitrix:catalog.comments", "my_comm", Array(
	"BLOG_USE" => "Y",	// Использовать комментарии
		"CACHE_TIME" => "0",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CHECK_DATES" => "Y",	// Показывать коментарии только для активных на данный момент элементов
		"COMMENTS_COUNT" => "5",	// Количество показываемых комментариев
		"ELEMENT_CODE" => "",	// Код товара
		"ELEMENT_ID" => $arResult["ID"],	// Идентификатор товара
		"FB_USE" => "N",	// Использовать Facebook
		"IBLOCK_ID" => "3",	// Идентификатор инфоблока
		"IBLOCK_TYPE" => "content",	// Тип инфоблока
		"SHOW_DEACTIVATED" => "N",	// Показывать комментарии к деактивированным товарам
		"TEMPLATE_THEME" => "blue",	// Цветовая тема
		"URL_TO_COMMENT" => "",	// Путь к комментируемому товару
		"VK_USE" => "N",	// Использовать Вконтакте
		"WIDTH" => "",	// Ширина
		"COMPONENT_TEMPLATE" => ".default",
		"BLOG_TITLE" => "Комментарии",	// Надпись на вкладке
		"BLOG_URL" => "catalog_comments",	// Название блога латинскими буквами
		"PATH_TO_SMILE" => "/bitrix/images/blog/smile/",	// Путь к улыбкам
		"EMAIL_NOTIFY" => "N",	// Уведомление по электронной почте
		"SHOW_SPAM" => "Y",	// Показывать администраторам ссылку на все комментарии пользователя
		"SHOW_RATING" => "N",	// Включить рейтинг
	),
	false
);?>
</div>