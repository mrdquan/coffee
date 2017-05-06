<?php

/**
 * Created by PhpStorm.
 * User: quando
 * Date: 06/05/2017
 * Time: 11:13 CH
 */
class HomeController extends FrontEndController
{
    public function actionIndex(){
        $lstNews = News::model()->findAll();
        $this->render('index', array('lstNews' => $lstNews));
    }
}