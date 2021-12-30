<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
         if(empty($_GET['id'])){
             return view('result',['noTaxId' => '查詢流程錯誤']);
         }
        // $question_categories_s = DB::table('class01s')->select('ques_s')->where('choice','S')->get();
        $getResultData = DB::table('class01s')->select('company','ques_s')->where('tax_id_no',$_GET['id'])->get();
        $resultData = json_decode($getResultData, JSON_UNESCAPED_UNICODE);
        Log::info($resultData);
        $ansArr = [];
        foreach(json_decode($resultData[0]['ques_s']) as $item){
            // Log::info($item);
            array_push($ansArr,$item);
        }

        // Log::info($ansArr);
        // return view('result', ['tt' => $tt]);
        // return view('result',['company'=> $resultData[0]['company'],'ques'=> $resultData[0]['ques_s']]);
        return view('result',['company'=> $resultData[0]['company'],'ques'=>$resultData[0]['ques_s']]);
        // return view('user.name', $users);
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
