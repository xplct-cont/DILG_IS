<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <style>
        .container {
            width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 600px;
            margin: auto;
            text-align: center;
            font-family: arial;
            background-color: #333;
            color: #fff;
        }

        .title {
            color: #f2f2f2;
            font-size: 18px;
        }

        button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;

        }

        a {
            text-decoration: none;
            font-size: 22px;
            color: black;
        }

        button:hover,
        a:hover {
            opacity: 0.7;
        }

        p {
            text-align: justify;
        }
    </style>

</head>

<body>

    <div class="container">
        <div class="card bg-dark">
            <div class="card-header">
                <h1 style="font-size: 20px; color:rgb(241, 235, 235)">DILG Bohol Province</h1>
            </div>
            <div class="card-body">
                <div class="subject">
                    Subject: {{ $subject }}
                </div><br>

                <div class="content">
                    Content: <br>
                    <p style="padding: 20px;">
                        {{ $content }}
                    </p>
                </div>

            </div>
        </div>
    </div>

</body>

</html>
