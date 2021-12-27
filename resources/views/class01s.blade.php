<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NexTech 標竿企業實戰班</title>
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
        <h3 class="bg-brand2 text-white rounded-3 p-2 text-center">標竿企業實戰班</h3>
        <!-- <form action="/class01s" method="post"> -->
        @csrf
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title text-brand">第一部分:基本資料</h5>
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="company" class="form-label" id="flag_company">公司名稱</label>
                        <input type="text" class="form-control" id="company" name="company">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="tax_id_no" class="form-label" id="flag_tax_id_no">統一編號</label>
                        <input type="text" class="form-control" id="tax_id_no" name="tax_id_no">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="establishment" class="form-label" id="flag_establishment">創立日期(西元年)</label>
                        <input type="text" class="form-control" id="establishment" name="establishment">
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
                        <label for="business" class="form-label" id="flag_business">主要業務</label>
                        <input type="text" class="form-control" id="business" name="business">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="address" class="form-label" id="flag_address">公司地址</label>
                        <input type="text" class="form-control" id="address" name="address">
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h5 class="card-title text-brand" id="flag_leader">第二部分：參與計畫接班梯隊</h5>
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


        <div class="card mb-3">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h5 class="card-title text-brand">第三部分：企業預期投入資源</h5>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-12">
                        <label for="succeed" class="form-label" id="flag_succeed">企業接班情形</label>
                        <select class="form-select" aria-label="Default select example" id="succeed" name="succeed">
                            <option value="" selected>請選擇</option>
                            <option value="(1)接班人已負責公司整體事務">(1)接班人已負責公司整體事務</option>
                            <option value="(2)接班人已著手負責公司部分專案">(2)接班人已著手負責公司部分專案</option>
                            <option value="(3)接班人尚未負責公司事務">(3)接班人尚未負責公司事務</option>
                        </select>
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="amount_scale-01" class="form-label" id="flag_amount_scale">投入金額規模</label>
                        <p>(例:投入 51 至 100 萬，導入光學檢測系統優化生產流程)</p>
                        <select class="form-select" aria-label="Default select example" id="amount_scale-01" name="amount_scale-01">
                            <option value="" selected>請選擇</option>
                            <option value="50 萬以下，導入:">50 萬以下</option>
                            <option value="51 至 100 萬，導入:">51 至 100 萬</option>
                            <option value="101 萬以上，導入:">101 萬以上</option>
                        </select>
                        <label for="amount_scale-02" class="form-label">導入:</label>
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
                        <label for="change_classes_Y" class="form-label" id="flag_change_classes">如實戰班額度已滿，是否同意由委員決議轉入共學班：</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="同意" id="change_classes_Y" name="change_classes">
                            <label class="form-check-label" for="change_classes_Y">同意</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="不同意" id="change_classes_N" name="change_classes">
                            <label class="form-check-label" for="change_classes_N">不同意</label>
                        </div>

                        <!-- <select class="form-select" aria-label="Default select example" id="change_classes" name="change_classes">
                            <option selected>請選擇</option>
                            <option value="同意">同意</option>
                            <option value="不同意">不同意</option>
                        </select> -->
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
                        <label for="proposal" class="form-label" id="flag_proposal">提案計畫書(上傳格式WORD、PDF)</label>
                        <input type="file" class="form-control" id="proposal" name="proposal">
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="statement" class="form-label" id="flag_statement">曾執行政府計畫揭露聲明書(上傳格式PDF、JPG、PNG)</label>
                        <input type="file" class="form-control" id="statement" name="statement">
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="company_registration" class="form-label " id="flag_company_registration">公司登記證明文件(上傳格式PDF、JPG、PNG)</label>
                        <input type="file" class="form-control" id="company_registration" name="company_registration">
                    </div>
                </div>
            </div>
        </div>

        <div class="form-check my-3">
            <input class="form-check-input" type="checkbox" id="dotest" name="dotest">
            <label class="form-check-label" for="dotest">
            進行企業數位化程度健診 (非必填)
            </label>
        </div>
        <div id="test_wrap" style="display:none">
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
                            <div class="form-check mx-3">
                                <input class="form-check-input" type="checkbox" value="{{$key2+1}}" id="m{{$key+1}}-{{$key2+1}}" name="m{{$key+1}}">
                                <label class="form-check-label" for="m{{$key+1}}-{{$key2+1}}">
                                    {{$cate_options}}
                                </label>
                            </div>
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

        //顯示 進行企業數位化程度健診 (非必填)
        const dotest = document.querySelector('#dotest')
        const test_wrap = document.querySelector('#test_wrap')
        dotest.addEventListener('change',(e)=>{
            if(e.srcElement.checked){
                test_wrap.style.display = 'block'
            }else{
                test_wrap.style.display = 'none'
            }
        })
        

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
            
            const data = {};
            const ques_s = {};
            const leaderArr = [];
            const ques_sObj = {};
            const ques_mObj = {};

            // const flag_change_classes = document.querySelector('#flag_change_classes');
            // const flag_company = document.querySelector('#flag_company');



            const change_classes = document.querySelector('input[name="change_classes"]:checked');
            
            
            const companyVal = document.querySelector('#company').value;
            const tax_id_noVal = document.querySelector('#tax_id_no').value;
            const establishmentVal = document.querySelector('#establishment').value;
            const capitalVal = document.querySelector('#capital').value;
            const employeesVal = document.querySelector('#employees').value;
            const industryVal = document.querySelector('#industry').value;
            const businessVal = document.querySelector('#business').value;
            const addressVal = document.querySelector('#address').value;
            const succeedVal = document.querySelector('#succeed').value;
            const amount_scaleVal = document.querySelector('#amount_scale-01').value + document.querySelector('#amount_scale-02').value;
            const proposalVal = document.querySelector('#proposal').value;
            const statementVal = document.querySelector('#statement').value;
            const company_registrationVal = document.querySelector('#company_registration').value;


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
            if(tax_id_noVal == ''){
                alert(txt+flag_tax_id_no.innerHTML);
                flag_tax_id_no.scrollIntoView()
                return
            }
            if(establishmentVal == ''){
                alert(txt+flag_establishment.innerHTML);
                flag_establishment.scrollIntoView()
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
            if(addressVal == ''){
                alert(txt+flag_address.innerHTML);
                flag_address.scrollIntoView()
                return
            }
            if(leaderArr[0] == ''){
                alert(txt+flag_leader.innerHTML);
                flag_leader.scrollIntoView()
                return
            }
            if(succeedVal == ''){
                alert(txt+flag_succeed.innerHTML);
                flag_succeed.scrollIntoView()
                return
            }
            if(amount_scaleVal == ''){
                alert(txt+flag_amount_scale.innerHTML);
                flag_amount_scale.scrollIntoView()
                return
            }
            if(change_classes == null){
                alert(txt+flag_change_classes.innerHTML);
                flag_change_classes.scrollIntoView()
                return
            }
            if(proposalVal == null || proposalVal == ''){
                alert(txtUpload+flag_proposal.innerHTML);
                flag_proposal.scrollIntoView()
                return
            }
            if(statementVal == null || statementVal == ''){
                alert(txtUpload+flag_statement.innerHTML);
                flag_statement.scrollIntoView()
                return
            }
            if(company_registrationVal == null || company_registrationVal == ''){
                alert(txtUpload+flag_company_registration.innerHTML);
                flag_company_registration.scrollIntoView()
                return
            }
            let change_classesVal = '';
            if(change_classes !== null){
                 change_classesVal = change_classes.value
            }
            data['company'] = companyVal;
            data['tax_id_no'] = tax_id_noVal;
            data['establishment'] = establishmentVal;
            data['capital'] = capitalVal;
            data['employees'] = employeesVal;
            data['industry'] = industryVal;
            data['business'] = businessVal;
            data['address'] = addressVal;
            data['succeed'] = succeedVal;
            data['amount_scale'] = amount_scaleVal;
            data['change_classes'] = change_classesVal;
            
            data['proposal'] = document.querySelector('#proposal').value;
            data['statement'] = document.querySelector('#statement').value;
            data['company_registration'] = document.querySelector('#company_registration').value;
            data['leader'] = leaderArr;
            

            @foreach ($ques as $key => $item)
            let s{{$key+1}} = document.querySelector('input[name="s{{$key+1}}"]');
            const s{{$key+1}}checked = document.querySelector('input[name="s{{$key+1}}"]:checked');
            if(s{{$key+1}}checked !== null){
                // s{{$key+1}} = s{{$key+1}}checked.value;
                ques_sObj['s{{$key+1}}'] = s{{$key+1}}checked.value;
            }
            //判斷單選為空不通過
            if(s{{$key+1}}checked == null && dotest.checked){
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
            // console.log(m{{$key+1}}checked.length)
            if(m{{$key+1}}checked.length == 0 && dotest.checked){
                alert(txt+document.querySelector('#flag_m{{$key+1}}').innerHTML);
                document.querySelector('#flag_m{{$key+1}}').scrollIntoView()
                return
            }
            
            
            for(let i=0;i<   m{{$key+1}}checked.length;i++){
                
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
            axios.post('/class01s', {
                data
            }).then((response) => {
                console.log(response)
                if(response.status == 200){
                    alert('已發送完成');
                    window.location.reload();
                }
            }).catch(function(error) { // 请求失败处理
                console.log(error);
            });
        }

        
    </script>
</body>

</html>