<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Product;
use DB;

class PageController extends Controller {

    public function home() {
        return view( 'home', [ 'title' => 'home' ] );
    }

    public function about() {
        return view( 'about', [ 'title' => 'about' ] );
    }

    public function produk() {
        return view( 'produk', [ 'title' => 'produk' ] );
    }

    public function contact() {
        return view( 'contact', [ 'title' => 'contact' ] );
    }

    public function cart() {
        $komentar = DB::table( 'permintaan_tabel' )->get();
        return view( 'cart', compact( 'komentar' ) );
    }

}
