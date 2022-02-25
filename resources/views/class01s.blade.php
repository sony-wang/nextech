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
        <div class="form-check my-5">
            <input class="form-check-input" type="checkbox" id="agree">
            <label class="form-check-label">
            <p class="my-0">我已詳細閱讀，並同意接受<a class="text-brand text-decoration-none" href="javascript:;" data-bs-toggle="modal" data-bs-target="#exampleModal">「蒐集個人資料告知事項暨個人資料提供同意書」</a>內容</p>
            <p class="my-0 text-secondary">（請注意，此處點選同意具有個人資料保護法所定之書面同意效果，不勾選亦無法送出本次填寫）</p>
            </label>
        </div>
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
                        <label for="address" class="form-label" id="flag_address">公司地址(含郵遞區號)</label>
                        <input type="text" class="form-control" id="address" name="address">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="recommend" class="form-label">訊息來源(非必填)</label>
                        <input type="text" class="form-control" id="recommend" name="recommend">
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
                <p class="mb-0">※參與團隊須包含企業接班人或高階主管職之企業領袖，可自行增列表格</p>
                <p>主要聯絡人為計畫聯繫窗口，請留意勾選人員。</p>
                <div id="leader-List"></div>
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
                        <label for="upload" class="form-label" id="flag_upload">提案計畫書(上傳格式WORD、PDF)</label>
                        <input type="file" class="form-control" id="upload" name="upload" accept=".pdf,.doc" onchange="checkfile2(this);">
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="upload2" class="form-label" id="flag_upload2">曾執行政府計畫揭露聲明書(上傳格式PDF、JPG、PNG)</label>
                        <input type="file" class="form-control" id="upload2" name="upload2" accept=".pdf,.jpg,.png" onchange="checkfile(this);">
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="upload3" class="form-label " id="flag_upload3">公司登記證明文件(上傳格式PDF、JPG、PNG)</label>
                        <input type="file" class="form-control" id="upload3" name="upload3" accept=".pdf,.jpg,.png" onchange="checkfile(this);">
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

        <!-- modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                <div class="modal-header bg-brand">
                    <h5 class="modal-title text-white" id="exampleModalLabel">蒐集個人資料告知事項暨個人資料提供同意書</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>蒐集個人資料告知事項</p>
                    <p>經濟部中小企業處(以下簡稱本處)為遵守個人資料保護法規定，在您提供個人資料予本處或本處委辦計畫執行單位前，依法告知下列事項：</p>
                    <p>蒐集目的與個人資料類別：本處或本處委辦計畫執行單位，因【辦理各項產業發展活動及統計分析本處計畫執行情形】，而獲取您下列個人資料類別，【姓名、性別、連絡方式(包括但不限於電話/傳真號碼、E-MAIL、居住或工作地址等)】，或其他得以直接或間接識別您個人之資料。</p>
                    <p>本處或本處委辦計畫執行單位將依個人資料保護法及相關法令之規定，依本處隱私權政策，蒐集、處理及利用您的個人資料。</p>
                    <p>若您的個人資料有任何異動，請主動向本處或本處委辦計畫執行單位申請更正，使其保持正確、最新及完整。</p>
                    <p>個人資料利用之期間、地區、對象及方式：</p>
                    <p>利用期間：本處或本處委辦計畫執行單位，將於原蒐集目的之存續期間合理利用您的個人資料。</p>
                    <ol>
                        <li>利用地區：除蒐集之目的涉及國際業務或活動外，本處或本處委辦計畫執行單位僅於中華民國領域內利用您的個人資料。</li>
                        <li>利用對象：本處或本處委辦計畫執行單位。</li>
                        <li>利用方式：將於原蒐集之特定目的，及其他公務機關行政協助之目的範圍內，合理利用您的個人資料。</li>
                    </ol>
                    您可依個人資料保護法第3條規定，就您的個人資料向本處或本處委辦計畫執行單位(有關個人資料當事人權利行使請洽本同意書上方所示個資聯絡窗口)，行使下列權利，但因本處或本處委辦計畫執行單位執行職務或業務所必須者，本處或本處委辦計畫執行單位得拒絕之：
                    <p>
                    (一)查詢或請求閱覽。<br>
                    (二)請求製給複製本。<br>
                    (三)請求補充或更正。<br>
                    (四)請求停止蒐集、處理及利用。<br>
                    (五)請求刪除。<br>
                    </p>
                    <p>依個人資料保護法第14條規定，本處得酌收行政作業費用。</p>
                    <p>若您未提供正確之個人資料，本處或本處委辦計畫執行單位將無法為您提供特定目的之相關業務。</p>
                    <p>本處因業務需要而委託其他機關處理您的個人資料時，將善盡監督之責。</p>
                    <p>您瞭解此一同意書符合個人資料保護法及相關法令之要求，且同意本處留存此同意書，供日後取出查驗。</p>
                    <p>個人資料之同意提供</p>
                    <p>本人已充分知悉貴處上述告知事項。</p>
                    <p>本人同意貴處或貴處授權之專案管理單位，蒐集、處理、利用本人之個人資料，以及其他公務機關請求行政協助目的之提供。</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">關閉</button>
                </div>
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.min.js"></script>

    

    <script>
        //西元年
        let max = new Date().getFullYear(),
        min = max - 111
        select = document.querySelector('#establishment');

        for (let i = max+1; i>=min; i--){
            if(i == new Date().getFullYear()+1){
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
        
        //判斷報名領導人數量
        const leaderList = document.querySelector('#leader-List')
        let dom='';
        let leaderNum = 1;
        for(let i=1;i<=5;i++){
            if(i==1){
                dom += `
                <div class="row leader0${i} border-bottom py-3 my-3">
                    <div class="mb-3 col-md-12">
                        <input class="form-check-input" type="radio" name="leader-call" id="leader-call-${i}" value="${i}" checked >
                        <label class="form-check-label" for="leader-call-${i}">若為主要聯絡人請勾選</label>
                    </div>
                    <div class="mb-3 col-md-3">
                        <label for="leader-${leaderNum}" class="form-label">企業接班代表</label>
                        <input type="text" class="form-control" id="leader-${leaderNum}" name="leader-${leaderNum}">
                    </div>
                    <div class="mb-3 col-md-3">
                        <label for="leader-${leaderNum++}" class="form-label">部門職稱</label>
                        <input type="text" class="form-control" id="leader-${leaderNum}" name="leader-${leaderNum}">
                    </div>
                    <div class="mb-3 col-md-3">
                        <label for="leader-${leaderNum++}" class="form-label">連絡電話</label>
                        <input type="text" class="form-control" id="leader-${leaderNum}" name="leader-${leaderNum}" onblur=checkPhone(this.value,${i},"leader-${leaderNum}")>
                        <div id="phone-alert${i}" class="form-text text-danger"></div>
                    </div>
                    <div class="mb-3 col-md-3">
                        <label for="leader-${leaderNum++}" class="form-label">E-MAIL</label>
                        <input type="email" class="form-control" id="leader-${leaderNum}" name="leader-${leaderNum}" onblur=isEmail(this.value,${i},"leader-${leaderNum}")>
                        <div id="email-alert${i}" class="form-text text-danger"></div>
                    </div>
                    <div class="mb-3 col-md-3">
                        <label for="leader-${leaderNum++}" class="form-label">業務簡介</label>
                        <input type="text" class="form-control" id="leader-${leaderNum}" name="leader-${leaderNum}">
                    </div>
                </div>   
            `;
            }else{
                dom += `
                <div class="row leader0${i} border-bottom py-3 my-3" style="display: none;">
                    <div class="mb-3 col-md-12">
                        <input class="form-check-input" type="radio" name="leader-call" id="leader-call-${i}" value="${((i-1)*5)+1}">
                        <label class="form-check-label" for="leader-call-${i}">若為主要聯絡人請勾選</label>
                    </div>
                    <div class="mb-3 col-md-3">
                        <label for="leader-${leaderNum++}" class="form-label">姓名</label>
                        <input type="text" class="form-control" id="leader-${leaderNum}" name="leader-${leaderNum}">
                    </div>
                    <div class="mb-3 col-md-3">
                        <label for="leader-${leaderNum++}" class="form-label">部門職稱</label>
                        <input type="text" class="form-control" id="leader-${leaderNum}" name="leader-${leaderNum}">
                    </div>
                    <div class="mb-3 col-md-3">
                        <label for="leader-${leaderNum++}" class="form-label">連絡電話</label>
                        <input type="text" class="form-control" id="leader-${leaderNum}" name="leader-${leaderNum}" onblur=checkPhone(this.value,${i}, "leader-${leaderNum}")>
                        <div id="phone-alert${i}" class="form-text text-danger"></div>
                    </div>
                    <div class="mb-3 col-md-3">
                        <label for="leader-${leaderNum++}" class="form-label">E-MAIL</label>
                        <input type="email" class="form-control" id="leader-${leaderNum}" name="leader-${leaderNum}" onblur=isEmail(this.value,${i},"leader-${leaderNum}")>
                        <div id="email-alert${i}" class="form-text text-danger"></div>
                    </div>
                    <div class="mb-3 col-md-3">
                        <label for="leader-${leaderNum++}" class="form-label">業務簡介</label>
                        <input type="text" class="form-control" id="leader-${leaderNum}" name="leader-${leaderNum}">
                    </div>
                </div>   
            `;
            }
        }
        leaderList.innerHTML = dom;

        const add_btn = document.querySelector('#add_btn');
        const delete_btn = document.querySelector('#delete_btn');
        const leader02 = document.querySelector('.leader02');
        const leader03 = document.querySelector('.leader03');
        const leader04 = document.querySelector('.leader04');
        const leader05 = document.querySelector('.leader05');
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
            if (count > 5) {
                count = 5
                alert('最多五人');
            }
            // console.log(count)
            if (count == 1) {
                delete_btn.style.display = 'none'
                leader02.style.display = 'none';
                leader03.style.display = 'none';
                leader04.style.display = 'none';
                leader05.style.display = 'none';
            } else if (count == 2) {
                delete_btn.style.display = 'inline'
                leader02.style.display = 'flex';
                leader03.style.display = 'none';
                leader04.style.display = 'none';
                leader05.style.display = 'none';
            } else if (count == 3) {
                leader02.style.display = 'flex';
                leader03.style.display = 'flex';
                leader04.style.display = 'none';
                leader05.style.display = 'none';
            } else if (count == 4) {
                leader02.style.display = 'flex';
                leader03.style.display = 'flex';
                leader04.style.display = 'flex';
                leader05.style.display = 'none';
            } else if (count == 5) {
                leader02.style.display = 'flex';
                leader03.style.display = 'flex';
                leader04.style.display = 'flex';
                leader05.style.display = 'flex';
            }
        }
        
        
        const submit_btn = document.querySelector('.submit_btn');

        const submit_onclick = () => {

            //資料蒐集同意
            const agree = document.querySelector('#agree')
            if(!agree.checked){
                alert('請同意蒐集個人資料告知事項暨個人資料提供')
                agree.scrollIntoView()
                return
            }
      
            const data = {};
            const files = {};
            const ques_s = {};
            const leaderArr = [];
            const ques_sObj = {};
            const ques_mObj = {};

            // const flag_change_classes = document.querySelector('#flag_change_classes');
            // const flag_company = document.querySelector('#flag_company');

            const change_classes = document.querySelector('input[name="change_classes"]:checked');
            
            
            const companyVal = document.querySelector('#company').value;
            const tax_id_noVal = document.querySelector('#tax_id_no').value;
            const recommendVal = document.querySelector('#recommend').value;
            const establishmentVal = document.querySelector('#establishment').value;
            const capitalVal = document.querySelector('#capital').value;
            const employeesVal = document.querySelector('#employees').value;
            const industryVal = document.querySelector('#industry').value;
            const businessVal = document.querySelector('#business').value;
            const addressVal = document.querySelector('#address').value;
            const succeedVal = document.querySelector('#succeed').value;
            const amount_scaleVal = document.querySelector('#amount_scale-01').value + document.querySelector('#amount_scale-02').value;
            const uploadVal = document.querySelector('#upload').value;
            const upload2Val = document.querySelector('#upload2').value;
            const upload3Val = document.querySelector('#upload3').value;


            const leaderCall = document.querySelectorAll('input[name="leader-call"]:checked');

            for(let i=1;i<=25;i++){
                // console.log(i)
                if(leaderCall[0].value == i){
                    leaderArr.push(document.querySelector('#leader-'+i).value+'[聯絡人]');
                }else{
                    leaderArr.push(document.querySelector('#leader-'+i).value);
                }
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
            if(tax_id_noVal.length !== 8){
                alert('統一編號錯誤，請確認後輸入');
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
            if(leaderArr[0] == '' || leaderArr[1] == '' || leaderArr[2] == '' ||  leaderArr[3] == '' || leaderArr[4] == ''){
                alert(txt+flag_leader.innerHTML);
                flag_leader.scrollIntoView()
                return
            }
            //判斷參與計畫接班梯隊人數量有打開就必填否則免
                if(count >= 2){
                    if(leaderArr[5] == '' || leaderArr[6] == '' || leaderArr[7] == '' ||  leaderArr[8] == '' || leaderArr[9] == ''){
                        alert(txt+flag_leader.innerHTML);
                        flag_leader.scrollIntoView()
                        return
                    }
                }
                if(count >= 3){
                    if(leaderArr[10] == '' || leaderArr[11] == '' || leaderArr[12] == '' ||  leaderArr[13] == '' || leaderArr[14] == ''){
                        alert(txt+flag_leader.innerHTML);
                        flag_leader.scrollIntoView()
                        return
                    }
                }
                if(count >= 4){
                    if(leaderArr[15] == '' || leaderArr[16] == '' || leaderArr[17] == '' ||  leaderArr[18] == '' || leaderArr[19] == ''){
                        alert(txt+flag_leader.innerHTML);
                        flag_leader.scrollIntoView()
                        return
                    }
                }
                if(count >= 5){
                    if(leaderArr[20] == '' || leaderArr[21] == '' || leaderArr[22] == '' ||  leaderArr[23] == '' || leaderArr[24] == ''){
                        alert(txt+flag_leader.innerHTML);
                        flag_leader.scrollIntoView()
                        return
                    }
                }
            //END判斷參與計畫接班梯隊人數量有打開就必填否則免
            if(succeedVal == ''){
                alert(txt+flag_succeed.innerHTML);
                flag_succeed.scrollIntoView()
                return
            }
            if(document.querySelector('#amount_scale-01').value == '' || document.querySelector('#amount_scale-02').value == ''){
                alert(txt+flag_amount_scale.innerHTML);
                flag_amount_scale.scrollIntoView()
                return
            }
            if(change_classes == null){
                alert(txt+flag_change_classes.innerHTML);
                flag_change_classes.scrollIntoView()
                return
            }
            if(uploadVal == null || uploadVal == ''){
                alert(txtUpload+flag_upload.innerHTML);
                flag_upload.scrollIntoView()
                return
            }
            if(upload2Val == null || upload2Val == ''){
                alert(txtUpload+flag_upload2.innerHTML);
                flag_upload2.scrollIntoView()
                return
            }
            if(upload3Val == null || upload3Val == ''){
                alert(txtUpload+flag_upload3.innerHTML);
                flag_upload3.scrollIntoView()
                return
            }
            //-------------------------------------------------
            let change_classesVal = '';
            if(change_classes !== null){
                 change_classesVal = change_classes.value
            }
            data['company'] = companyVal;
            data['tax_id_no'] = tax_id_noVal;
            data['recommend'] = recommendVal;
            data['establishment'] = establishmentVal;
            data['capital'] = capitalVal;
            data['employees'] = employeesVal;
            data['industry'] = industryVal;
            data['business'] = businessVal;
            data['address'] = addressVal;
            data['succeed'] = succeedVal;
            data['amount_scale'] = amount_scaleVal;
            data['change_classes'] = change_classesVal;
            data['leader'] = leaderArr;


            //上傳檔案
            files['upload'] = document.querySelector('#upload').files[0];
            files['upload2'] = document.querySelector('#upload2').files[0];
            files['upload3'] = document.querySelector('#upload3').files[0];
            

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
            
            
            for(let i=0;i< m{{$key+1}}checked.length;i++){
                
                tempArr.push(m{{$key+1}}checked[i].value)
                @if ($cate_item_m['customize'] == 'Y' )
                    const custom = document.querySelector('input[name="m{{$key+1}}-custom"]');
                    tempArr.push(custom.value)
                    if(tempArr[1] == null || tempArr[1] == ''){
                        alert(txt+flag_m{{$key+1}}.innerHTML);
                        txt+flag_m{{$key+1}}.scrollIntoView()
                        return
                    }
                @endif
            }
            ques_mArr.push(tempArr);

            @endforeach
            
            

            // for(let i=0;i<ques_mArr.length;i++){
            //     console.log('aa',ques_mArr[i].length)
            // }

            data['ques_m'] = ques_mArr;

            //資料 參考用而已
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
            bodyFormData.append('upload', files['upload']); 
            bodyFormData.append('upload2', files['upload2']); 
            bodyFormData.append('upload3', files['upload3']); 
            // console.log(bodyFormData)
            //檔案
            //----------------------
            axios({
                method: "post",
                url: '/class01s',
                data: bodyFormData,
                headers: { "Content-Type": "multipart/form-data" },
            })
            .then(function (response) {
                submit_btn.disabled = false;
                submit_btn.innerHTML = '送出';
                console.log(response)
                if(response.status == 200){
                    // window.location.reload();
                    if(response.data.code==1000){
                        alert('已發送完成');
                        alert('報名成功');
                        if(dotest.checked){
                            // console.log('有打勾')
                            setTimeout(()=>{
                                document.location.href=`/result?class=01&&id=${data['tax_id_no']}`;
                            },1000)
                        }else{
                            setTimeout(()=>{
                                document.location.href=`/`;
                            },1000)
                        }
                    }else{
                        alert(response.data.msg);
                    }
                    
                }
            })
            .catch(function (response) {
                submit_btn.disabled = false;
                submit_btn.innerHTML = '送出';
                //handle error
                console.log(response);
                alert('請留意輸入字數限制');
                alert('送出發生錯誤，請聯絡管理人員');
            });
            //----------------------

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
                                
                                dotest.checked = true;
                                test_wrap.style.display = 'block'

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

        //email驗證
        function isEmail(strEmail, i, inpDOM) {
            let pattern = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
            if (pattern.test(strEmail)){
                document.querySelector(`#email-alert${i}`).innerHTML = '';
                return true;
            }else{
                document.querySelector(`#email-alert${i}`).innerHTML = 'Email格式錯誤，請重新填寫';
                document.querySelector('#'+inpDOM).value = '';
                // alert("Email格式錯誤，請重新填寫");
            }
        }
        //電話驗證
        function checkPhone(phoneNum, i, inpDOM){ 
            // var phone = document.getElementById('phone').value;
            // let pettern = /^1[34578]\d{9}$/;
            let pettern = /(\d{2,3}-?|\(\d{2,3}\))\d{3,4}-?\d{4}|09\d{2}(\d{6}|-\d{3}-\d{3})/;
            if(pettern.test(phoneNum)){
                document.querySelector(`#phone-alert${i}`).innerHTML = '';
                return true;
            }else{
                document.querySelector(`#phone-alert${i}`).innerHTML = '手機號碼有誤，請重填';
                document.querySelector('#'+inpDOM).value = '';
                // alert("手機號碼有誤，請重填"); 
            }
        }
        
        //判斷上傳檔案的類型
        function checkfile(sender) {
        // 可接受的附檔名.pdf,.jpg,.png
        let validExts = ['.pdf','.jpg','.png'];
        if (sender.value == null) {
            return;
        }
        let fileExt = sender.value;
        fileExt = fileExt.substring(fileExt.lastIndexOf('.'));
        if (validExts.indexOf(fileExt) < 0) {
            sender.value = null;
            alert("檔案類型錯誤，可接受的副檔名有：" + validExts.toString());
                return;
        }
        else return true;
        }
        function checkfile2(sender) {
        // 可接受的附檔名.pdf,.doc
        let validExts = ['.pdf','.doc'];
        if (sender.value == null) {
            return;
        }
        let fileExt = sender.value;
        fileExt = fileExt.substring(fileExt.lastIndexOf('.'));
        if (validExts.indexOf(fileExt) < 0) {
            sender.value = null;
            alert("檔案類型錯誤，可接受的副檔名有：" + validExts.toString());
                return;
        }
        else return true;
        }
        
    </script>
</body>

</html>