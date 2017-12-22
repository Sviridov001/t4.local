<?php

namespace App\Controllers;

use T4\Core\Std;
use T4\Mvc\Controller;

class Index
    extends Controller
{

    public function actionDefault()
    {
        $this->data->foo = $this->app->config->name;

/*        $this->data->foo = "Приветики!!!";
        $obj = new Std();
        echo $this->data->name;
        $obj->fill(11,22,33,44);
        echo $obj->getData();
        die;*/
    }

}