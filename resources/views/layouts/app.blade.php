<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
    <style>
        body {
            display: flex;
            min-height: 100vh;
            margin: 0;
        }
        .sidebar {
            width: 250px;
            background-color: #343a40;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            padding: 15px 20px;
            display: flex;
            align-items: center;
        }
        .sidebar a:hover, .sidebar a.active {
            background-color: #495057;
        }
        .sidebar a i {
            margin-right: 10px;
        }
        .content {
            flex-grow: 1;
            padding: 20px;
            background-color: #f8f9fa;
        }
        footer {
            text-align: center;
            padding: 10px 0;
            color: #6c757d;
            font-size: 14px;
        }

        /* ✅ Custom Navy */
        .bg-navy {
            background-color: #000080 !important; /* Navy */
        }
        .text-navy {
            color: #000080 !important;
        }
        .btn-navy {
            background-color: #000080!important;
            border-color: #000080 !important;
            color: #fff !important;
        }
        .btn-navy:hover {
            background-color: #000080 !important;
            border-color: #000080 !important;
        }
    </style>
</head>
<body>
    @include('partials.sidebar')

    <div class="content">
        @yield('content')
        @include('partials.footer')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
