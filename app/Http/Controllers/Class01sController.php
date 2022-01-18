<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

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
        // Log::info($per_cato);


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
        $storagePath_upload = Storage::put('/public/class01/upload', $request['upload']);
        $fileName_upload = basename($storagePath_upload);
        // Log::info($fileName_upload);

        $storagePath_upload2 = Storage::put('/public/class01/upload2', $request['upload2']);
        $fileName_upload2 = basename($storagePath_upload2);
        // Log::info($fileName_upload2);

        $storagePath_upload3 = Storage::put('/public/class01/upload3', $request['upload3']);
        $fileName_upload3 = basename($storagePath_upload3);
        // Log::info($fileName_upload3);
        
        $req = json_decode($request['data'],JSON_UNESCAPED_UNICODE);

        $data = [
            'company' => $req['company'],
            'tax_id_no' => $req['tax_id_no'],
            'establishment' => $req['establishment'],
            'capital' => $req['capital'],
            'employees' => $req['employees'],
            'industry' => $req['industry'],
            'business' => $req['business'],
            'address' => $req['address'],
            'leader' => json_encode($req['leader'],JSON_UNESCAPED_UNICODE),
            'succeed' => $req['succeed'],
            'amount_scale' => $req['amount_scale'],
            'change_classes' => $req['change_classes'],
            'upload' => '/storage/class01/upload/'.$fileName_upload,
            'upload2' => '/storage/class01/upload2/'.$fileName_upload2,
            'upload3' => '/storage/class01/upload3/'.$fileName_upload3,
            'ques_s' => json_encode($req['ques_s'],JSON_UNESCAPED_UNICODE),
            'ques_m' => json_encode($req['ques_m'],JSON_UNESCAPED_UNICODE),

            'created_at' => date('y-m-d h:i:s'),
            'updated_at' => date('y-m-d h:i:s')
        ];
        

        //先查有沒有已存在統編
        $getExisted = DB::table('class01s')->where('tax_id_no',$data['tax_id_no'])->get();
        $getFilled = json_decode($getExisted,JSON_UNESCAPED_UNICODE);
        if(empty($getFilled)){
            DB::table('class01s')->insert(
                $data
            );
            // Log::info('寫入資料');
            return array('code'=>1000,'msg'=>'已送出成功');
        }else{
            return array('code'=>2000,'msg'=>'該公司已填寫過');
        }
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


    public function handUpload(Request $request){
        
        $storagePath_upload = Storage::put('/public/class01/upload', $request['upload']);
        $fileName_upload = basename($storagePath_upload);
        Log::info($fileName_upload);

        $storagePath_upload2 = Storage::put('/public/class01/upload2', $request['upload2']);
        $fileName_upload2 = basename($storagePath_upload2);
        Log::info($fileName_upload2);

        $storagePath_upload3 = Storage::put('/public/class01/upload3', $request['upload3']);
        $fileName_upload3 = basename($storagePath_upload3);
        Log::info($fileName_upload3);


        $data = [
            'company' => $request['company'],
            'tax_id_no' => $request['tax_id_no'],
            'establishment' => $request['establishment'],
            'capital' => $request['capital'],
            'employees' => $request['employees'],
            'industry' => $request['industry'],
            'business' => $request['business'],
            'address' => $request['address'],
            'leader' => json_encode($request['leader']),
            'succeed' => $request['succeed'],
            'amount_scale' => $request['amount_scale'],
            'change_classes' => $request['change_classes'],
            'upload' => '/storage/class01/upload/'.$fileName_upload,
            'upload2' => '/storage/class01/upload2/'.$fileName_upload2,
            'upload3' => '/storage/class01/upload3/'.$fileName_upload3,
            'ques_s' => json_encode($request['ques_s']),
            'ques_m' => json_encode($request['ques_m']),

            'created_at' => date('d-m-y h:i:s'),
            'updated_at' => date('d-m-y h:i:s')
        ];
        

        DB::table('class01s')->insert(
            $data
        );

        return 'OKOK';
    }
}
