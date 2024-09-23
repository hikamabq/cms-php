<?php

namespace app\modules\admin\controllers;

use app\modules\admin\models\category\Category;
use app\modules\admin\models\kota\Kota;
use app\modules\admin\models\posts\Posts;
use yii\web\Controller;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $_SESSION['pages'] = 'default';
        return $this->render('index');
    }
}
