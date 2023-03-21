<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>

<body>
    <div> <img src="{{ public_path('img/dilg-main.png') }}" style="width: 100px; height: 100px; border-radius: 50%;">
    </div>
    <div style="margin-top: -120px;">
        <h1>DEPARTMENT OF THE INTERIOR AND LOCAL GOVERNMENT</h1>
        <h2>Bohol Province</h2>
    </div>
    <div class="" style="margin-top: -30px;">
        <h1>CITIZENS CHARTER</h1>
    </div>
    <hr>

    @foreach ($citizens_charters as $charters)
        <div class="container">
            <img src="{{ public_path('/home/dilgboho/public_html/citizens_charter_images/'. $charters->images) }}" alt=""
                style="height: 100%; width: 100%; ">
        </div>
    @endforeach

</body>

</html>

<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    h1 {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 16px;
        margin-top: 35px;
        text-align: center;
    }

    h2 {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 14px;
        margin-top: -5px;
        text-align: center;
    }
</style>
