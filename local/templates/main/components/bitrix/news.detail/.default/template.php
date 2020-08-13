<?php

if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

$this->setFrameMode(true);

?>

<p class="mb-4"><a href="<?php echo SITE_DIR; ?>" class="btn btn-secondary">Вернуться к списку</a></p>

<p><u>Дата добавления:</u> <?php echo $arResult['DISPLAY_ACTIVE_FROM']; ?></p>
<p><u>Favicon:</u> <?php echo $arResult['PROPERTIES']['FAVICON']['VALUE']; ?></p>
<p><u>Заголовок страницы:</u> <?php echo $arResult['PROPERTIES']['METATITLE']['VALUE']; ?></p>
<p><u>META Description:</u> <?php echo $arResult['PROPERTIES']['METADESCRIPTION']['VALUE']; ?></p>
<p><u>META Keywords:</u> <?php echo $arResult['PROPERTIES']['METAKEYWORDS']['VALUE']; ?></p>