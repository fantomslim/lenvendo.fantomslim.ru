<?php

if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

$this->setFrameMode(true);

?>

<p class="mb-4"><a href="<?php echo SITE_DIR; ?>add.php" class="btn btn-primary">Добавить закладку</a><?php if($arResult['ITEMS']) { ?> <a href="<?php echo SITE_DIR; ?>?excel=Y" class="btn btn-info">Выгрузить закладки</a><?php } ?></p>

<?php if($arResult['ITEMS']) { ?>

	<div class="row">
		<?php foreach($arResult['ITEMS'] as $arItem) { ?>
			<?php
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_EDIT'));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_DELETE'), array('CONFIRM' => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
			<div class="col-md-4" id="<?php echo $this->GetEditAreaId($arItem['ID']);?>">
				<div class="card mb-4 box-shadow">
					<div class="card-body small">
						<p class="mb-2 mt-0"><?php echo $arItem['DISPLAY_ACTIVE_FROM']; ?></p>
						<p class="mb-2 mt-0"><?php echo $arItem['PROPERTIES']['FAVICON']['VALUE']; ?></p>
						<p class="mb-2 mt-0"><?php echo $arItem['NAME']; ?></p>
						<p class="mb-2 mt-0"><a href="<?php echo $arItem['DETAIL_PAGE_URL']?>"><?php echo $arItem['PROPERTIES']['METATITLE']['VALUE']; ?></a></p>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>

	<?php if($arParams['DISPLAY_BOTTOM_PAGER']) { ?>
		<?php echo $arResult['NAV_STRING']; ?>
	<?php } ?>

<?php } else { ?>

	<p class="alert alert-info">Информация отсутствует в базе данных!</p>

<?php } ?>
