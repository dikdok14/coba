<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tindakan;

class TindakanController extends Controller
{
    public function index()
    {
        $t = Tindakan::all();
        return view('tindakan.index',compact(['t']));
    }

    public function simpan(Request $r)
    {
        $s = Tindakan::create($r->all());
        return redirect('/tindakan');
    }

    public function formedit($id)
    {
        $p = Tindakan::find($id);
        return view('tindakan.editview',compact(['p']));
    }

    public function rubah(Request $r , $id)
    {
        $g = Tindakan::find($id);
        $g->update($r->all());
        return redirect('/tindakan');
    }

    public function hapus($id)
    {
        $h = Tindakan::find($id);
        $h->delete();
        return redirect('/tindakan');
    }
}
