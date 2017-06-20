<?php

/* @var $this yii\web\View */
use yii\bootstrap\Carousel;

$this->title = 'MtlSoft';
?>
<div class="site-index">

    <?php echo Carousel::widget([
        'items' => [
            [
                'content'=> '<img src="' . Yii::$app->homeUrl . '/img/1.jpg" style="width: 100%"/>',
                'caption' => '<div class="carousel-caption" style="bottom: 35px; background-color: gray; opacity:0.5; border-radius: 5px"><h1>MtlSoft</h1><b>Ваш надежный IT-партнер</b></div>'
            ],
            [
                'content'=> '<img src="' . Yii::$app->homeUrl . '/img/2.jpg" style="width: 100%"/>'
            ],
            [
                'content'=> '<img src="' . Yii::$app->homeUrl . '/img/3.jpg" style="width: 100%"/>'
            ]
        ],
        'options' => [
            'class' => 'carousel slide', 
            'data-interval' => '5000'
        ],
        'controls' => [
            '<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>',
            '<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>'
        ]
    ]); ?>

    <div class="body-content">
        <h2 class="text-center page-header">MtlSoft – разработка мобильных приложений</h2>
        <div class="row">
            <div class="col-md-4">
                <h3>Новая идея</h3>
                <p>Если у вас есть идея, мы готовы реализовать ее. Пусть она будет самая сложная. Креативные дизайнеры помогут Вам в ее оформлении, а талантливые менеджеры будут держать Вас в курсе всех событий, происходящих с проектом.</p>
            </div>
            <div class="col-md-4">
                <h3>Нужна автоматизация</h3>
                <p>Бизнес растет, снижайте затраты автоматизируя процессы, повышайте мобильность бизнеса. Мобильные решения от MtlSoft – правильный выбор. К вашим требованиям мы подберем готовый кейс или разработаем платформу под Ваши потребности.</p>
            </div>
            <div class="col-md-4">            
                <h3>Какие технологии выбрать</h3>
                <p>В современном мире информации порой очень непросто выбрать оптимальное IT-решение. Консалтинговые услуги специалистов MtlSoft помогут Вам настроить бизнес-процессы в сфере IT.</p>
            </div>
            <div class="col-md-6">
                <h3>Разработка индивидуальных проектов</h3>
                <p>Сложные бизнес-требования? Не беда! MtlSoft – компания разработки ПО полного цикла. К Вашим услугам полное сопровожденияе проектов – от сбора требований и составления технического задания, до внедрения и доводки. Разрабатываем сложные решения «под ключ».</p>
            </div>
            <div class="col-md-6">
                <h3>Конфиденциальность</h3>
                <p>Мы ценим идеи наших клиентов. Для нас это не просто слова, для нас это работа. Мы дорожим своей репутацией и ценим Ваш выбор работать с MtlSoft. Поэтому по Вашей просьбе мы готовы составить соглашение о неразглашении идей, выбранных методов и технологий реализации.</p>
            </div>
            <div class="col-md-12">
                <br>
                <h4 class="text-center">Спасибо за выбор MtlSoft!</h4>
            </div>
        </div>
    </div>
</div>