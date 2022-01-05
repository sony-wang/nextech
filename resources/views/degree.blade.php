<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NexTech 企業數位化程度健診</title>
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
        <h3 class="bg-secondary text-white rounded-3 p-2 text-center">企業數位化程度健診</h3>
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
                        <!-- <input type="text" class="form-control" id="establishment" name="establishment"> -->
                        <select class="form-select" id="establishment" name="establishment"></select>
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
                    
                    
                </div>
            </div>
        </div>

        <div id="test_wrap">
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

        const test_wrap = document.querySelector('#test_wrap')
             
        const submit_btn = document.querySelector('.submit_btn');

        const submit_onclick = () => {

            
            const data = {};
            const files = {};
            const ques_s = {};
            const ques_sObj = {};
            const ques_mObj = {};


            const companyVal = document.querySelector('#company').value;
            const tax_id_noVal = document.querySelector('#tax_id_no').value;
            const establishmentVal = document.querySelector('#establishment').value;
            const capitalVal = document.querySelector('#capital').value;
            const employeesVal = document.querySelector('#employees').value;
            const industryVal = document.querySelector('#industry').value;


            const txt = '請輸入'
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

            data['company'] = companyVal;
            data['tax_id_no'] = tax_id_noVal;
            data['establishment'] = establishmentVal;
            data['capital'] = capitalVal;
            data['employees'] = employeesVal;
            data['industry'] = industryVal;

            @foreach ($ques as $key => $item)
            let s{{$key+1}} = document.querySelector('input[name="s{{$key+1}}"]');
            const s{{$key+1}}checked = document.querySelector('input[name="s{{$key+1}}"]:checked');
            if(s{{$key+1}}checked !== null){
                // s{{$key+1}} = s{{$key+1}}checked.value;
                ques_sObj['s{{$key+1}}'] = s{{$key+1}}checked.value;
            }
            //判斷單選為空不通過
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
            // console.log(m{{$key+1}}checked.length)
            if(m{{$key+1}}checked.length == 0){
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

            //資料
            // axios.post('/class01s', {
            //     data
            // }).then((response) => {
            //     console.log(response)
            //     if(response.status == 200){
            //         alert('已發送完成');
            //         window.location.reload();
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
            //檔案
            axios({
            method: "post",
            url: '/degree',
            data: bodyFormData,
            headers: { "Content-Type": "multipart/form-data" },
            })
            .then(function (response) {
                submit_btn.disabled = false;
                submit_btn.innerHTML = '送出';
                console.log(response)
                if(response.status == 200){
                    alert('已發送完成');
                    // window.location.reload();
                    setTimeout(()=>{
                        document.location.href=`/result?class=01&&id=${data['tax_id_no']}`;
                    },1000)
                }
            })
            .catch(function (response) {
                //handle error
                console.log(response);
                alert('檔案發生錯誤，請確認檔案格式或檔案大小');
            });

        }

        
    </script>
</body>

</html>