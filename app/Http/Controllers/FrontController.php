<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\setting;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Constraint\Count;
use Symfony\Component\HttpFoundation\Response;

class FrontController extends Controller
{
    //
    public function index(Request $request)
    {
        $Services = Service::where('key','LIKE', '%' . $request->search . '%')->get();

        return response()->view('front.parent',compact('Services' ));
    }

}
