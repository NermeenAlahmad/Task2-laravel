<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    public function showProducts() {
        $title = "Welcome to my page i love laravel";
        $data = array (
        [
            'id'    => 1,
            'name'  => "Burger",
            'price' => 40
        ],
        [
            'id'    => 2,
            'name'  => "Pizza",
            'price' => 50
        ],
        [
            'id'    => 3,
            'name'  => "Pasta",
            'price' => 60
        ],
    );


        //compact method
        return view('product1', ["products" => $data]);

        // with method
        // return view ('product1') -> with ('title', $title);
    }
}
