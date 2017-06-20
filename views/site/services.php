<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\Collapse;

$this->title = 'Услуги';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <? echo Collapse::widget([
    'items' => [
        // equivalent to the above
        [
            'label' => 'Разработка мобильных приложений',
            'content' => [
                'Разработка мобильных приложений на базе собственной автоматизированной платформы',
                'Разработка нативных мобильных приложений под конкретную платформу'
            ],
        ],
        [
            'label' => 'Разработка прикладных программ и настольных приложений',
            'content' => [
                'Разработка настольных приложений для Вашего бизнеса и Ваших клиентов',
                'Разработка программного обеспечения под индивидуальное техническое задание'
            ],
        ],
        [
            'label' => 'Разработка комплексных решений для бизнеса на базе всех предлагаемых нами услуг и технологий',
            'content' => [
                'Разработка комплексных решений для Вашего бизнеса',
                'Анализ потребностей, технологий и требований',
                'Формирование технического задания',
                'Разработка программного обеспечения любого уровня стека',
                'Разработка документации и поддержка'
            ],
        ],
        [
            'label' => 'IT-консалтинг, независимая оценка',
            'content' => [
                'IT-консалтинг по любым IT-вопросам и технологиям',
                'Проведение независимой оценки эффективности выбранных IT-решений'
            ],
        ],
        // another group item
    ]
    ]); ?>

    <p>По каждой услуге мы готовы предоставить дополнительные опции в виде:</p>
    <ul>
        <li>Помощь на этапе сбора требований и анализа бизнес-задачи</li>
        <li>Помощь в формировании и оформлении технического задания</li>
    </ul>

    <p>Вне зависимости от выбранного плана работ мы готовы оформить соглашение о конфиденциальности относительно идеи, задачи и выбранных технологий реализации.</p>

    <p>Вне зависимости от выбранного плана работ мы предоставляем три месяца бесплатной технической поддержки для наших продуктов.</p>
</div>