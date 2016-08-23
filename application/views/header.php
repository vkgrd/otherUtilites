<?php 
	$sTitle = $this->config->item('siteTitle');
	$sDesc = $this->config->item('siteDescription');
	$sKeywords = $this->config->item('siteKeywords');
	$sOgImage = $this->config->item('siteOgImage');

	switch($this->uri->segment(1)) {
		case 'utils':
			switch($this->uri->segment(2)) {
				case 'vkClearCache':
					$pageTitle = 'VK Clear Link Cache';
					$pageDescription = 'Очистка кэша ссылок ВКонтакте по URL';
					$pageKeywords = 'ссылка, вконтакте, разместить ссылку, неправильно отображается ссылка';
				break;
			}
		break;
	}
	if(isset($customTitle)) {
		$pageTitle = $customTitle;
	}
	if(!isset($pageTitle) || $pageTitle == '') {
		$pageTitle = $sTitle;
	}
	if(!isset($pageDescription)) {
		$pageDescription = $sDesc;
	}
	if(!isset($pageKeywords)) {
		$pageKeywords = $sKeywords;
	}
	if(!isset($pageOgImage)) {
		$pageOgImage = $sOgImage;
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title><?=$pageTitle?></title>
		<? // <meta name="viewport" content="width=device-width, initial-scale=1.0"> ?>
		<meta name="viewport" content="width=1250">
		<meta name="description" content="<?=$pageDescription?>">
		<meta name="keywords" content="<?=$pageKeywords?>">
		<meta name="og:title" content="<?=$pageTitle?>">
		<meta name="og:description" content="<?=$pageDescription?>">
		<meta name="og:image" content="<?=$pageOgImage?>">
		<link rel="stylesheet" type="text/css" href="/pub/css/style.min.css">
	</head>
	<body>