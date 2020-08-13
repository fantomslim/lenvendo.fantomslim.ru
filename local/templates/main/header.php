<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE html>
<html lang="ru">
	<head>
	
		<meta charset="utf-8"/>
		
		<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>
		
		<?php $APPLICATION->ShowMeta('robots'); ?>
		<?php $APPLICATION->ShowMeta('keywords'); ?>
		<?php $APPLICATION->ShowMeta('description'); ?>
		
		<title><?php $APPLICATION->ShowTitle(); ?></title>
		
		<?php $APPLICATION->ShowHead(); ?>
		
		<?php $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/assets/css/bootstrap.min.css'); ?>
		<?php $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/assets/css/styles.css'); ?>
		
		<link href="<?php echo SITE_TEMPLATE_PATH; ?>/favicon.ico" rel="icon"/>
		
		<?php $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/assets/js/jquery-slim.min.js'); ?>
		<?php $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/assets/js/popper.min.js'); ?>
		<?php $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/assets/js/bootstrap.min.js'); ?>
		<?php $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/assets/js/holder.min.js'); ?>
		
	</head>
	<body>
		<div id="panel"><?$APPLICATION->ShowPanel();?></div>
		<header>
			<div class="navbar navbar-dark bg-dark box-shadow">
				<div class="container d-flex justify-content-between">
					<a class="navbar-brand d-flex align-items-center" href="<?php echo SITE_DIR; ?>">
						<?php echo GetMessage('TMPL_HEADER_BRAND'); ?>
					</a>
				</div>
			</div>
		</header>
		<main role="main">
			<div class="container py-4">
				<h4 class="mb-4 mt-0"><?php echo $APPLICATION->ShowTitle(false); ?></h4>