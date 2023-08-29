<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    // top表示
    public function top(): View
    {
        return view('top');
    }

    public function look(): View
    {
        # bedの商品配列
        $beds = DB::table('products')->where('kinds', '=', 1)->get();
        # pillowの商品配列
        $pillows = DB::table('products')->where('kinds', '=', 3)->get();
        # lightの商品配列
        $lights = DB::table('products')->where('kinds', '=', 2)->get();
        $images = DB::table('images')->get();

        # dd($products, $images);

        return view('look',['beds' => $beds,
                            'pillows' => $pillows,
                            'lights' => $lights,
                            'images' => $images
                           ]);
    }

    // top表示
    public function product($id): View
    {
        $product = DB::table('products')->where('id', '=', $id)->first();
        $img = DB::table('images')->where('id', '=', $product->img_id)->first();
        $imgPass = $img->img_pass;

        // dd($product);
        return view('product',['product' => $product,
                               'imgPass' => $imgPass
                              ]);
    }
}
