<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\Lihatexport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Models\rak_buku;
use App\Exports\BukuExport;

class LihatController extends Controller
{
    public function lihatdata()
    {
    $users = DB::table('rak_buku')
            ->join('buku', 'rak_buku.id_buku', '=', 'buku.id')
            ->join('jenis_buku', 'rak_buku.id_jenis_buku', '=', 'jenis_buku.id')
            ->select('rak_buku.id', 'buku.judul', 'buku.tahun_terbit', 'jenis_buku.jenis')
            ->get();
            return view('lihatsemua')->with('rak_buku', $rak_buku);
    }
    public function lihatuser()
    {
    $user = DB::table('user')->get();

    return view('userlihat', ['user' => $user]);
    }
    public function export()
	{
		return Excel::download(new Lihatexport, 'Lihat0083.xlsx');
	}
}