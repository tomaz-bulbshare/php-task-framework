<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;
use App\Utils\OpenMeteotWeatherCode;

class Home extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, OpenMeteotWeatherCode;

    public function index(Request $request, Response $response) {
        return view('welcome', ['country_name' => '']);
    }

    public static function getWeatherCodeString(int $value) {
        echo (new class { use OpenMeteotWeatherCode; })->getStringFromCode($value);
    }
}
