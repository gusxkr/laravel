<?php

namespace App\Http\Controllers;

use App\Models\Items;
use Illuminate\Support\Facades\DB;

class ItemsController extends Controller
{
    public function searchSku($sku)
    {
        /*variation
        https://laravel.kr/docs/8.x/queries
        return DB::table('g5_shop_item')->where('s2_product_code', $sku)->get();
        $query = "select * from g5_shop_item where s2_product_code = " . "'$sku'";
        return DB::select($query);*/
        return Items::where('s2_product_code', $sku)->get();
    }

    public function searchItId($it_id)
    {
        return Items::where('it_id', $it_id)->get();
    }
}
