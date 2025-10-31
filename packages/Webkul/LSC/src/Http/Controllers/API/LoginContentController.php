<?php

namespace Webkul\LSC\Http\Controllers\API;

use Illuminate\Http\Response;
use Webkul\Shop\Http\Controllers\API\APIController;

class LoginContentController extends APIController
{
    /**
     * Login dropdown content html for desktop.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getLoginDesktopDropdownHtml()
    {
        return response()->json([
            'data' => view('lsc::shop.home.login-desktop-dropdown')->render(),
        ], Response::HTTP_OK);
    }

    /**
     * Login dropdown content html for mobile.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getLoginMobileDropdownHtml()
    {
        return response()->json([
            'data' => view('lsc::shop.home.login-mobile-dropdown')->render(),
        ], Response::HTTP_OK);
    }

    /**
     * Login drawer content html for mobile.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getLoginMobileDrawerHtml()
    {
        return response()->json([
            'data' => view('lsc::shop.home.login-mobile-drawer')->render(),
        ], Response::HTTP_OK);
    }
}
