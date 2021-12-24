<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class Class01sController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $users = DB::select('select * from users where 1', [1]);
        $questions = DB::table('questions')->select('category_id', 'content')->get();
        $question_categories_s = DB::table('question_categories')->select('options', 'category')->where('choice','S')->get();
        $question_categories_m = DB::table('question_categories')->select('options', 'category','customize')->where('choice','M')->get();
        $ques = json_decode($questions, JSON_UNESCAPED_UNICODE);
        $ques_cate_s = json_decode($question_categories_s, JSON_UNESCAPED_UNICODE);
        $ques_cate_m = json_decode($question_categories_m, JSON_UNESCAPED_UNICODE);

        // $quesCount = DB::table('questions')->where('category_id','1')->count();
        $quesCount = DB::table('questions')->select(DB::raw('count(*) as total'))->groupBy('category_id')->get();

        // Log::info(gettype($quesCount));

        $per_cato = [];
        $n = 0;
        array_push($per_cato, 0);
        foreach ($quesCount as $key => $i) {
            if ($key == count($quesCount) - 1) {
                continue;
            }
            array_push($per_cato, $n += $i->total);
        }
        Log::info($per_cato);


        // Log::info($ques_cate);

        // foreach ($questions as $key => $item) {
        // }


        // Log::info($ques);
        // Log::info(json_decode($questions));
        // $tt = json_decode($users)[0]->name;
        return view('class01s', ['ques' => $ques, 'ques_cate_s' => $ques_cate_s, 'ques_cate_m' => $ques_cate_m, 'per_cato' => $per_cato]);
        // return view('class01s');
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
        $request = $request['data'];
        Log::info('112233');
        Log::info($request);


        $data = [
            'company' => $request['company'],
            'tax_id_no' => $request['tax_id_no'],
            'establishment' => $request['establishment'],
            'capital' => $request['capital'],
            'employees' => $request['employees'],
            'industry' => $request['industry'],
            'business' => $request['business'],
            'address' => $request['address'],
            'leader' => $request['leader'],
            'succeed' => $request['succeed'],
            'amount_scale' => $request['amount_scale'],
            'change_classes' => $request['change_classes'],
            'proposal' => $request['proposal'],
            'statement' => $request['statement'],
            'company_registration' => $request['company_registration'],
            'topic_01' => $request['topic_01'],
            'topic_02' => $request['topic_02'],
            'upload' => $request['upload'],
            'ques_s' => $request['ques_s'],

            'created_at' => date('d-m-y h:i:s'),
            'updated_at' => date('d-m-y h:i:s')
        ];


        DB::table('class01s')->insert(
            $data
        );

        return '999555';
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
