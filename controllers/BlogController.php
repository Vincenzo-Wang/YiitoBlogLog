<?php
namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Blog;

class BlogController extends Controller
{
    public function  actionAdd()
    {
        if(Yii::$app->request->isPost)
        {
            //生成模型
            $model = new Blog();
            //接收表单
            $model->attributes = Yii::$app->request->post();
            //验证表单
            if($model->insert())
            {
                return $this->redirect(['blog/lst']);
            }
            else
            {
                $model->getErrors();
            }
        }
        return $this->render('add');
    }
//    public $layout = 'blog';
    public function actionLst()
    {
        return $this->render('lst',
            [
                'name'=>'王聪',
                'age'=>18,
            ]);
    }
}