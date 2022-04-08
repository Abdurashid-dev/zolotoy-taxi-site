<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Models\Service;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FrontendController extends Controller
{

    public function index()
    {
        $services = DB::table('services')->get();
        $screenshots = DB::table('screenshots')->get();
        $designs = DB::table('designs')->get();
        foreach ($designs as $key => $design) {
            if ($key % 2 == 0) {
                $left[] = $design;
            } else {
                $right[] = $design;
            }
        }
//        dd($right, $left);
        return view('welcome', compact('services', 'screenshots', 'right', 'left'));
    }
}
