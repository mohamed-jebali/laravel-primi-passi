<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Steps Laravel</title>
    <link rel="icon" href="https://laravel.com/img/logomark.min.svg">
    <!-- LINK BOOTSTRAP V.5.3.0 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<style>
    ul{
        list-style-type:none;
    }
</style>
<body>
    <style>
        li{
            color:white;
            font-size: 1.5rem;
            font-family:"helvetica";
        }
        header{
            background-color: #ff2d20;
            padding:1rem 0;
        }
        a{
            text-decoration:none;
            color:white;
        }
    </style>
    <header>
        <div class="wrapper-header container">
            <ul class='row text-center'>
                    @foreach($listnavbar as $element)
                    <li class="col-3 mt-2">
                        <a href="{{ $element['link'] }}">
                            {{$element['name']}}
                        </a>
                    </li>
                    @endforeach
            </ul>
        </div>
    </header>
</body>
</html>