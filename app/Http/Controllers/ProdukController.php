<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class ProdukController extends Controller {
    /**
    * Display a listing of the resource.
    */

    public function index() {
        $product = DB::table( 'produk' )->get();
        $title = 'Produk';
        return view( 'produk',  compact( 'product', 'title' ) );
    }



    /**
    * Show the form for creating a new resource.
    */

    public function create() {
        return view( 'produk.create' );
    }

    /**
    * Store a newly created resource in storage.
    */

    // public function store( Request $request ) {
    //     $request->validate( [
    //         'title' => 'required|unique:posts|max:150',
    //         'body' => 'required',
    //     ] );
    //     $input = $request->all();
    //     $produk = Produk::create( $input );
    //     return back()->with( 'success', ' Post baru berhasil dibuat.' );
    //     $store =  DB::table( 'produk' )->insert( [
    //         ''
    //     ] )

    /**
    * Display the specified resource.
    */

    public function show( string $id ) {
        //
    }

    /**
    * Show the form for editing the specified resource.
    */

    public function edit( string $id ) {
        //
    }

    /**
    * Update the specified resource in storage.
    */

    public function update( Request $request, string $id ) {
        //
    }

    /**
    * Remove the specified resource from storage.
    */

    public function destroy( string $id ) {
        //
    }
}