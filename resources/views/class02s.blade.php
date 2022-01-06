<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NexTech 潛力企業共學班</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{url('/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <div class="d-flex justify-content-center my-3">
        <a href="/">
            <img class="logo" src="{{url('/img/logo.svg')}}" alt="">
        </a>
    </div>
    <div class="container">
        <h3 class="bg-brand text-white rounded-3 p-2 text-center">潛力企業共學班</h3>
        <!-- <form action="/class01s" method="post"> -->
        @csrf
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title text-brand">第一部分:基本資料</h5>
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="tax_id_no" class="form-label" id="flag_tax_id_no">統一編號</label>
                        <input type="text" class="form-control" id="tax_id_no" name="tax_id_no">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="company" class="form-label" id="flag_company">公司名稱</label>
                        <input type="text" class="form-control" id="company" name="company">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="establishment" class="form-label" id="flag_establishment">創立日期(西元年)</label>
                        <!-- <input type="text" class="form-control" id="establishment" name="establishment"> -->
                        <select class="form-select" id="establishment" name="establishment"></select>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="address" class="form-label" id="flag_address">公司地址</label>
                        <input type="text" class="form-control" id="address" name="address">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="capital" class="form-label" id="flag_capital">資本額(萬元)</label>
                        <input type="text" class="form-control" id="capital" name="capital">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="employees" class="form-label" id="flag_employees">員工人數</label>
                        <input type="text" class="form-control" id="employees" name="employees">
                    </div>
                    <div class="mb-3 col-md-6">
                        <!-- 這裡 -->
                        <label for="revenue" class="form-label" id="flag_revenue">110年營收(萬元)</label>
                        <input type="text" class="form-control" id="revenue" name="revenue">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="industry" class="form-label" id="flag_industry">行業別</label>
                        <select class="form-select" aria-label="Default select example" id="industry" name="industry">
                            <option value="" selected>請選擇</option>
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
                        <label for="business" class="form-label" id="flag_business">主要業務或產品</label>
                        <input type="text" class="form-control" id="business" name="business">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="status_and_goals" class="form-label" id="flag_status_and_goals">營運現況及發展目標</label>
                        <input type="text" class="form-control" id="status_and_goals" name="status_and_goals">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="challenge" class="form-label" id="flag_challenge">企業當前面臨的環境挑戰或數位轉型瓶頸</label>
                        <input type="text" class="form-control" id="challenge" name="challenge">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="class" class="form-label" id="flag_class">參加班別</label>
                        <select class="form-select" aria-label="Default select" id="class" name="class">
                            <option value="" selected>請選擇</option>
                            <option value="(1)北部班">(1)北部班</option>
                            <option value="(2)中部班">(2)中部班</option>
                            <option value="(3)南部班">(3)南部班</option>
                        </select>
                    </div>
                    <div class="mb-3 col-md-12">
                        <label class="form-label">期待學習主題</label>
                        <div class="row">
                            <div class="form-check col-md-3">
                                <input class="form-check-input" type="checkbox" value="(1)組織管理" id="expect-1" name="expect">
                                <label class="form-check-label" for="expect-1">(1)組織管理</label>
                            </div>
                            <div class="form-check col-md-3">
                                <input class="form-check-input" type="checkbox" value="(2)品牌建構" id="expect-2" name="expect">
                                <label class="form-check-label" for="expect-2">(2)品牌建構</label>
                            </div>
                            <div class="form-check col-md-3">
                                <input class="form-check-input" type="checkbox" value="(3)市場行銷" id="expect-3" name="expect">
                                <label class="form-check-label" for="expect-3">(3)市場行銷</label>
                            </div>
                            <div class="form-check col-md-3">
                                <input class="form-check-input" type="checkbox" value="(4)生產製造" id="expect-4" name="expect">
                                <label class="form-check-label" for="expect-4">(4)生產製造</label>
                            </div>
                            <div class="form-check col-md-3">
                                <input class="form-check-input" type="checkbox" value="(5)供應鏈整合" id="expect-5" name="expect">
                                <label class="form-check-label" for="expect-5">(5)供應鏈整合</label>
                            </div>
                            <div class="form-check col-md-3">
                                <input class="form-check-input" type="checkbox" value="(6)企業創新" id="expect-6" name="expect">
                                <label class="form-check-label" for="expect-6">(6)企業創新</label>
                            </div>
                            <div class="form-check col-md-12">
                                <input class="form-check-input" type="checkbox" value="其他(請說明)：" id="expect-7" name="expect">
                                <label class="form-check-label" for="expect-7">其他(請說明)：</label>
                                <div class="mb-3 col-md-3">
                                <input type="text" class="form-control" id="expect-custom" name="expect-custom">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="succeed" class="form-label" id="flag_succeed">企業接班情形</label>
                        <select class="form-select" aria-label="Default select" id="succeed" name="succeed">
                            <option value="" selected>請選擇</option>
                            <option value="(1)接班人已負責公司整體事務">(1)接班人已負責公司整體事務</option>
                            <option value="(2)接班人已著手負責公司部分專案">(2)接班人已著手負責公司部分專案</option>
                            <option value="(3)接班人尚未負責公司事務">(3)接班人尚未負責公司事務</option>
                        </select>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="deputy" class="form-label" id="flag_deputy">接班梯隊代表</label>
                        <select class="form-select" aria-label="Default select" id="deputy" name="deputy">
                            <option value="" selected>請選擇</option>
                            <option value="(1)家族接班">(1)家族接班</option>
                            <option value="(2)專業經理人">(2)專業經理人</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h5 class="card-title text-brand" id="flag_leader">預計參訓名單</h5>
                    <div>
                        <a class="btn btn-secondary" id="delete_btn" style="display: none;"> 清除</a>
                        <a class="btn bg-brand text-white" id="add_btn"> 新增</a>
                    </div>
                </div>
                <p>※參與團隊須包含企業接班人或高階主管職之企業領袖，可自行增列表格</p>
                <div class="row leader01 border-bottom py-3 my-3">
                    <div class="mb-3 col-md-3">
                        <label for="leader-1" class="form-label">姓名1</label>
                        <input type="text" class="form-control" id="leader-1" name="leader-0">
                    </div>
                    <div class="mb-3 col-md-3">
                        <label for="leader-2" class="form-label">部門職稱</label>
                        <input type="text" class="form-control" id="leader-2" name="leader-2">
                    </div>
                    <div class="mb-3 col-md-3">
                        <label for="leader-3" class="form-label">連絡電話</label>
                        <input type="text" class="form-control" id="leader-3" name="leader-3">
                    </div>
                    <div class="mb-3 col-md-3">
                        <label for="leader-4" class="form-label">E-MAIL</label>
                        <input type="text" class="form-control" id="leader-4" name="leader-4">
                    </div>
                    <div class="mb-3 col-md-3">
                        <label for="leader-5" class="form-label">業務簡介</label>
                        <input type="text" class="form-control" id="leader-5" name="leader-5">
                    </div>
                </div>
                <div class="row leader02 border-bottom py-3 my-3" style="display: none;">
                    <div class="mb-3 col-md-3">
                        <label for="leader-6" class="form-label">姓名2</label>
                        <input type="text" class="form-control" id="leader-6" name="leader-6">
                    </div>
                    <div class="mb-3 col-md-3">
                        <label for="leader-7" class="form-label">部門職稱</label>
                        <input type="text" class="form-control" id="leader-7" name="leader-7">
                    </div>
                    <div class="mb-3 col-md-3">
                        <label for="leader-8" class="form-label">連絡電話</label>
                        <input type="text" class="form-control" id="leader-8" name="leader-8">
                    </div>
                    <div class="mb-3 col-md-3">
                        <label for="leader-9" class="form-label">E-MAIL</label>
                        <input type="text" class="form-control" id="leader-9" name="leader-9">
                    </div>
                    <div class="mb-3 col-md-3">
                        <label for="leader-10" class="form-label">業務簡介</label>
                        <input type="text" class="form-control" id="leader-10" name="leader-10">
                    </div>
                </div>
                <div class="row leader03 border-bottom py-3 my-3" style="display: none;">
                    <div class="mb-3 col-md-3">
                        <label for="leader-11" class="form-label">姓名3</label>
                        <input type="text" class="form-control" id="leader-11" name="leader-11">
                    </div>
                    <div class="mb-3 col-md-3">
                        <label for="leader-12" class="form-label">部門職稱</label>
                        <input type="text" class="form-control" id="leader-12" name="leader-12">
                    </div>
                    <div class="mb-3 col-md-3">
                        <label for="leader-13" class="form-label">連絡電話</label>
                        <input type="text" class="form-control" id="leader-13" name="leader-13">
                    </div>
                    <div class="mb-3 col-md-3">
                        <label for="leader-14" class="form-label">E-MAIL</label>
                        <input type="text" class="form-control" id="leader-14" name="leader-14">
                    </div>
                    <div class="mb-3 col-md-3">
                        <label for="leader-15" class="form-label">業務簡介</label>
                        <input type="text" class="form-control" id="leader-15" name="leader-15">
                    </div>
                </div>
            </div>
        </div>
 <!-- ----------------------------------------------------- -->
       

        <div class="card mb-3">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h5 class="card-title text-brand">上傳資料</h5>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-12">
                        <label for="upload" class="form-label" id="flag_upload">執行政府計畫揭露聲明書(上傳格式PDF、JPG、PNG)</label>
                        <input type="file" class="form-control" id="upload" name="upload">
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="upload2" class="form-label" id="flag_upload2">公司登記證明文件(上傳格式PDF、JPG、PNG)</label>
                        <input type="file" class="form-control" id="upload2" name="upload2">
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
                        <label for="inputx" class="form-label" id="flag_s{{$key+1}}">{{$key+1}}. {{$item['content']}}</label>
                        <div class="row">

                            @foreach ($per_cato as $key3 => $item3)

                            @if ($item['category_id'] == $key3+1 )
                            @foreach (json_decode($ques_cate_s[$key3]['options']) as $key2 => $cate_item)
                            <div class="form-check mx-3">
                                <input class="form-check-input" type="radio" name="s{{$key+1}}" id="s{{$key+1}}-{{$key2+1}}" value="{{$key2+1}}">
                                <label class="form-check-label" for="s{{$key+1}}-{{$key2+1}}">
                                    {{$cate_item}}
                                </label>
                            </div>
                            @endforeach
                            @endif

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
                        <label class="form-label" id="flag_m{{$key+1}}">{{$key+1}}. {{$cate_item_m['category']}}</label>

                        @foreach (json_decode($ques_cate_m[$key]['options']) as $key2 => $cate_options)
                            @if ($cate_item_m['customize'] != 'Y' )
                            <div class="form-check mx-3">
                                <input class="form-check-input" type="checkbox" value="{{$key2+1}}" id="m{{$key+1}}-{{$key2+1}}" name="m{{$key+1}}">
                                <label class="form-check-label" for="m{{$key+1}}-{{$key2+1}}">
                                    {{$cate_options}}
                                </label>
                            </div>
                            @else
                            <div class="form-check mx-3">
                                <input class="form-check-input" type="radio" value="{{$key2+1}}" id="m{{$key+1}}-{{$key2+1}}" name="m{{$key+1}}">
                                <label class="form-check-label" for="m{{$key+1}}-{{$key2+1}}">
                                    {{$cate_options}}
                                </label>
                            </div>
                            @endif
                        @endforeach
                        @if ($cate_item_m['customize'] == 'Y' )
                        <div class="mb-3 col-md-3">
                            <input type="text" class="form-control" id="m{{$key+1}}-custom" name="m{{$key+1}}-custom">
                        </div>
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>
        </div>








        <div class="my-5 d-flex justify-content-center">
            <a class="btn bg-brand text-white submit_btn" onClick="submit_onclick()">送出</a>
        </div>
        <!-- </form> -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.min.js"></script>

    

    <script>
        //西元年
        let max = new Date().getFullYear(),
        min = max - 30
        select = document.querySelector('#establishment');

        for (let i = max; i>=min; i--){
            if(i == new Date().getFullYear()){
                let opt = document.createElement('option');
                opt.value = '';
                opt.innerHTML = '請選擇';
                select.appendChild(opt);
            }else{
            let opt = document.createElement('option');
            opt.value = i;
            opt.innerHTML = i;
            select.appendChild(opt);
            }
        }
        

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
        
        const submit_btn = document.querySelector('.submit_btn');
        
        

        const submit_onclick = () => {

            
            const data = {};
            const files = {};
            const ques_s = {};
            const leaderArr = [];
            const ques_sObj = {};
            const ques_mObj = {};

            // const flag_company = document.querySelector('#flag_company');



            
            
            const companyVal = document.querySelector('#company').value;
            const establishmentVal = document.querySelector('#establishment').value;
            const tax_id_noVal = document.querySelector('#tax_id_no').value;
            const addressVal = document.querySelector('#address').value;
            const capitalVal = document.querySelector('#capital').value;
            const employeesVal = document.querySelector('#employees').value;
            const revenueVal = document.querySelector('#revenue').value;
            const industryVal = document.querySelector('#industry').value;
            const businessVal = document.querySelector('#business').value;
            const status_and_goalsVal = document.querySelector('#status_and_goals').value;
            const challengeVal = document.querySelector('#challenge').value;
            const classVal = document.querySelector('#class').value;
            const expectVal = document.querySelectorAll('input[name="expect"]:checked');
            const succeedVal = document.querySelector('#succeed').value;
            const deputyVal = document.querySelector('#deputy').value;
            // const leaderVal = document.querySelector('#leader').value;
            const uploadVal = document.querySelector('#upload').value;
            const upload2Val = document.querySelector('#upload2').value;


            
            for(let i=1;i<=15;i++){
                leaderArr.push(document.querySelector('#leader-'+i).value);
            }

            const txt = '請輸入'
            const txtUpload = '請上傳'
            if(companyVal == ''){
                alert(txt+flag_company.innerHTML);
                flag_company.scrollIntoView()
                return
            }
            if(establishmentVal == ''){
                alert(txt+flag_establishment.innerHTML);
                flag_establishment.scrollIntoView()
                return
            }
            if(tax_id_noVal == ''){
                alert(txt+flag_tax_id_no.innerHTML);
                flag_tax_id_no.scrollIntoView()
                return
            }
            if(addressVal == ''){
                alert(txt+flag_address.innerHTML);
                flag_address.scrollIntoView()
                return
            }
            if(capitalVal == ''){
                alert(txt+flag_capital.innerHTML);
                flag_capital.scrollIntoView()
                return
            }
            if(employeesVal == ''){
                alert(txt+flag_employees.innerHTML);
                flag_employees.scrollIntoView()
                return
            }
            if(revenueVal == ''){
                alert(txt+flag_revenue.innerHTML);
                flag_revenue.scrollIntoView()
                return
            }
            if(industryVal == ''){
                alert(txt+flag_industry.innerHTML);
                flag_industry.scrollIntoView()
                return
            }
            if(businessVal == ''){
                alert(txt+flag_business.innerHTML);
                flag_business.scrollIntoView()
                return
            }
            if(status_and_goalsVal == ''){
                alert(txt+flag_status_and_goals.innerHTML);
                flag_status_and_goals.scrollIntoView()
                return
            }
            if(challengeVal == ''){
                alert(txt+flag_challenge.innerHTML);
                flag_challenge.scrollIntoView()
                return
            }
            if(classVal == ''){
                alert(txt+flag_class.innerHTML);
                flag_class.scrollIntoView()
                return
            }
            if(expectVal == ''){
                alert(txt+flag_expect.innerHTML);
                flag_expect.scrollIntoView()
                return
            }
            if(succeedVal == ''){
                alert(txt+flag_succeed.innerHTML);
                flag_succeed.scrollIntoView()
                return
            }
            if(deputyVal == ''){
                alert(txt+flag_deputy.innerHTML);
                flag_deputy.scrollIntoView()
                return
            }
            if(leaderArr[0] == ''){
                alert(txt+flag_leader.innerHTML);
                flag_leader.scrollIntoView()
                return
            }
            if(uploadVal == ''){
                alert(txt+flag_upload.innerHTML);
                flag_upload.scrollIntoView()
                return
            }
            if(upload2Val == ''){
                alert(txt+flag_upload2.innerHTML);
                flag_upload2.scrollIntoView()
                return
            }
            let exp = '';
            // console.log(expectVal)
            if(expectVal !== null || expectVal!== ''){
                expectVal.forEach(element => {
                     exp += element.value
                });
            }
                

            data['company'] = companyVal;
            data['establishment'] = establishmentVal;
            data['tax_id_no'] = tax_id_noVal;
            data['address'] = addressVal;
            data['capital'] = capitalVal;
            data['employees'] = employeesVal;
            data['revenue'] = revenueVal;
            data['industry'] = industryVal;
            data['business'] = businessVal;
            data['status_and_goals'] = status_and_goalsVal;
            data['challenge'] = challengeVal;
            data['class'] = classVal;
            data['expect'] = exp;
            data['succeed'] = succeedVal;
            data['deputy'] = deputyVal;
            data['leader'] = leaderArr;
            
            
            //上傳檔案
            files['upload'] = document.querySelector('#upload').files[0];
            files['upload2'] = document.querySelector('#upload2').files[0];


            @foreach ($ques as $key => $item)
            let s{{$key+1}} = document.querySelector('input[name="s{{$key+1}}"]');
            const s{{$key+1}}checked = document.querySelector('input[name="s{{$key+1}}"]:checked');
            if(s{{$key+1}}checked !== null){
                // s{{$key+1}} = s{{$key+1}}checked.value;
                ques_sObj['s{{$key+1}}'] = s{{$key+1}}checked.value;
            }
            if(s{{$key+1}}checked == null){
                alert(txt+document.querySelector('#flag_s{{$key+1}}').innerHTML);
                document.querySelector('#flag_s{{$key+1}}').scrollIntoView()
                return
            }
            @endforeach
            data['ques_s'] = ques_sObj;
            console.log(data);

            const ques_mArr = [];
            let tempArr = [];
            @foreach ($ques_cate_m as $key => $cate_item_m)
            tempArr = [];
            let m{{$key+1}} = document.querySelector('input[name="m{{$key+1}}"]');
            let m{{$key+1}}checked = document.querySelectorAll('input[name="m{{$key+1}}"]:checked');
            
            //判斷多選為空不通過
            if(m{{$key+1}}checked.length == 0){
                alert(txt+document.querySelector('#flag_m{{$key+1}}').innerHTML);
                document.querySelector('#flag_m{{$key+1}}').scrollIntoView()
                return
            }
            
            
            for(let i=0;i< m{{$key+1}}checked.length;i++){
                
                tempArr.push(m{{$key+1}}checked[i].value)
                @if ($cate_item_m['customize'] == 'Y' )
                    const custom = document.querySelector('input[name="m{{$key+1}}-custom"]');
                    tempArr.push(custom.value)
                @endif
            }
            ques_mArr.push(tempArr);

            @endforeach
            console.log(ques_mArr)

            // for(let i=0;i<ques_mArr.length;i++){
            //     console.log('aa',ques_mArr[i].length)
            // }

            data['ques_m'] = ques_mArr;

            console.log(data)
            // axios.post('/class02s', {
            //     data
            // }).then((response) => {
            //     console.log(response)
            //     if(response.status == 200){
            //         alert('已發送完成');
            //         // window.location.reload();
            //     }
            // }).catch(function(error) { // 请求失败处理
            //     console.log(error);
            // });

            //按下後鎖定
            submit_btn.disabled = true;
            submit_btn.innerHTML = `
            發送中
            <div class="spinner-border" role="status">
            <span class="visually-hidden">Loading...</span>
            </div>
            `;


            let bodyFormData = new FormData();
            bodyFormData.append('data', JSON.stringify(data)); 
            bodyFormData.append('upload', files['upload']); 
            bodyFormData.append('upload2', files['upload2']); 
            console.log(bodyFormData)
            //檔案
            axios({
            method: "post",
            url: '/class02s',
            data: bodyFormData,
            headers: { "Content-Type": "multipart/form-data" },
            })
            .then(function (response) {
                submit_btn.disabled = false;
                submit_btn.innerHTML = '送出';
                
                console.log(response)
                if(response.status == 200){

                    if(response.data.code==1000){
                        alert('已發送完成');
                        // window.location.reload();
                        setTimeout(()=>{
                            document.location.href=`/result?class=02&&id=${data['tax_id_no']}`;
                        },1000)
                    }else{
                        alert(response.data.msg);
                    }
                }
            })
            .catch(function (response) {
                //handle error
                console.log(response);
                // alert('檔案發生錯誤，請確認檔案格式或檔案大小');
                alert('送出發生錯誤，請聯絡管理人員');
            });
        }

        //偵聽以填寫過的統編
        const tax_id_no_inp = document.querySelector('input[name="tax_id_no"]');
        const checkData = {};
        tax_id_no_inp.addEventListener('blur',()=>{
            checkData['tax_id_no_inp'] = tax_id_no_inp.value

            if(tax_id_no_inp.value !='' && tax_id_no_inp.value.length == 8){

                axios.post('/checkdegree', {
                    checkData
                }).then((response) => {
                    console.log(response)

                    if(response.status == 200){
                        const code = response.data.code;
                        if(code == 1000){

                            // alert('您已填寫過企業數位化程度健診，系統會自動寫入問卷資料。')
                            let filled = confirm('您已填寫過企業數位化程度健診，是否套用您的資料?');
                            if (filled) {
                                // console.log(response.data[0])
                                // console.log(response.data[0].capital)
                                // console.log(response.data[0].company)
                                // console.log(response.data[0].employees)
                                // console.log(response.data[0].establishment)
                                // console.log(response.data[0].industry)
                                // console.log(response.data[0].ques_m)
                                // console.log(response.data[0].ques_s)
                                // console.log(response.data[0].tax_id_no)

                                document.querySelector('#capital').value = response.data[0].capital
                                document.querySelector('#company').value = response.data[0].company
                                document.querySelector('#employees').value = response.data[0].employees
                                document.querySelector('#establishment').value = response.data[0].establishment
                                document.querySelector('#industry').value = response.data[0].industry
       
                                let ques_s = JSON.parse(response.data[0].ques_s);
                                // console.log(ques_s)

                                for (const [key, value] of Object.entries(ques_s)) {
                                    // console.log(`${key}: ${value}`);
                                    // console.log(document.querySelectorAll(`input[name="${key}"]`));
                                    // console.log(key)
                                    // console.log(value)
                                    document.querySelectorAll(`input[name="${key}"]`)[parseInt(value)-1].checked = true;
                                }
                                // let ques_m = JSON.parse(response.data[0].ques_m);
                                let ques_m = JSON.parse(response.data[0].ques_m);
                                // console.log(ques_m)
                                ques_m.forEach((val, key)=>{
                                    // console.log(ques_m[key])
                                    // console.log(val)
                                    for(let i=0;i<ques_m[key].length;i++){
                                        if(key+1==5 && i==1){
                                            console.log(
                                            // `m${key+1}-custom`,
                                            document.querySelector(`#m${key+1}-custom`).value = val[i]
                                            )
                                        }else{
                                            // console.log(`#m${key+1}-${val[i]}`)
                                            document.querySelector(`#m${key+1}-${val[i]}`).checked = true
                                        }
                                    }
                                    
                                })
                            }
                        }

                    }
                }).catch(function(error) {
                    console.log(error);
                });
            }
        })


    </script>
</body>

</html>