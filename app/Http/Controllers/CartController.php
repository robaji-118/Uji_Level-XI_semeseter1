<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
// use App\models\permintaan;
use DB;

class CartController extends Controller {

    // 1. READ: Menampilkan semua data

    public function store( Request $req ) {
        $validated = $req->validate( [
            'email'     => 'required|email',
            'nama'      => 'required|string|min:5|max:255',
            'desain'  => 'required|desain',
            'size'      => 'required',
        ],

        [
            'email.required' => 'Email harus diisi',
            'desain.required' => 'Email harus diisi',
            // 'nama.required' => 'nama harus diisi',
            // 'comment.required' => 'keterangan harus diisi',
            // 'email.email' => 'Inputan harus berupa email',
            // 'nama.string' => 'nama harus diisi',
            // 'nama.min' => 'character harus 5',
        ] );

        $imageName = time() . '.' . $req->desain->extension();
        $req->desain->move( public_path( 'contact' ), $imageName );

        $insert = DB::table( 'permintaan_tabel' )->insert( [
            'email'     => $req->email,
            'nama'      => $req->nama,
            'desain'   => $imageName,
            'size'      => $req->size
        ] );

        if ( $insert ) {
            return redirect( 'cart/' );
        } else {
            return redirect()->back()->with( 'error', 'Gagal Input' );
        }
    }

    public function delete( $id ) {
        $delete = DB::table( 'permintaan_tabel' )->where( 'id', $id )->delete();

        if ( $delete ) {
            return redirect()->back()->with( 'success', 'Berhasil hapus' );
        } else {
            return redirect()->back()->with( 'error', 'Gagal hapus' );
        }
    }

    public function index() {
        $komentar = DB::table( 'permintaan_tabel' )->get();
        return view( 'cart', compact( 'komentar' ) );
    }


    public function edit( $id ) {



        $komentar = DB::table( 'permintaan_tabel' )->where( 'id', $id )->first();

        return view( 'edit', [ 'komentar' => $komentar ] );
    }

    public function update( request $req ) {


        $update = DB::table( 'permintaan_tabel' )->where ( 'id', $req->id )->update( [
            'email'     => $req->email,
            'nama'      => $req->nama,
            'desain'   => $req->desain,
            'size'   => $req->size
        ] );



        return redirect( 'cart/' );
    }


}