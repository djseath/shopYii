<?php

class BlogController extends Controller
{
	public function actionIndex(){
		$this->render('index');
	}


	public function actionView($id){
		$this->render('view');
	}



	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}


}
