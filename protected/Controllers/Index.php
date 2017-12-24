<?php

namespace App\Controllers;

use App\Models\Item;
use T4\Core\Std;
use T4\Mvc\Controller;

class Index
    extends Controller
{

    public function actionDefault($body='test')
    {
        //$this->data->foo = $this->app->config->name;

        $mod = New Item();
        $mod->news = $body;
        $mod->autor = 'admin';
        $mod->date = '23-12-2017';
        $mod->save();

        $dat = Item::findAll();
       // $coun = $dat->count();

 //       var_dump($dat);
/*        foreach ($dat as $key => $value ){
            var_dump( $key);
            var_dump( $value);
            echo "br />\n";
            echo "***************************************************************";
        }
die;*/
        $this->data->foo[] = $dat;
      //  $this->data->foo = $dat->news;
        //echo ($dat->news);



/*        $this->data->foo = "Приветики!!!";
        $obj = new Std();
        echo $this->data->name;
        $obj->fill(11,22,33,44);
        echo $obj->getData();
        die;*/
    }

}