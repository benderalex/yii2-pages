<?php
namespace benderalex\pages\controllers;

use Yii;
use yii\web\Controller;
use benderalex\pages\models\Tests;

class TestController extends Controller
{
    public $layout = 'main';
    public function actionIndex()
    {
        // регистрируем ресурсы:
        \benderalex\pages\TestsAssetsBundle::register($this->view);
        $datas = Tests::find()->all();
        return $this->render('index',[
            'datas' => $datas
        ]);
    }
}