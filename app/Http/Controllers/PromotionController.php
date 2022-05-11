<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Support\Facades\DB;

class PromotionController extends Controller
{
    public function searchIdx($idx)
    {
        return Promotion::where('banner_view', 1)->where('idx', $idx)->get();
    }

}
