<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use App\Models\Login;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        // first i check the username and if it exist in the datbase
        if (Login::where('name', '=', $request->name)->exists()) {

            $user = Login::where('name', '=', $request->name)->firstOrFail();

            // i check the provided password and see if that the exact password of that person,
            // and then if it is I render 10 recodrs of news

            if (Hash::check($request->password, $user->password)) {

                $news =  News::all()->take(10);
                return response()->json([
                    'status' => true,
                    'message' => "User Login successfully!",
                    'news' => $news
                ], 200);
            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'Invalide credentials, Please try agian',
                ]);
            }
        }
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
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        //
    }
}
