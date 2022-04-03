<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>{{$company}}</title>
</head>
<body>
    <style>
        body {
            font-family: "msjh";
        }
    </style>
    <p>{{$company}}</p>
    @if ($type == 's')
        <table class="table table-bordered table-striped">
        @foreach($getData as $key=>$item)
            <tr><td>{{ $key+1 }}. </td><td>({{ $item['ansNO'] }}) {{ $item['ansTxt'] }}</td><td>{{ $item['content'] }}</td></tr>
        @endforeach
        </table>
    @else
        <table class="table table-bordered table-striped">
            @foreach($getData as $key=>$item)
                <tr>
                    <td>{{ $key+1 }}.  {{ $item['category'] }}</td>
                </tr>
                <tr>
                    <td>{{ $item['ansTxt'] }}</td>
                </tr>
            @endforeach
        </table>
    @endif
    
    
    
</body>
</html>