<?php
/* @var $this yii\web\View */
use yii\widgets\ListView;
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
use yii\helpers\Url;
?>

<h1><?= $data->title; ?></h1>
	<div>
		<? 
			if ($data->img) {
				echo Yii::$app->formatter->asImage('@web/img/projects/' . $data->img, ['width' => '300', 'align' => 'left', 'hspace' => '10']);
			} else{
				echo Yii::$app->formatter->asImage('@web/img/projects/default', ['width' => '300']);
			}
		?>
	</div>
	
	<div>
		<? 
			if ($data->img) {
				echo Yii::$app->formatter->asText($data->description);
			}
		?>
	</div>
	<hr>
	<div>
		<? 	
			echo yii\helpers\Html::a('&larr; назад к проектам', Url::toRoute('site/projects', true));
		?>
	</div>