<? 
	use yii\helpers\Html;
	use yii\helpers\HtmlPurifier;
	use yii\helpers\Url;
?>

<div style="display: table-cell; padding: 12px">
	<div>
		<? 
			echo '<h4>' . yii\helpers\Html::a($model->title, Url::to('projects/' . $model->id)) . '</h4>';
		?>
	</div>
	

	<div>
		<? 
			if ($model->img) {
				echo Yii::$app->formatter->asImage('@web/img/projects/' . $model->img, ['width' => '100', 'align' => 'left', 'hspace' => '7']);
			} else {
				echo Yii::$app->formatter->asImage('@web/img/projects/default', ['width' => '100']);
			}
		?>
	</div>

	<div>
		<? 
			if ($model->img) {
				echo Yii::$app->formatter->asText($model->description);
			}
		?>
	</div>
</div>


<!--div>
	<? 
		/*Yii:$app->formatter->locale = 'ru_RU';
		echo Yii::$app->formatter->asDate($model->date, 'locale');*/
	?>
</div-->

