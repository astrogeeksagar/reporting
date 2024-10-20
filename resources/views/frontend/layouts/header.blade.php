<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://unpkg.com/tabulator-tables@6.3.0/dist/css/tabulator.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://oss.sheetjs.com/sheetjs/xlsx.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.20/jspdf.plugin.autotable.min.js"></script>
    <script src="https://unpkg.com/tabulator-tables@6.3.0/dist/js/tabulator.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>Tabulator</title>
</head>

<body>
    <header class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Tabulator</a>
            <img src="https://tabulator.info/images/logos/t_square_hollow.png" alt="Profile" class="profile-logo">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownHome" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-home"></i> Home
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownHome">
                            <li><a class="dropdown-item" href="#">Welcome</a></li>
                            <li><a class="dropdown-item" href="#">Featured Projects</a></li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#">More Options</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Testimonials</a></li>
                                    <li><a class="dropdown-item" href="#">Awards</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownAbout" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user"></i> Tabulator
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownAbout">
                            <li><a class="dropdown-item" href="{{ url('print_tabulator') }}">Print</a></li>
                            <li><a class="dropdown-item" href="{{ url('pagination_tabulator') }}">Pagination</a></li>
                            <li><a class="dropdown-item" href="{{ url('filter_tabulator') }}">Search</a></li>
                            <li><a class="dropdown-item" href="{{ url('groupby_tabulator') }}">Group_By</a></li>
                            
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#">Calculation</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ url('sum_tabulator') }}">SUM</a></li>
                                    <li><a class="dropdown-item" href="{{ url('avg_tabulator') }}">AVG</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownProjects" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-project-diagram"></i> Projects
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownProjects">
                            <li><a class="dropdown-item" href="#">Web Development</a></li>
                            <li><a class="dropdown-item" href="#">Mobile Apps</a></li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#">Other Projects</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">UI/UX Design</a></li>
                                    <li><a class="dropdown-item" href="#">Data Science</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-envelope"></i> Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <div class="container">

