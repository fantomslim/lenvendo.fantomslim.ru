<?php

if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

$this->setFrameMode(false);

$propertyID = 0;

?>

<p class="mb-4"><a href="<?php echo SITE_DIR; ?>" class="btn btn-secondary">Вернуться к списку</a></p>

<?php if($arResult['ERRORS']) { ?>
	<p class="alert alert-danger"><?php echo implode('<br/>', $arResult['ERRORS']); ?></p>
<?php } ?>

<?php if($arResult['MESSAGE']) { ?>
	<p class="alert alert-success"><?php echo strip_tags($arResult['MESSAGE']); ?></p>
<?php } ?>

<?php if(isset($arResult['PROPERTY_LIST'][$propertyID])) { ?>
	<form name="iblock_add" action="<?php echo POST_FORM_ACTION_URI; ?>" method="post">
		<?php echo bitrix_sessid_post(); ?>
		<div class="form-group">
			<label>
				<?php echo ($arParams['CUSTOM_TITLE_' . $arResult['PROPERTY_LIST'][$propertyID]] ? $arParams['CUSTOM_TITLE_' . $arResult['PROPERTY_LIST'][$propertyID]] : $arResult['PROPERTY_LIST_FULL'][$propertyID]['NAME']); ?>
				<?php if(in_array($propertyID, $arResult['PROPERTY_REQUIRED'])) { ?> <sup class="text-danger">*</sup><?php } ?>
			</label>
			<input type="text" class="form-control" name="PROPERTY[<?php echo $arResult['PROPERTY_LIST'][$propertyID]; ?>][0]" size="<?php echo $arResult['PROPERTY_LIST_FULL'][$propertyID]['COL_COUNT']; ?>" value="<?php echo $value; ?>" />
		</div>
		<input type="submit" name="iblock_submit" value="Добавить" class="btn btn-primary"/>
	</form>
<?php } ?>