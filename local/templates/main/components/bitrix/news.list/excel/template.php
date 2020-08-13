<?php

if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

$this->setFrameMode(true);

$APPLICATION->RestartBuffer();

header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="excel.xls"');
header('Cache-Control: max-age=0');

?>

<?php if($arResult['ITEMS']) { ?>
	<table border="1" bordercolor="black">
		<thead>
			<th>Дата добавления</th>
			<th>Favicon</th>
			<th>URL страницы</th>
			<th>Заголовок страницы</th>
			<th>META Keywords</th>
			<th>META Description</th>
		</thead>
		<tbody>
			<?php foreach($arResult['ITEMS'] as $arItem) { ?>
				<tr>
					<td valign="top" align="left"><?php echo $arItem['DISPLAY_ACTIVE_FROM']; ?></td>
					<td valign="top" align="left"><?php echo $arItem['PROPERTIES']['FAVICON']['VALUE']; ?></td>
					<td valign="top" align="left"><?php echo $arItem['NAME']; ?></td>
					<td valign="top" align="left"><?php echo $arItem['PROPERTIES']['METATITLE']['VALUE']; ?></td>
					<td valign="top" align="left"><?php echo $arItem['PROPERTIES']['METAKEYWORDS']['VALUE']; ?></td>
					<td valign="top" align="left"><?php echo $arItem['PROPERTIES']['METADESCRIPTION']['VALUE']; ?></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
<?php } ?>

<?php exit(); ?>
