<?
$this->breadcrumbs=array(
'Blog',
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
<? $title =($title)? $title : 'Our Blog'; ?>

	
		
		<h1><?=$title;?></h1>
	
		<? $this->widget('zii.widgets.CListView',array(
			'dataProvider'=>$model,
			'itemView'=>'_view',
			'summaryText'=>'',
			'enablePagination'=>true,
			'separator'=>'<hr>',
			//хз'pager'=>array('class'=>'CLinkPager'),
			'cssFile'=>Yii::app()->theme->baseUrl.'/css/ol.css',
		)); ?>



	<nav class="gridNav">
		<a href="#">&larr;</a>
		<a href="#">1</a>
		<a href="#">2</a>
		<a href="#" class="active">3</a>
		<a href="#">4</a>
		<a href="#">....</a>
		<a href="#">100</a>
		<a href="#">&rarr;</a>
	</nav>

	</div>
</div>