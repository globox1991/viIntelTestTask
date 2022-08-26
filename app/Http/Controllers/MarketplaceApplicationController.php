<?php

namespace App\Http\Controllers;

use App\Services\MarketplaceApplicationService;
use Illuminate\Http\Request;

class MarketplaceApplicationController extends Controller
{
    public function getIcon(Request $request)
    {
        [$imgSrc, $errMsg] = MarketplaceApplicationService::getIcon($request);

        return view('getAppIcon', compact('imgSrc', 'errMsg'));
    }
}
