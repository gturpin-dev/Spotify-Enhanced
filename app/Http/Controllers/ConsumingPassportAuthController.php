<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Integrations\ConsumingPassport\ConsumingPassportConnector;
use Illuminate\Http\RedirectResponse;

class ConsumingPassportAuthController extends Controller
{
    public function redirectToProvider( Request $request ): RedirectResponse {
        $connector         = new ConsumingPassportConnector( $request->user() );
        $authorization_url = $connector->getAuthorizationUrl();
        $state             = $connector->getState();

        $request->session()->put( 'state', $state );

        return redirect( $authorization_url );
    }

    public function handleProviderCallback( Request $request ): RedirectResponse {
        $current_user  = $request->user();
        $connector     = new ConsumingPassportConnector( $current_user );
        $authenticator = $connector->getAccessToken(
            code         : $request->input( 'code', '' ),
            state        : $request->input( 'state', '' ),
            expectedState: $request->session()->pull( 'state', '' ),
        );

        $current_user->storeConsumingPassportOAuthProvider( $authenticator );

        return to_route( 'dashboard' );
    }
}
