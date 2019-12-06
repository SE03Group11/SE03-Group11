<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ShopBrandController extends Controller
{
    public function index() {
        $items = DB::table('shop_brands')->paginate(10);

        /**
         * Đây là biến truyền từ controller xuống view
         */
        $data = array();
        $data['brands'] = $items;

        return view('admin.content.shop.brand.index', $data);
    }

}
