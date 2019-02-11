<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Tailor;
use PDF;
use DB;
use Illuminate\Support\Facades\View;

class ReportController extends Controller
{
    public function pdf(Request $request) {
        $tailors = DB::table('tailors')->where('verification_type', '=', '1')->get();

        view()->share('tailors', $tailors);

        if($request->has('download')){
            $pdf = PDF::loadView('admin.report.report');
            return $pdf->download('report.pdf');
        }

        return view('admin.report.index');
    }
}
