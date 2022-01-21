<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function getSessionData(Request $request){
        if ($request->session()->has('name')) {
            echo $request->session()->get('name');
        }
        else {
            echo "No data in the session";
        }
    }

    public function storeSessionData(Request $request) {
        $request->session()->put('name','Jennifer');
        echo "data has been added to the session";
    }

    public function deleteSessionData(Request $request) {
        $request->session()->forget('name');
        echo "data has been remove from the session";
    }
}
