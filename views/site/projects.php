<?php
/* @var $this yii\web\View */
use yii\widgets\ListView;
?>

<h1 class="page-header" style="margin-top: 15px;">Проекты</h1>
<? 
	echo ListView::widget([
		'dataProvider' => $data,
		'itemView' => '_projects',
		'itemOptions' => [
			'tag' => 'div',
			'class' => 'panel panel-default',
			'style' => 'margin-top: 5px'
		],
		'emptyText' => 'Список пуст',
		'emptyTextOptions' => [
        	'tag' => 'p'
    	],
	]);
?>
