<?php

namespace App\Controllers;

use T4\Mvc\Controller;

class AddNews
    extends Controller
{

    public function actionDefault()
    {
        $this->data->foo = $this->app->config->name;

    }

}