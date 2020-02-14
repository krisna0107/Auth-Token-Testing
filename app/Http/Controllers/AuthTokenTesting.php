<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\JWT\Error\IdTokenVerificationFailed;
use Kreait\Firebase\JWT\IdTokenVerifier;

class AuthTokenTesting extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projectId = 'amigo-af350';
        $idToken = 'eyJhbGciOiJSUzI1NiIsImtpZCI6IjYzZTllYThmNzNkZWExMTRkZWI5YTY0OTcxZDJhMjkzN2QwYzY3YWEiLCJ0eXAiOiJKV1QifQ.eyJpc3MiOiJodHRwczovL3NlY3VyZXRva2VuLmdvb2dsZS5jb20vYW1pZ28tYWYzNTAiLCJhdWQiOiJhbWlnby1hZjM1MCIsImF1dGhfdGltZSI6MTU4MTY3MzczOCwidXNlcl9pZCI6ImlwSDFVdWZyeVBXc3BWUWxNUTNzejhlZWIwdDIiLCJzdWIiOiJpcEgxVXVmcnlQV3NwVlFsTVEzc3o4ZWViMHQyIiwiaWF0IjoxNTgxNjczNzM4LCJleHAiOjE1ODE2NzczMzgsImVtYWlsIjoia0BrLmNvbSIsImVtYWlsX3ZlcmlmaWVkIjpmYWxzZSwiZmlyZWJhc2UiOnsiaWRlbnRpdGllcyI6eyJlbWFpbCI6WyJrQGsuY29tIl19LCJzaWduX2luX3Byb3ZpZGVyIjoicGFzc3dvcmQifX0.my0oOowKl8dg5P4Z33PAus8pOSS9GSuzeKXXUuyst55YfNuNk1WoqyFvDjOwb7HDtvVJ-R28vGXTcYWdQKFOqqE70vWMPsXVrj-RQvbFlNbCODHEWg6NYG1e5lGpzcmzWYowj38XdCimbU1FDBMZYPQfpXfyeTvGNmbAhQrDCDqPg0HPZ4UnGFR4K1tkd6OpULzWQlSYw3bPduHOhzzYFkruP4EMQGeQBuKYhgbPOX29Li7GOEIThk5YObkK2a6k7f_nr5S8xooXsRCXuO3xb01o38PR_v4r-rivc30I8q8vX_wW2Mvo6vAyLZ3OWyYLMAcFB6Ecfv_7AkG07aj01w'; // An ID token given to your backend by a Client application

        $verifier = IdTokenVerifier::createWithProjectId($projectId);
        $token = $verifier->verifyIdToken($idToken);
        
        return json_encode($token->payload(), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); //json_encode($token->headers(), JSON_PRETTY_PRINT);

        // $verifier = IdTokenVerifier::createWithProjectId($projectId);

        // try {
        //     $token = $verifier->verifyIdToken($idToken);
        // } catch (IdTokenVerificationFailed $e) {
        //     echo $e->getMessage();
        //     // Example Output:
        //     // The value 'eyJhb...' is not a verified ID token:
        //     // - The token is expired.
        //     exit;
        // }

        // try {
        //     $token = $verifier->verifyIdTokenWithLeeway($idToken, $leewayInSeconds = 10000000);
        // } catch (IdTokenVerificationFailed $e) {
        //     print $e->getMessage();
        //     exit;
        // }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
