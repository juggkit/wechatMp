<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use yii\data\Pagination;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\mpArticleDetail;


class MpController extends Controller{

	public $layout = false; 

	
    public function actionIndex()
    {
		$query = mpArticleDetail::find();

        $list = $query->select('name')->distinct()->all();
        $baseUrl = Yii::$app->request->baseUrl;


        return $this->render('index', [
            'list' => $list,
            'baseUrl'=>$baseUrl,
           
        ]);
        // return $this->render('index');
    }

     public function actionDetail()
    {


    	$name = Yii::$app->request->get('name');

		$query = mpArticleDetail::find();

        $infos = $query->where(['name' => $name])->orderBy('datetime desc')->all();

        return $this->render('detail', [
            'infos' => $infos,
           
        ]);
    }






}
