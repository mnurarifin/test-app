<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
class PostController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$post = DB::table('post')->get();

    	// mengirim data pegawai ke view index
    	return view('index',['post' => $post]);

    }
}
