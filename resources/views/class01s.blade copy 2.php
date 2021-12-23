<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{url('/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <div class="d-flex justify-content-center my-3">
        <img class="logo" src="{{url('/img/logo.svg')}}" alt="">
    </div>
    <div class="container">
        <h3 class="bg-brand text-white rounded-3 p-2 text-center">標竿企業實戰班</h3>
        <!-- <form action="/class01s" method="post"> -->
        @csrf
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title text-brand">第一部分:基本資料</h5>
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="input01" class="form-label ">公司名稱</label>
                        <input type="text" class="form-control" id="company" name="company">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="input02" class="form-label ">統一編號</label>
                        <input type="text" class="form-control" id="tax_id_no" name="tax_id_no">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="input03" class="form-label ">創立日期(西元年)</label>
                        <input type="text" class="form-control" id="establishment" name="establishment">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="input04" class="form-label ">資本額(萬元)</label>
                        <input type="text" class="form-control" id="capital" name="capital">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="input05" class="form-label ">員工人數</label>
                        <input type="text" class="form-control" id="employees" name="employees">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="input06" class="form-label ">行業別</label>
                        <select class="form-select" aria-label="Default select example" id="industry" name="industry">
                            <option selected>請選擇</option>
                            <option value="製造業">製造業</option>
                            <option value="住宿及餐飲業">住宿及餐飲業</option>
                            <option value="批發及零售業">批發及零售業</option>
                            <option value="專業、科學、技術服務業">專業、科學、技術服務業</option>
                            <option value="營建工程業">營建工程業</option>
                            <option value="其他服務業">其他服務業</option>
                            <option value="其他行業">其他行業</option>
                        </select>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="input07" class="form-label ">主要業務</label>
                        <input type="text" class="form-control" id="business" name="business">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="input08" class="form-label ">公司地址</label>
                        <input type="text" class="form-control" id="address" name="address">
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h5 class="card-title text-brand">第二部分：參與計畫接班梯隊</h5>
                    <div>
                        <a class="btn btn-secondary" id="delete_btn" style="display: none;"> 清除</a>
                        <a class="btn bg-brand text-white" id="add_btn"> 新增</a>
                    </div>
                </div>
                <p>※參與團隊須包含企業接班人或高階主管職之企業領袖，可自行增列表格</p>
                <div class="row leader01 border-bottom py-3 my-3">
                    <div class="mb-3 col-md-3">
                        <label for="input09-01" class="form-label">姓名1</label>
                        <input type="text" class="form-control" id="leader-01" name="leader-01">
                    </div>
                    <div class="mb-3 col-md-3">
                        <label for="input09-02" class="form-label">部門職稱</label>
                        <input type="text" class="form-control" id="leader-02" name="leader-02">
                    </div>
                    <div class="mb-3 col-md-3">
                        <label for="input09-03" class="form-label">連絡電話</label>
                        <input type="text" class="form-control" id="leader-03" name="leader-03">
                    </div>
                    <div class="mb-3 col-md-3">
                        <label for="input09-04" class="form-label">E-MAIL</label>
                        <input type="text" class="form-control" id="leader-04" name="leader-04">
                    </div>
                    <div class="mb-3 col-md-3">
                        <label for="input09-05" class="form-label">業務簡介</label>
                        <input type="text" class="form-control" id="leader-05" name="leader-05">
                    </div>
                </div>
                <div class="row leader02 border-bottom py-3 my-3" style="display: none;">
                    <div class="mb-3 col-md-3">
                        <label for="input09-06" class="form-label">姓名2</label>
                        <input type="text" class="form-control" id="leader-06" name="leader-06">
                    </div>
                    <div class="mb-3 col-md-3">
                        <label for="input09-07" class="form-label">部門職稱</label>
                        <input type="text" class="form-control" id="leader-07" name="leader-07">
                    </div>
                    <div class="mb-3 col-md-3">
                        <label for="input09-08" class="form-label">連絡電話</label>
                        <input type="text" class="form-control" id="leader-08" name="leader-08">
                    </div>
                    <div class="mb-3 col-md-3">
                        <label for="input09-09" class="form-label">E-MAIL</label>
                        <input type="text" class="form-control" id="leader-09" name="leader-09">
                    </div>
                    <div class="mb-3 col-md-3">
                        <label for="input09-10" class="form-label">業務簡介</label>
                        <input type="text" class="form-control" id="leader-10" name="leader-10">
                    </div>
                </div>
                <div class="row leader03 border-bottom py-3 my-3" style="display: none;">
                    <div class="mb-3 col-md-3">
                        <label for="input09-11" class="form-label">姓名3</label>
                        <input type="text" class="form-control" id="leader-11" name="leader-11">
                    </div>
                    <div class="mb-3 col-md-3">
                        <label for="input09-12" class="form-label">部門職稱</label>
                        <input type="text" class="form-control" id="leader-12" name="leader-12">
                    </div>
                    <div class="mb-3 col-md-3">
                        <label for="input09-13" class="form-label">連絡電話</label>
                        <input type="text" class="form-control" id="leader-13" name="leader-13">
                    </div>
                    <div class="mb-3 col-md-3">
                        <label for="input09-14" class="form-label">E-MAIL</label>
                        <input type="text" class="form-control" id="leader-14" name="leader-14">
                    </div>
                    <div class="mb-3 col-md-3">
                        <label for="input09-15" class="form-label">業務簡介</label>
                        <input type="text" class="form-control" id="leader-15" name="leader-15">
                    </div>
                </div>
            </div>
        </div>


        <div class="card mb-3">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h5 class="card-title text-brand">第三部分：企業預期投入資源</h5>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-12">
                        <label for="input10" class="form-label ">企業接班情形</label>
                        <select class="form-select" aria-label="Default select example" id="succeed" name="succeed">
                            <option selected>請選擇</option>
                            <option value="(1)接班人已負責公司整體事務">(1)接班人已負責公司整體事務</option>
                            <option value="(2)接班人已著手負責公司部分專案">(2)接班人已著手負責公司部分專案</option>
                            <option value="(3)接班人尚未負責公司事務">(3)接班人尚未負責公司事務</option>
                        </select>
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="input11" class="form-label ">投入金額規模</label>
                        <p>(例:投入 51 至 100 萬，導入光學檢測系統優化生產流程)</p>
                        <select class="form-select" aria-label="Default select example" id="amount_scale-01" name="amount_scale-01">
                            <option selected>請選擇</option>
                            <option value="50 萬以下，導入：">50 萬以下</option>
                            <option value="51 至 100 萬，導入：">51 至 100 萬</option>
                            <option value="101 萬以上，導入：">101 萬以上</option>
                        </select>
                        <label for="input09-15" class="form-label ">導入：</label>
                        <input type="text" class="form-control" id="amount_scale-02" name="amount_scale-02">
                    </div>
                </div>
            </div>
        </div>


        <div class="card mb-3">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h5 class="card-title text-brand">第四部分：其他</h5>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-12">
                        <label for="input12" class="form-label ">如實戰班額度已滿，是否同意由委員決議轉入共學班：</label>
                        <select class="form-select" aria-label="Default select example" id="change_classes" name="change_classes">
                            <option selected>請選擇</option>
                            <option value="同意">同意</option>
                            <option value="不同意">不同意</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h5 class="card-title text-brand">第五部分：上傳資料</h5>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-12">
                        <label for="input13" class="form-label ">提案計畫書(上傳格式WORD、PDF)</label>
                        <input type="file" class="form-control" id="proposal" name="proposal">
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="input14" class="form-label ">曾執行政府計畫揭露聲明書(上傳格式PDF、JPG、PNG)</label>
                        <input type="file" class="form-control" id="statement" name="statement">
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="input15" class="form-label ">公司登記證明文件(上傳格式PDF、JPG、PNG)</label>
                        <input type="file" class="form-control" id="company_registration" name="company_registration">
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-body">
                <div class="pb-3">
                    <h5 class="card-title text-brand">企業數位化程度健診</h5>
                    <p>以下請就公司運用數位工具輔助營運現況回答</p>
                </div>
                <div class="row">
                    @foreach ($ques as $key => $item)


                    @if ($key == $per_cato[0])
                    <h3>{{$ques_cate_s[0]['category']}}</h3>
                    @endif
                    @if ($key == $per_cato[1])
                    <h3>{{$ques_cate_s[1]['category']}}</h3>
                    @endif
                    @if ($key == $per_cato[2])
                    <h3>{{$ques_cate_s[2]['category']}}</h3>
                    @endif
                    
                    <div class="mb-3 col-md-12 ansCount">
                        <label for="inputx" class="form-label ">{{$key+1}}. {{$item['content']}}</label>
                        <div class="row">
                            

                            @foreach (json_decode($ques_cate_s[0]['options']) as $key2 => $cate_item)
                            <div class="form-check mx-3">
                                <input class="form-check-input" type="radio" name="ans{{$key+1}}" id="ans{{$key}}-{{$key2}}" value="{{$key2+1}}">
                                <label class="form-check-label" for="ans{{$key}}-{{$key2}}">
                                    {{$cate_item}}
                                </label>
                            </div>
                            @endforeach



                        </div>
                    </div>

                    @endforeach
                </div>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-body">
                <div class="pb-3">
                    <h5 class="card-title text-brand">第三部分：企業需求及準備</h5>
                </div>
                <div class="row">
                    @foreach ($ques_cate_m as $key => $cate_item_m)
                    <div class="mb-3 col-md-12">
                        <label for="" class="form-label ">{{$cate_item_m['category']}}</label>
                        
                        @foreach (json_decode($ques_cate_m[$key]['options']) as $key => $cate_options)
                        <div class="form-check mx-3">
                            <input class="form-check-input" type="checkbox" value="m-{{$key}}-{{$key2}}" id="m-{{$key}}-{{$key2}}">
                            <label class="form-check-label" for="m-{{$key}}-{{$key2}}">
                                {{$cate_options}}
                            </label>
                        </div>
                        @endforeach

                    </div>
                </div>
                @endforeach
            </div>
        </div>








        <div class="my-5 d-flex justify-content-center">
            <a class="btn bg-brand text-white" onClick="submit_onclick()">送出</a>
        </div>
        <!-- </form> -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.min.js"></script>


    <script>
        const add_btn = document.querySelector('#add_btn');
        const delete_btn = document.querySelector('#delete_btn');
        const leader02 = document.querySelector('.leader02');
        const leader03 = document.querySelector('.leader03');
        let count = 1;
        add_btn.addEventListener('click', () => {
            count++
            handLeaderList();
        })
        delete_btn.addEventListener('click', () => {
            count--
            handLeaderList();
        })

        const handLeaderList = () => {
            if (count < 1) {
                count = 1
            }
            if (count > 3) {
                count = 3
            }
            console.log(count)
            if (count == 1) {
                delete_btn.style.display = 'none'
                leader02.style.display = 'none';
                leader03.style.display = 'none';
            } else if (count == 2) {
                delete_btn.style.display = 'inline'
                leader02.style.display = 'flex';
                leader03.style.display = 'none';
            } else if (count == 3) {
                leader02.style.display = 'flex';
                leader03.style.display = 'flex';
            }
        }


        const submit_onclick = () => {
            const a = document.querySelectorAll('.ansCount');
            console.log('112233')
            console.log(a)
            // axios.post('/class01s', {
            //     company: 'aa',
            //     tax_id_no: '123456' 
            // }).then(res => (this.info = response)).catch(function(error) { // 请求失败处理
            //     console.log(error);
            // });
        }
    </script>
</body>

</html>