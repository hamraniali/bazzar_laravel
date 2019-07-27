<?php

namespace App\Http\Controllers\API;

use App\App;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class AppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return Response
     */
    public function show($id)
    {
        if (App::where('id', $id)->count() == 1) {
            $app = App::where('id', $id)->first();
            return response()->json($app);
        }

        return response(['status' => 'error', 'message' => 'برنامه یافت نشد']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\App $app
     * @return Response
     */
    public function update(Request $request, App $app)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\App $app
     * @return Response
     */
    public function destroy(App $app)
    {
        //
    }
}
