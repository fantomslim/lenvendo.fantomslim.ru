<?php

if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

$this->setFrameMode(true);

if(!$arResult['NavShowAlways'])
{
	if ($arResult['NavRecordCount'] == 0 || ($arResult['NavPageCount'] == 1 && $arResult['NavShowAll'] == false)) return;
}

$strNavQueryString = ($arResult['NavQueryString'] != "" ? $arResult['NavQueryString']."&amp;" : "");

$strNavQueryStringFull = ($arResult['NavQueryString'] != "" ? "?".$arResult['NavQueryString'] : "");

?>


<nav aria-label="Page navigation example">
  <ul class="pagination">
	<?php while($arResult['nStartPage'] <= $arResult['nEndPage']) { ?>
		<?php if ($arResult['nStartPage'] == $arResult['NavPageNomer']) { ?>
			<li class="page-item active"><a class="page-link" href="javascript:;"><?php echo $arResult['nStartPage']; ?></a></li>
		<?php } elseif($arResult['nStartPage'] == 1 && $arResult['bSavePage'] == false) { ?>
			<li class="page-item"><a class="page-link" href="<?php echo $arResult['sUrlPath']; ?><?php echo $strNavQueryStringFull; ?>"><?php echo $arResult['nStartPage']; ?></a></li>
		<?php } else { ?>
			<li class="page-item"><a class="page-link" href="<?php echo $arResult['sUrlPath']; ?>?<?php echo $strNavQueryString; ?>PAGEN_<?php echo $arResult['NavNum']; ?>=<?php echo $arResult['nStartPage']; ?>"><?php echo $arResult['nStartPage']; ?></a></li>
		<?php } ?>
		<?php $arResult['nStartPage']++; ?>
	<?php } ?>
  </ul>
</nav>