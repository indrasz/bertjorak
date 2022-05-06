<?php

namespace App\Http\Controllers;

class ConfigController  extends Controller
{
    public function clearRoute()
    {
        \Artisan::call('route:clear');
        \Artisan::call('cache:clear');
        \Artisan::call('optimize:clear');

        return redirect()->back();
    }
}
