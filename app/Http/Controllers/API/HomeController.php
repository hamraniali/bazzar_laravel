<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function bestGames()
    {
        $bestGames = DB::table('apps')->where('type' , 'game')->orderBy('downloadCount','desc')->limit(17)->get();
        $bestSofts = DB::table('apps')->where('type' , 'soft')->orderBy('downloadCount','desc')->limit(17)->get();
        $newestApps = DB::table('apps')->orderBy('created_at','desc')->limit(17)->get();
        $overwhelmingApps = DB::table('apps')->orderBy('commentCount','desc')->limit(17)->get();
        $lastUpdates = DB::table('apps')->orderBy('updated_at','desc')->limit(17)->get();
        return response()->json([
            'bestGames' => $bestGames,
            'bestSofts' => $bestSofts,
            'newestApps' => $newestApps,
            'overwhelmingApps' => $overwhelmingApps,
            'lastUpdates' => $lastUpdates,
        ]);
    }
}
