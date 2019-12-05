<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class ConfigController extends Controller
{
    //
    public function index(){
        $items = DB::table('content_pages')->paginate(10);

        /**
         * Đây là biến truyền từ controller xuống view
         */
        $data = array();
        $data['pages'] = $items;

        return view('admin.content.content.page.index', $data);
    }
    public function store(){

    }
}
