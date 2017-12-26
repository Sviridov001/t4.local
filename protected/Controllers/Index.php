<?php

namespace App\Controllers;

use App\Models\Item;
use T4\Core\Std;
use T4\Mvc\Controller;

class Index
    extends Controller
{

    public function actionDefault()
    {
        $dat = Item::findAll();
       // var_dump($dat);
        $this->data->items = $dat;
/*        $this->data->foo = "Приветики!!!";
        $obj = new Std();
        echo $this->data->name;
        $obj->fill(11,22,33,44);
        echo $obj->getData();
        die;*/
    }
    public function actionAdd($article,$body='test')
    {
        //$this->data->foo = $this->app->config->name;

        $mod = New Item();
        $mod->article = $article;
        $mod->news = $body;
        $mod->autor = 'admin';
        $mod->date = date('Y-m-d') ;
        $mod->save();
        $this->redirect('/index');
    }
    public function actionDelete ($id)
    {
        $it = Item::findByPK($id);
        $it->delete();
        $this->redirect('/index');
    }


}