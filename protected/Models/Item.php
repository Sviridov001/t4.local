<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 23.12.2017
 * Time: 14:13
 */

namespace App\Models;
use T4\Orm\Model;

class Item extends Model
{
    static  protected $schema = [
        'columns' => [
            'news' => ['type' => 'text'],
            'autor' => ['type' => 'string'],
            'date' => ['type' => 'date'],
        ]
    ];

}