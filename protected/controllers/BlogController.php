<?php

class BlogController extends Controller
{

	public $modelClass = "Blog";


	public function actionIndex(){
		//$model = CActiveRecord::model($this->modelClass)->findAll();
		$dataProvider = new CActiveDataProvider($this->modelClass,
			array(
				'pagination'=>array(
	        		'pageSize'=>2,
	        		),
        	)
        );
		
		$this->render('index' ,array(
			"model"=>$dataProvider));

	}


	public function actionCat($id){
		$criteria=new CDbCriteria;
		$criteria->condition = 'blog_cat.id_cat = :id_c';
		
		$criteria->join = "LEFT JOIN blog_cat ON blog_cat.id_blog = id";
		$criteria->params = array(':id_c'=>$id);
		
		
		$dataProvider = new CActiveDataProvider($this->modelClass,
			array(
				'criteria'=>$criteria,
				'pagination'=>array(
	        		'pageSize'=>2,
	        		),
        	)
        );

        $cat = BlogCatList::model()->findByPk($id);

		$this->render('index' ,array(
			"model"=>$dataProvider,
			"title" => $cat->title,
			));
	}



	public function actionView($id){
		$model = CActiveRecord::model($this->modelClass)->findByPk($id);
		$this->render('view', array(
				'model'=>$model,
			));
	}

	public static function getCategories(){
		return Blog::getCategories();
	}
}
