<html>
<head>
    <title>App Name - @yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" />
</head>
<body>
<nav class="navbar navbar-light navbar-expand-lg navbar-dark   shadow-sm p-2 rounded-bottom mb-5" style="background-color: #1C7ACD ;">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route("welcome")}}">Hola mundo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse  " id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown  "  >
                    <a style="color:white" class="nav-link dropdown-toggle  " href="#" id="navbarDropdown" role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Formularios
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="menuc" style="background-color:#FD3030;" >
                        <a class="dropdown-item btn btn-primary  " id="Rg_lib"  href="{{route("formulario")}}"   ><i class="fas fa-atlas"></i> Formulario </a>

                    </div>


            </ul>

        </div>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>
</body>
</html>
