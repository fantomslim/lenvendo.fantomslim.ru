<?php

\Bitrix\Main\Loader::includeModule('iblock');

AddEventHandler('iblock', 'OnBeforeIBlockElementAdd', array('Handler', 'onBeforeIBlockElementAdd'));
AddEventHandler('iblock', 'OnAfterIBlockElementAdd', array('Handler', 'onAfterIBlockElementAdd'));

class Handler
{
	
	public static function onBeforeIBlockElementAdd(&$arFields)
	{
		global $APPLICATION;
		
		$IBLOCK_ID = 2;
		
		if($arFields['IBLOCK_ID'] == $IBLOCK_ID)
		{
			if(filter_var($arFields['NAME'], FILTER_VALIDATE_URL) === false)
			{
				$APPLICATION->throwException('Укажите корректный "URL"!');
				
				return false;
			}
			
			$res = CIBlockElement::GetList(array(), array('ACTIVE' => 'Y', 'IBLOCK_ID' => $IBLOCK_ID, 'NAME' => $arFields['NAME']), false, false, array('ID'));
			
			if($row = $res->Fetch())
			{
				$APPLICATION->throwException('Указанный "URL" уже существует в базе данных!');
				
				return false;
			}
			
			$content = file_get_contents($arFields['NAME']);
			
			if(!$content)
			{
				$APPLICATION->throwException('Содержимое страницы не получено!');
				
				return false;
			}
			
			$doc = new \DOMDocument();

			$doc->loadHTML($content);
			
			$tag = $doc->getElementsByTagName('title');

			if($tag->length)
			{
				$arFields['PROPERTY_VALUES'][11] = $tag->item(0)->nodeValue;
			}
			
			$tags = $doc->getElementsByTagName('meta');

			if($tags->length)
			{
				foreach($tags as $i => $tag)
				{
					if($tag->getAttribute('name') == 'keywords') $arFields['PROPERTY_VALUES'][13] = $tag->getAttribute('content');
					if($tag->getAttribute('name') == 'description') $arFields['PROPERTY_VALUES'][12] = $tag->getAttribute('content');
				}
			}
			
			$tags = $doc->getElementsByTagName('link');

			if($tags->length)
			{
				foreach($tags as $i => $tag)
				{
					if($tag->getAttribute('rel') == 'icon') $arFields['PROPERTY_VALUES'][9] = $tag->getAttribute('href');
					
					if(!$arFields['PROPERTY_VALUES'][9] && $tag->getAttribute('rel') == 'shortcut icon') $arFields['PROPERTY_VALUES'][9] = $tag->getAttribute('href');
				}
			}
		}
	}
	
	public static function onAfterIBlockElementAdd(&$arFields)
	{
		global $APPLICATION;
		
		$IBLOCK_ID = 2;
		
		if($arFields['IBLOCK_ID'] == $IBLOCK_ID)
		{
			if($arFields['ID']) LocalRedirect('/view.php?ELEMENT_ID=' . $arFields['ID']);
		}
	}
	
}

?>