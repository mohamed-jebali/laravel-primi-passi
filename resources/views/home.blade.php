<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pseudo Laravel Home</title>
    <!-- LINK BOOTSTRAP V.5.3.0 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- FONTAWESOME LINK V 6.4.0 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<style>
    img{
        height:30px;
    }
    .logo{
        height:50px;
    }
    .upper-info{
        background-color:#f9322c;
    }
    ul{
        list-style-type:none ;
        display:flex;
        align-items:center;
    }

    ul li a{
        color:grey;
        font-size:0.85rem;
        font-weight:200;
        margin-top:1rem;
        text-decoration:none;
        margin-right:2.5rem;
    }
    h1{
        font-size:4rem;
    }
    .title{
        margin-top:8rem;
        padding:0 16rem;
    }
    .laravel-color{
        color: #f9322c;
    }
</style>
<body>
    <div class="upper-info container-fluid py-2 text-white text-center">
    <i class="fa-solid fa-server me-2"></i>  Servers with PHP 8.2 are now available for provisioning via Laravel Forge. 
    </div>
    <div class="container">
        <div class="row align-items-end justify-content-between">
            <div class="col-3 d-flex mt-4 align-items-center">
                <img class='me-3 logo' src="https://laravel.com/img/logomark.min.svg" alt="laravel-logo">
                <img src="https://laravel.com/img/logotype.min.svg" alt="laravel-logo">
            </div>
            <div class="col-3 d-flex mt-4">
                <ul>
                @foreach($listhome as $element)
                    <li>
                        <a href="{{ $element['link'] }}">
                            {{$element['name']}}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-3 d-flex mt-4 align-items-center">
               <i class="fa-solid fa-magnifying-glass fa-xl me-4"></i>
               <button type="button" class="btn btn-outline-danger rounded-0">DOCUMENTATION</button>
            </div>
        </div>
        <div class="row text-center title">
            <h1>
            The PHP Framework
            <span class="laravel-color">
                for Web Artisans
            </span>
            </h1>
        </div>
    </div>
</body>
</html>