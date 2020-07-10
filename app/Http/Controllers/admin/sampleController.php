<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Sample;
use App\CalonAnggota;
use App\subKriteria;

class sampleController extends Controller
{
    public function index() {
    $datas = Sample::orderBy('id', 'DESC')->paginate(10);
    $ca = CalonAnggota::all();
    $kriteria = subKriteria::all();
    return view('sample.index', compact('datas','ca','kriteria'));
    }


        public function store(Request $request) {
            $this->validate($request, [
                    'anggota_id' => ['required', 'integer'],
                    'id_subkriteria' => ['required', 'integer'],
                    'values' => ['required', 'string'],
                ]);
            $input = $request->all();
           Sample::create($input);
            return redirect('/sample')->with('flash_message', 'berhasil');
        }


        public function edit($id){
                    $coba =Sample::orderBy('id_sample', 'DESC')->paginate(10);
                    $datas =Sample::findOrFail($id);
                return view('sample.edit',compact('datas','coba'));
            }


        public function update(Request $request, $id) {
                $this->validate($request, [
                    'anggota_id' => ['required', 'integer'],
                    'id_subkriteria' => ['required', 'integer'],
                    'values' => ['required', 'string'],
                ]);

                $form_data = array(
                    'anggota_id' =>$request->anggota_id,
                    'id_subkriteria' => $request->id_subkriteria,
                    'values' => $request->values,
                );

           Sample::where('id',$id)->update($form_data);
            return redirect('/sample')->with('success', 'sample updated!');
    }

        public function destroy($id) {
           Sample::destroy($id);
            return redirect('/sample')->with('flash_message', 'sample deleted!');}

}


