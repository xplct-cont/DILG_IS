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
</head>

<body>

    <div class="container">
        <div class="card bg-dark">
            <div class="card-header">
                <h1 style="font-size: 20px; color:dimgray">DILG Bohol Province</h1>
            </div>
            <div class="card-body">
                <div class="subject">
                    Subject: {{ $subject }}
                </div><br>

                <div class="content">
                    Content: {{ $content }}
                </div>

            </div>
        </div>
    </div>

</body>

</html>
