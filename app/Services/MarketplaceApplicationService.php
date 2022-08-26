<?php

namespace App\Services;

use Exception;
use Illuminate\Http\Request;
use voku\helper\HtmlDomParser;

class MarketplaceApplicationService
{
    /**
     * @throws Exception
     */
    public static function getIcon(Request $request): string
    {
        $appId = $request->get('app');

        if (!$appId) {
            throw new Exception('Missing app parameter');
        }

        try {
            $htmlDomParser = HtmlDomParser::file_get_html("https://play.google.com/store/apps/details?id={$appId}");
        } catch (Exception $e) {
            throw new Exception('Unknown app id');
        }

        $fullscreenHeaderElement = $htmlDomParser->findOneOrFalse('.P9KVBf');

        $imgElement = $fullscreenHeaderElement ?
            $fullscreenHeaderElement->findOneOrFalse('.QhHVZd') :
            $htmlDomParser->findOneOrFalse('.tU8Y5c > div .wkMJlb .Mqg6jb > img');

        if (!$imgElement) {
            throw new Exception('Image element not found');
        }

        return $imgElement->getAttribute('src');
    }
}
