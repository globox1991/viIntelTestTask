<?php

namespace App\Http\Controllers;

use App\Services\MarketplaceApplicationService;
use Exception;
use Illuminate\Http\Request;

class MarketplaceApplicationController extends Controller
{
    public function getIcon(Request $request)
    {
        $imgSrc = '';
        $errMsg = '';

        try {
            $imgSrc = MarketplaceApplicationService::getIcon($request);
        } catch (Exception $e) {
            $errMsg = $e->getMessage();
        }

        return view('getAppIcon', compact('imgSrc', 'errMsg'));
    }
}
