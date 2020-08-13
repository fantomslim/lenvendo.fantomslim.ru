<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Добавить закладку");
?><?$APPLICATION->IncludeComponent(
	"bitrix:iblock.element.add.form", 
	".default", 
	array(
		"CUSTOM_TITLE_NAME" => "URL",
		"DEFAULT_INPUT_SIZE" => "300",
		"ELEMENT_ASSOC" => "CREATED_BY",
		"ELEMENT_ASSOC_PROPERTY" => "",
		"GROUPS" => array(
			0 => "2",
		),
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "content",
		"LEVEL_LAST" => "Y",
		"MAX_LEVELS" => "100000",
		"MAX_USER_ENTRIES" => "100000",
		"PROPERTY_CODES" => array(
			0 => "NAME",
		),
		"PROPERTY_CODES_REQUIRED" => array(
			0 => "NAME",
		),
		"COMPONENT_TEMPLATE" => ".default",
		"STATUS_NEW" => "N",
		"LIST_URL" => "",
		"USE_CAPTCHA" => "N",
		"USER_MESSAGE_EDIT" => "",
		"USER_MESSAGE_ADD" => "",
		"RESIZE_IMAGES" => "N",
		"STATUS" => "ANY",
		"MAX_FILE_SIZE" => "0",
		"PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
		"DETAIL_TEXT_USE_HTML_EDITOR" => "N",
		"SEF_MODE" => "N",
		"CUSTOM_TITLE_TAGS" => "",
		"CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
		"CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
		"CUSTOM_TITLE_IBLOCK_SECTION" => "",
		"CUSTOM_TITLE_PREVIEW_TEXT" => "",
		"CUSTOM_TITLE_PREVIEW_PICTURE" => "",
		"CUSTOM_TITLE_DETAIL_TEXT" => "",
		"CUSTOM_TITLE_DETAIL_PICTURE" => ""
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>