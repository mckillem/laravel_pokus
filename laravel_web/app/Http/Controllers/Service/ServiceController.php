<?php

namespace app\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ServiceController extends Controller
{
    public function index(): View
    {
        $services = DB::select('select * from services');

        return view('service.index', ['services' => $services]);
    }

    public function detail(string $url): View
    {
        $service = DB::table("services")->where('url', $url)->first();

        return view('service.detail', ['service' => $service]);
    }
}
