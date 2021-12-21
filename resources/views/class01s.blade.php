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

        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title text-brand">第一部分:基本資料</h5>
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="input01" class="form-label ">公司名稱</label>
                        <input type="text" class="form-control" id="input01">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="input02" class="form-label ">統一編號</label>
                        <input type="text" class="form-control" id="input02">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="input03" class="form-label ">創立日期(西元年)</label>
                        <input type="text" class="form-control" id="input03">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="input04" class="form-label ">資本額(萬元)</label>
                        <input type="text" class="form-control" id="input04">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="input05" class="form-label ">員工人數</label>
                        <input type="text" class="form-control" id="input05">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="input06" class="form-label ">行業別</label>
                        <select class="form-select" aria-label="Default select example" id="input06">
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
                        <input type="text" class="form-control" id="input07">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="input08" class="form-label ">公司地址</label>
                        <input type="text" class="form-control" id="input08">
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h5 class="card-title text-brand">第二部分：參與計畫接班梯隊</h5>
                    <div>
                        <button class="btn btn-secondary" id="delete_btn" style="display: none;"> 清除</button>
                        <button class="btn bg-brand text-white" id="add_btn"> 新增</button>
                    </div>
                </div>
                <p>※參與團隊須包含企業接班人或高階主管職之企業領袖，可自行增列表格</p>
                <div class="row leader01 border-bottom py-3 my-3">
                    <div class="mb-3 col-md-3">
                        <label for="input09-01" class="form-label ">姓名1</label>
                        <input type="text" class="form-control" id="input09-01">
                    </div>
                    <div class="mb-3 col-md-3">
                        <label for="input09-02" class="form-label ">部門職稱</label>
                        <input type="text" class="form-control" id="input09-02">
                    </div>
                    <div class="mb-3 col-md-3">
                        <label for="input09-03" class="form-label ">連絡電話</label>
                        <input type="text" class="form-control" id="input09-03">
                    </div>
                    <div class="mb-3 col-md-3">
                        <label for="input09-04" class="form-label ">E-MAIL</label>
                        <input type="text" class="form-control" id="input09-04">
                    </div>
                    <div class="mb-3 col-md-3">
                        <label for="input09-05" class="form-label ">業務簡介</label>
                        <input type="text" class="form-control" id="input09-05">
                    </div>
                </div>
                <div class="row leader02 border-bottom py-3 my-3" style="display: none;">
                    <div class="mb-3 col-md-3">
                        <label for="input09-06" class="form-label ">姓名2</label>
                        <input type="text" class="form-control" id="input09-06">
                    </div>
                    <div class="mb-3 col-md-3">
                        <label for="input09-07" class="form-label ">部門職稱</label>
                        <input type="text" class="form-control" id="input09-07">
                    </div>
                    <div class="mb-3 col-md-3">
                        <label for="input09-08" class="form-label ">連絡電話</label>
                        <input type="text" class="form-control" id="input09-08">
                    </div>
                    <div class="mb-3 col-md-3">
                        <label for="input09-09" class="form-label ">E-MAIL</label>
                        <input type="text" class="form-control" id="input09-09">
                    </div>
                    <div class="mb-3 col-md-3">
                        <label for="input09-10" class="form-label ">業務簡介</label>
                        <input type="text" class="form-control" id="input09-10">
                    </div>
                </div>
                <div class="row leader03 border-bottom py-3 my-3" style="display: none;">
                    <div class="mb-3 col-md-3">
                        <label for="input09-11" class="form-label ">姓名3</label>
                        <input type="text" class="form-control" id="input09-11">
                    </div>
                    <div class="mb-3 col-md-3">
                        <label for="input09-12" class="form-label ">部門職稱</label>
                        <input type="text" class="form-control" id="input09-12">
                    </div>
                    <div class="mb-3 col-md-3">
                        <label for="input09-13" class="form-label ">連絡電話</label>
                        <input type="text" class="form-control" id="input09-13">
                    </div>
                    <div class="mb-3 col-md-3">
                        <label for="input09-14" class="form-label ">E-MAIL</label>
                        <input type="text" class="form-control" id="input09-14">
                    </div>
                    <div class="mb-3 col-md-3">
                        <label for="input09-15" class="form-label ">業務簡介</label>
                        <input type="text" class="form-control" id="input09-15">
                    </div>
                </div>
            </div>
        </div>






        <div class="input-group mb-3">
            <span class="input-group-text bg-brand text-white" id="basic-addon1">企業接班情形</span>
            <input type="text" class="form-control" placeholder="企業接班情形" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text bg-brand text-white" id="basic-addon1">投入金額規模</span>
            <input type="text" class="form-control" placeholder="投入金額規模" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text bg-brand text-white" id="basic-addon1">轉入共學班</span>
            <input type="text" class="form-control" placeholder="轉入共學班" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text bg-brand text-white" id="basic-addon1">提案計畫書</span>
            <input type="text" class="form-control" placeholder="提案計畫書" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text bg-brand text-white" id="basic-addon1">曾執行政府計畫揭露聲明書</span>
            <input type="text" class="form-control" placeholder="曾執行政府計畫揭露聲明書" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text bg-brand text-white" id="basic-addon1">公司登記證明文件</span>
            <input type="text" class="form-control" placeholder="公司登記證明文件" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text bg-brand text-white" id="basic-addon1">企業數位化程度健診</span>
            <input type="text" class="form-control" placeholder="企業數位化程度健診" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text bg-brand text-white" id="basic-addon1">業需求及準備</span>
            <input type="text" class="form-control" placeholder="業需求及準備" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text bg-brand text-white" id="basic-addon1">上傳資料</span>
            <input type="text" class="form-control" placeholder="上傳資料" aria-describedby="basic-addon1">
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


    <script>
        const add_btn = document.querySelector('#add_btn');
        const delete_btn = document.querySelector('#delete_btn');
        const leader02 = document.querySelector('.leader02');
        const leader03 = document.querySelector('.leader03');
        let count = 1;
        add_btn.addEventListener('click',()=>{
            count++
            handLeaderList();
        })
        delete_btn.addEventListener('click',()=>{
            count--
            handLeaderList();
        })

        const handLeaderList = () =>{
            if(count < 1){count = 1}
            if(count > 3){count = 3}
            console.log(count)
            if(count == 1){
                delete_btn.style.display='none'
                leader02.style.display='none';
                leader03.style.display='none';
            }else if(count == 2){
                delete_btn.style.display='inline'
                leader02.style.display='flex';
                leader03.style.display='none';
            }else if(count == 3){
                leader02.style.display='flex';
                leader03.style.display='flex';
            }
        }
    </script>
</body>

</html>