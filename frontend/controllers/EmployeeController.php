<?php

namespace frontend\controller;

class EmployeeController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
