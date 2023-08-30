<?php

namespace App\Http\Controllers;

use App\Models\CeCoefficient;
use App\Models\CharacteristicSnow;
use App\Services\SnowCalculationService;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Request $request)
    {
        $Ce = CeCoefficient::all();
        $cities = CharacteristicSnow::all();
        if ($request->method() == 'POST') {
            $service = new SnowCalculationService();
            $mu1 = $service->calcMu1($request->roofAngle);
            $snow = $service->calcSnow($mu1, $request->ce, 1, $request->snowValue);
            $data = ['variable' => $snow];
        }
        return view('index', ['ces' => $Ce, 'cities' => $cities, 'snow' => $snow ?? false]);
    }
}
