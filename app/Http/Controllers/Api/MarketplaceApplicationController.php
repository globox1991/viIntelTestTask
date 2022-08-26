<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\MarketplaceApplicationService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MarketplaceApplicationController extends Controller
{
    public function getIcon(Request $request): JsonResponse
    {
        [$imgSrc, $errMsg] = MarketplaceApplicationService::getIcon($request);

        return response()->json([
            'app_icon' => $imgSrc,
            'errMsg'   => $errMsg,
        ]);
    }
}
