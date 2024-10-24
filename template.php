<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <title><?= $APPLICATION->ShowTitle() ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="shortcut icon" href="<?= $templateFolder ?>/images/article-bg.jpg" type="image/x-icon">
    <link rel="stylesheet" href="<?= $templateFolder ?>/css/common.css">
</head>
<body>
<div id="barba-wrapper">
    <div class="article-list">
        <?php foreach ($arResult["ITEMS"] as $item): ?>
            <a class="article-item article-list__item" href="<?= $item['DETAIL_PAGE_URL'] ?>" data-anim="anim-3">
                <div class="article-item__background">
                    <?php
                    if (!empty($item["PREVIEW_PICTURE"]["SRC"])): ?>
                        <img src="<?= $item["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= $item["NAME"] ?>" />
                    <?php else: ?>
                        <img src="<?= $templateFolder ?>/images/default-image.jpg" alt="Изображение отсутствует" />
                    <?php endif; ?>
                </div>
                <div class="article-item__wrapper">
                    <div class="article-item__title"><?= $item["NAME"] ?></div>
                    <div class="article-item__content"><?= $item["PREVIEW_TEXT"] ?></div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</div>
</body>
</html>
