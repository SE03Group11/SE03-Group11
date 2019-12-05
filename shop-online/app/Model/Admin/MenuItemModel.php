<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class MenuItemModel extends Model
{
    //
    public $table = 'menu_items';

    public static function getTypeOfMenuItem(){
        $types = array();
        $types [1] = 'Shop category';
        $types [2] = 'Shop product';
        $types [3] = 'Content category';
        $types [4] = 'Content post';
        $types [5] = 'Content page';
        $types [6] = 'Content tag';
        $types [7] = 'Custom Link';

        return $types;
    }

}
