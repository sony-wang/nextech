<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NexTech</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{url('/css/style.css')}}" rel="stylesheet">
</head>

<body class="bg">
    <div class="d-flex justify-content-center my-3">
        <a href="/">
            <img class="logo" src="{{url('/img/logo.svg')}}" alt="">
        </a>
    </div>
    <div class="text-center my-5">
        <p>N世代學苑（NexTech Academy）線上申請</p>
        <p><span class="bg-brand2 text-white p-2 rounded-pill mx-2">標竿企業實戰班</span>自公告日起至 <strong id="time_01"></strong>止</p>
        <p><span class="bg-brand text-white  p-2 rounded-pill mx-2">潛力企業共學班</span>自公告日起至 <strong id="time_02"></strong>止</p>
        <!-- <p><span class="bg-brand2  text-white p-2 rounded-pill mx-2">標竿企業實戰班</span>自公告日起至 111 年 2 月 25 日17:00止</p> -->
        <!-- <p><span class="bg-brand text-white  p-2 rounded-pill mx-2">潛力企業共學班</span>自公告日起至 111 年 3 月 18 日17:00止</p> -->
    </div>

    <div class="container">
    <div class="d-flex justify-content-center">
        <a class="shadow-sm btn btn-outline-secondary text-center d-block text-decoration-none px-3 rounded my-3" href="/degree">
            <p>不知道適合報名哪班嗎?</p>
            <h3>企業數位化程度健診</h3>
            <h3 class="text-center rounded-pill border border-1 shadow-sm py-2">前往健診</h3>
        </a>
    </div>
        <div class="row">
            <div class="col-md-6">
                <a class="text-center d-block bg-brand2 text-white text-decoration-none py-4 px-3 rounded my-3 class01" href="/class01">
                    <h3>標竿企業實戰班</h3>
                    <p>報名截止日期倒數</p>
                    <div class="d-flex justify-content-center" id="timeTXT">
                        <h2 id="dd" class="mx-1"></h2><span class="">天</span>
                        <h2 id="hh" class="mx-1"></h2><span class="">時</span>
                        <h2 id="mm" class="mx-1"></h2><span class="">分</span>
                        <h2 id="ss" class="mx-1"></h2><span class="">秒</span>
                    </div>
                    <h4 class="text-center rounded-pill bg-white text-brand2 py-2">我要報名</h4>
                </a>
            </div>
            <div class="col-md-6">
                <a class="text-center d-block bg-brand text-white text-decoration-none py-4 px-3 rounded my-3 class02" href="/class02">
                    <h3>潛力企業共學班</h3>
                    <p>報名截止日期倒數</p>
                    <div class="d-flex justify-content-center" id="timeTXT2">
                        <h2 id="dd2" class="mx-1"></h2><span class="">天</span>
                        <h2 id="hh2" class="mx-1"></h2><span class="">時</span>
                        <h2 id="mm2" class="mx-1"></h2><span class="">分</span>
                        <h2 id="ss2" class="mx-1"></h2><span class="">秒</span>
                    </div>
                    <h4 class="text-center rounded-pill bg-white text-brand py-2">我要報名</h4>
                </a>
            </div>
            <div class="d-flex justify-content-center my-5">
                @if (empty($link))
                <a class="btn btn-outline-secondary" href="upload/{{$file}}" target="_blank">簡章下載</a>
                @else
                <a class="btn btn-outline-secondary" href="{{$link}}" target="_blank">簡章下載</a>
                @endif
            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.min.js"></script>

    <script>
        let timeAll01 = new Date("{{$t01}}".replace(/\s/, 'T'));
        let yy_01 = timeAll01.getFullYear()-1911;
        let mm_01 = timeAll01.getMonth()+1;
        let dd_01 = timeAll01.getDate();
        let hh_01 = timeAll01.getHours();
        let nn_01 = timeAll01.getMinutes();
        let arrange_time01 = `${yy_01} 年 ${mm_01} 月 ${dd_01} 日 ${hh_01}:${nn_01}`;
        console.log(arrange_time01);
        document.querySelector('#time_01').innerHTML = arrange_time01;

        let timeAll02 = new Date("{{$t02}}".replace(/\s/, 'T'));
        let yy_02 = timeAll02.getFullYear()-1911;
        let mm_02 = timeAll02.getMonth()+1;
        let dd_02 = timeAll02.getDate();
        let hh_02 = timeAll02.getHours();
        let nn_02 = timeAll02.getMinutes();
        let arrange_time02 = `${yy_02} 年 ${mm_02} 月 ${dd_02} 日 ${hh_02}:${nn_02}`;
        console.log(arrange_time02);
        document.querySelector('#time_02').innerHTML = arrange_time02;
        

        let DifferenceHour = -1
        let DifferenceMinute = -1
        let DifferenceSecond = -1
        //Jan,Feb,Mar,Apr,Jun,Jul,Aug,Sep,Nov,dec
        // let Tday = new Date("Febru 30, 2021 23:59:59")
        // 標竿企業實戰班-自公告日起至 111 年 2 月 25 日17:00止
        // let Tday = new Date("Feb 25, 2022 16:59:59")
        let Tday = new Date("{{$t01}}".replace(/\s/, 'T'))
        // 潛力企業共學班    111 年 3 月 18 日17:00止
        // let Tday2 = new Date("Mar 18, 2022 16:59:59")
        let Tday2 = new Date("{{$t02}}".replace(/\s/, 'T'))
        let daysms = 24 * 60 * 60 * 1000
        let hoursms = 60 * 60 * 1000
        let Secondms = 60 * 1000
        let microsecond = 1000


        const dd = document.querySelector('#dd');
        const hh = document.querySelector('#hh');
        const mm = document.querySelector('#mm');
        const ss = document.querySelector('#ss');
        const dd2 = document.querySelector('#dd2');
        const hh2 = document.querySelector('#hh2');
        const mm2 = document.querySelector('#mm2');
        const ss2 = document.querySelector('#ss2');
        const timeTXT = document.querySelector('#timeTXT');

        function clock() {
            let time = new Date()
            let hour = time.getHours()
            let minute = time.getMinutes()
            let second = time.getSeconds()
            let timevalue = "" + ((hour > 12) ? hour - 12 : hour)
            timevalue += ((minute < 10) ? ":0" : ":") + minute
            timevalue += ((second < 10) ? ":0" : ":") + second
            timevalue += ((hour > 12) ? " PM" : " AM")
            let convertHour = DifferenceHour
            let convertMinute = DifferenceMinute
            let convertSecond = DifferenceSecond
            let Diffms = Tday.getTime() - time.getTime()
            DifferenceHour = Math.floor(Diffms / daysms)
            Diffms -= DifferenceHour * daysms
            DifferenceMinute = Math.floor(Diffms / hoursms)
            Diffms -= DifferenceMinute * hoursms
            DifferenceSecond = Math.floor(Diffms / Secondms)
            Diffms -= DifferenceSecond * Secondms
            let dSecs = Math.floor(Diffms / microsecond)

            const timeTXT = document.querySelector('#timeTXT');

            if (DifferenceHour < 0 || DifferenceMinute < 0 || DifferenceSecond < 0) {
                timeTXT.innerHTML = '<h1 class="text-danger">已截止</h1>'
            }

            if (convertHour != DifferenceHour) dd.innerHTML = DifferenceHour //+ '天'
            if (convertMinute != DifferenceMinute) hh.innerHTML = DifferenceMinute //+ '時'
            if (convertSecond != DifferenceSecond) mm.innerHTML = DifferenceSecond //+ '分'
            ss.innerHTML = dSecs //+ '秒'
            setTimeout("clock()", 1000)
        }

        function clock2() {
            let time = new Date()
            let hour = time.getHours()
            let minute = time.getMinutes()
            let second = time.getSeconds()
            let timevalue = "" + ((hour > 12) ? hour - 12 : hour)
            timevalue += ((minute < 10) ? ":0" : ":") + minute
            timevalue += ((second < 10) ? ":0" : ":") + second
            timevalue += ((hour > 12) ? " PM" : " AM")
            let convertHour = DifferenceHour
            let convertMinute = DifferenceMinute
            let convertSecond = DifferenceSecond
            let Diffms = Tday2.getTime() - time.getTime()
            DifferenceHour = Math.floor(Diffms / daysms)
            Diffms -= DifferenceHour * daysms
            DifferenceMinute = Math.floor(Diffms / hoursms)
            Diffms -= DifferenceMinute * hoursms
            DifferenceSecond = Math.floor(Diffms / Secondms)
            Diffms -= DifferenceSecond * Secondms
            let dSecs = Math.floor(Diffms / microsecond)

            const timeTXT2 = document.querySelector('#timeTXT2');

            if (DifferenceHour < 0 || DifferenceMinute < 0 || DifferenceSecond < 0) {
                timeTXT2.innerHTML = '<h1 class="text-danger">已截止</h1>'
            }

            // if (convertHour != DifferenceHour) dd2.innerHTML = DifferenceHour //+ '天'
            // if (convertMinute != DifferenceMinute) hh2.innerHTML = DifferenceMinute //+ '時'
            // if (convertSecond != DifferenceSecond) mm2.innerHTML = DifferenceSecond //+ '分'
            dd2.innerHTML = DifferenceHour //+ '天'
            hh2.innerHTML = DifferenceMinute //+ '時'
            mm2.innerHTML = DifferenceSecond //+ '分'
            ss2.innerHTML = dSecs //+ '秒'
            setTimeout("clock2()", 1000)
        }
        clock();
        clock2();
    </script>
</body>

</html>