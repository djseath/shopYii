<?
$this->breadcrumbs=array(
	'Blog'=>array(/*Узнать как делать url*/),
	$model->title
);
?>


<div class="center">
	<?$this->widget('zii.widgets.CBreadcrumbs', array(
	    'links'=>$this->breadcrumbs,
	    'separator'=>"",
	    'tagName'=>'div'
	));?>
</div>


<div class="center">
	


	<? $this->renderPartial('_sidebar'); ?>


	<div class="col-3-4 last">
			<h1><?=$model->title;?></h1>
			<?=$model->text;?>
			<?$this->renderPartial('_statusbar',array('data'=>$model));?>
	<hr>




<h3>Comments</h3>
<div class="comment">
  <p>
  	<img src="<?=Yii::app()->theme->baseUrl;?>/files/2.jpg">
    <b>Mike Example, <i>03.11.2012</i></b>
    Suspendisse at placerat turpis. Duis luctus erat vel magna pharetra aliquet. Maecenas tincidunt feugiat ultricies. Phasellus et dui risus. Vestibulum adipiscing, eros quis lobortis dictum. 
  </p>

  <p>
  	<img src="<?=Yii::app()->theme->baseUrl;?>/files/2.jpg">
    <b>Mike Example, <i>03.11.2012</i></b>
		Hi, this is a comment.
		To delete a comment, just log in and view the post's comments. There you will have the option to edit or delete them.

  </p>
</div>



<?
$this->renderPartial('_form');
?>

	</div>
</div>




