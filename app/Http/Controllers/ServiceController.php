<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceProvider;
use App\Models\ServiceRequest;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{

    public function service()
    {
        return view('user_services', [
            'service_providers' => ServiceProvider::all()
        ]);
    }

    public function request_service(Request $request)
    {
        ServiceRequest::create([
            'user_id' => Auth::id(),
            'service_provider_id' => $request->service_provider
        ]);
        return response()->json(['msg'=> true], 200);
    }
}
