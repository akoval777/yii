<?php
/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
//use yii\bootstrap\Modal;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode(Yii::$app->name) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'MtlSoft',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menu = [
        ['label' => 'Главная',        'url' => ['/site/index']],
        ['label' => 'Проекты',          'url' => ['/site/projects']],
        ['label' => 'Услуги', 'url' => ['/site/services']],
        ['label' => 'Контакты',       'url' => ['/site/contacts']],
    ];
    if (Yii::$app->user->isGuest){
        $menu[] = ['label' => 'Авторизация', 'url' => ['/site/login']];
    }
    else{
        $menu[] = ['label' => 'Админка', 'url' => ['/site/admin'], 'active' => in_array(\Yii::$app->controller->id, ['projects'])];
        $menu[] = ['label' => 'Выход', 'url' => ['/site/logout'],
        ];
    }
    $menu[] = '<li class="active"><a href="tel:+78124294910">+7(812)429-49-10</a></li>';//['label'=> '+7(812)4294910', 'url' => ['#']];

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menu,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<?php //Modal::begin(['id' => 'modal', 'header' => '<h2>Контакты</h2>']); ?>
<!--    <form>-->
<!--      <div class="form-group">-->
<!--        <label for="tel">Телефон</label>-->
<!--        <input type="text" class="form-control" id="tel" placeholder="Телефон">-->
<!--      </div>-->
<!--      <div class="form-group">-->
<!--        <label for="email">Email</label>-->
<!--        <input type="email" class="form-control" id="email" placeholder="Email">-->
<!--      </div>-->
<!--      <div class="form-group">-->
<!--        <label for="fax">Fax</label>-->
<!--        <input type="text" class="form-control" id="fax" placeholder="Fax">-->
<!--      </div>-->
<!--      <div class="form-group">-->
<!--        <label for="address">Адрес</label>-->
<!--        <input type="text" class="form-control" id="address" placeholder="Адрес">-->
<!--      </div>-->
<!--      <button type="submit" class="btn btn-default">Submit</button>-->
<!--    </form>-->
<?php //Modal::end(); ?>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; MtlSoft <?= date('Y') ?></p>
        <p class="pull-right"><span class="glyphicon glyphicon-phone" style="margin-right: 4px;"></span>+7(812)429-49-10</p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>