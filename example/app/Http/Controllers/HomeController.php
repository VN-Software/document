<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller{

    public function getProduct(){
        $products = DB::table('product')->get();
        return view('home',['products' => $products]);
    }
}

?>
