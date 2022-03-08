<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$account = DB::table('account')->get();

    	// mengirim data pegawai ke view index
    	return view('index',['account' => $account]);

    }
}
