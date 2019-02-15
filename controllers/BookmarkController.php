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
use app\models\Bookmark;


class BookmarkController extends Controller{

	public $layout = false; 
    public $enableCsrfValidation=false;

	//展示书签内容
    public function actionIndex()
    {

        $query = Bookmark::find();
        $list = $query->where(['status' => '1'])->all();
       
        return $this->render('index', [
            'list' => $list           
        ]);
		
    }

    //展示表单
    public function actionForm()
    {
        
        return $this->render('form');
        
    }

    //添加书签
     public function actionAdd()
    {

        $bm_url = Yii::$app->request->post('bm_url');
        $bm_title = Yii::$app->request->post('bm_title');
        $bm_tag = Yii::$app->request->post('bm_tag');
        $model = new bookmark;
        $model->url = $bm_url;
        $model->title = $bm_title;
        $model->tag = $bm_tag;
        $model->status = 1;
        if ($model->save()){
            return $this->render('form');
        }
        else{
            return $this->render('fail');
        }

    	
    }

    //修改书签
     public function actionUpdate()
    {


    }

    //删除书签
     public function actionDel()
    {


        $name = Yii::$app->request->get('name');

        $query = mpArticleDetail::find();

        $infos = $query->where(['name' => $name])->orderBy('datetime desc')->all();

        return $this->render('detail', [
            'infos' => $infos,
           
        ]);
    }





}
