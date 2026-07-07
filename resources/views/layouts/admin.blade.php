<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PGVCL Pole Survey Software</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>

        body{
            overflow-x:hidden;
            background:#f4f6f9;
        }

        .sidebar{

            width:260px;
            min-height:100vh;
            background:#0d6efd;
            position:fixed;
            left:0;
            top:0;
            color:white;

        }

        .sidebar h3{

            padding:20px;
            text-align:center;
            font-weight:bold;
            border-bottom:1px solid rgba(255,255,255,.2);

        }

        .sidebar a{

            display:block;
            color:white;
            text-decoration:none;
            padding:15px 20px;
            transition:.3s;

        }

        .sidebar a:hover{

            background:white;
            color:#0d6efd;

        }

        .content{

            margin-left:260px;
            padding:20px;

        }

        .topbar{

            background:white;
            padding:15px 20px;
            border-radius:12px;
            margin-bottom:20px;
            box-shadow:0 2px 10px rgba(0,0,0,.08);

        }

        .card-box{

            border:none;
            border-radius:15px;
            color:white;
            padding:20px;

        }

        .bg1{background:#0d6efd;}
        .bg2{background:#198754;}
        .bg3{background:#ffc107;color:#000;}
        .bg4{background:#dc3545;}

        @media(max-width:768px){

            .sidebar{

                width:100%;
                min-height:auto;
                position:relative;

            }

            .content{

                margin-left:0;

            }

        }

    </style>

</head>

<body>

<div class="sidebar">

    <h3>PGVCL</h3>

    <a href="{{ route('dashboard') }}">
        <i class="bi bi-house"></i>
        Dashboard
    </a>

    <a href="{{ route('projects.index') }}">
        <i class="bi bi-folder2-open"></i>
        Projects
    </a>

    <a href="#">
        <i class="bi bi-clipboard-data"></i>
        Survey
    </a>

    <a href="#">
        <i class="bi bi-geo-alt"></i>
        Pole Survey
    </a>

    <a href="#">
        <i class="bi bi-box-seam"></i>
        Material Estimate
    </a>

    <a href="#">
        <i class="bi bi-file-earmark-bar-graph"></i>
        Reports
    </a>

    <a href="#">
        <i class="bi bi-people"></i>
        Users
    </a>

    <a href="#">
        <i class="bi bi-gear"></i>
        Settings
    </a>

    <form action="{{ route('logout') }}" method="POST">

        @csrf

        <button class="btn btn-danger w-100 rounded-0">
            Logout
        </button>

    </form>

</div>

<div class="content">

    <div class="topbar d-flex justify-content-between">

        <h4 class="mb-0">
            PGVCL Pole Survey Software
        </h4>

        <strong>
            {{ auth()->user()->name }}
        </strong>

    </div>

    @yield('content')

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>