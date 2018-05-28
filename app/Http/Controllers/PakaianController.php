<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Model\Pakaian;
use Validator;
use Response;

class PakaianController extends Controller
{
    protected $rules = [
        'nama_pakaian' => 'required|min:8|regex:/^[a-z ,.\'-]+$/i',
        'model_pakaian' => 'required|min:8|regex:/^[a-z ,.\'-]+$/i',
        'harga' => 'required',
        'stok_pakaian' => 'required'
    ];

    public function index()
    {
        $pakaians = Pakaian::all();

        return view('admin.pakaian.index', ['pakaians' => $pakaians]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validator = Validator::make(Input::all(), $this->rules);

        if($validator->fails()) {
            return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        } else {
            $pakaian = new Pakaian();
            $pakaian->nama_pakaian = $request->nama_pakaian;
            $pakaian->model_pakaian = $request->model_pakaian;
            $pakaian->harga = $request->harga;
            $pakaian->stok_pakaian = $request->stok_pakaian;
            $pakaian->save();

            return response()->json($pakaian);
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
