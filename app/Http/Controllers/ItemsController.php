<?php

namespace App\Http\Controllers;

use App\Models\Items;
use Illuminate\Support\Facades\DB;

class ItemsController extends Controller
{
    public function searchSku($sku)
    {
        return Items::where('s2_product_code', $sku)->get();
    }

    public function searchItId($it_id)
    {
        return Items::where('it_id', $it_id)->get();
    }
}
