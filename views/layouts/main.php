<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
// Создание лого
$logo = Html::img('@web/images/logo.jpg', ['alt' => 'Логотип', 'class' => 'navbar-brand logo']);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php // подключение css ?>
    <link rel="stylesheet" href="/css/style.css">
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header id="header">
    <?php
    NavBar::begin([
        'options' => ['class' => 'navbar-expand-md navbar-dark bg-dark fixed-top']
    ]);
    $items = [ 
        // добавление лого в навбар
        ['label' => $logo, 'url' => ['/site/index'], 'encode' => false],
        ['label' => 'Главная', 'url' => ['/site/index']],
    ];
    if (Yii::$app->user->isGuest) {
        $items[] = ['label' => 'Вход', 'url' => ['/site/login']];
        $items[] = ['label' => 'Регистрация', 'url' => ['/site/register']];
    } else {
        $items[] = ['label' => 'Мои записи', 'url' => ['/reception/index']];
        $items[] = ['label' => 'Создать запись', 'url' => ['/reception/create']];
        $items[] = '<li class="nav-item">'
        . Html::beginForm(['/site/logout'])
        . Html::submitButton(
            'Выход (' . Yii::$app->user->identity->fio. ')',
                ['class' => 'nav-link btn btn-link logout']
            )
        . Html::endForm()
        . '</li>';
    }
    echo Nav::widget([
        // центрирование элементов
        'options' => ['class' => 'navbar-nav align-items-center'],
        'items' => $items
    ]);
    NavBar::end();
    ?>
</header>

<main id="main" class="flex-shrink-0" role="main">
    <div class="container">
        <?php if (!empty($this->params['breadcrumbs'])): ?>
            <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
        <?php endif ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer id="footer" class="mt-auto py-3 bg-light">
    <div class="navbar-nav align-items-center">
    <div class="container">
        <div class="row text-muted">
            <div class="col-md-6 text-center text-md-start">
                <ul class="navbar-nav">
                <li class="nav-item"><u>Контактные данные:</u></li><br>
                <li class="nav-item">телефон: +7 (999) 888 33-22</li><br>
                <li class="nav-item">почта: med-plus@mail.ru</li>
                </ul>  
            </div>
            <div class="col-md-6 text-center text-md-end">
                <ul class="navbar-nav">
                <?php if (Yii::$app->user->isGuest): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= Yii::$app->urlManager->createUrl(['/site/index']) ?>">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= Yii::$app->urlManager->createUrl(['/site/login']) ?>">Вход</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= Yii::$app->urlManager->createUrl(['/site/register']) ?>">Регистрация</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= Yii::$app->urlManager->createUrl(['/site/index']) ?>">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= Yii::$app->urlManager->createUrl(['/site/my-posts']) ?>">Мои записи</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= Yii::$app->urlManager->createUrl(['/site/new-post']) ?>">Новая запись</a>
                    </li>
                <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
