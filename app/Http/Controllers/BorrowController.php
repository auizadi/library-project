<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BorrowController extends Controller
{
    //
    public function index(Request $request){
        if($request->keyword){
            $bukus = Buku::search($request->keyword)->get();
        }else{
            $bukus = Buku::all();
        }

        return view('user.borrow', compact('bukus'));
    }
}
