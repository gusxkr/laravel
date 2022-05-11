<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    public function searchSku($sku)
    {
        return Item::where('s2_product_code', $sku)->get();
    }

    public function searchItId($it_id)
    {
        return Item::where('it_id', $it_id)->get();
    }
}
