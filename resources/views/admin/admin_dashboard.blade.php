<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        .sidebar {
            background-color: #ffffff;
            height: 100%;
            position: absolute;
            margin-top: -4rem;
            top: 3.5rem;
            left: 0;
            overflow-y: auto;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }

        .sidebar li {
            color: #4f4f4f;
            margin-left: 2rem;
            padding: 0;
        }

        .sidebar a :hover {
            color: #000000;
        }

        .sidebar a {
            padding: 0;
            margin: 0;
            text-decoration: none;
        }

        .fa-solid {
            margin-right: 1rem;
        }
    </style>
</head>

<body>
    @extends('layouts.app')

    @section('content')
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="col-md-3 col-lg-2 sidebar mt-0 pt-3">
                        <ul class="list-unstyled">
                            <a href="#" class="nav-link">
                                <li class="nav-item">
                                    <i class="fa-solid fa-house"></i>
                                    <span>Home</span>
                                </li>
                            </a>
                            <hr>
                            <a href="#" class="nav-link">
                                <li class="nav-item">
                                    <i class="fa-solid fa-user"></i>
                                    <span>System Users</span>
                                </li>
                            </a>
                            <hr>
                            <a href="#" class="nav-link">
                                <li class="nav-item">
                                    <i class="fa-solid fa-user-plus"></i>
                                    <span>Create Users</span>
                                </li>
                            </a>

                            <hr>
                            <a href="#" class="nav-link">
                                <li class="nav-item">
                                    <i class="fa-solid fa-circle-info"></i>
                                    <span>Help</span>
                                </li>
                            </a>
                            <hr>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8" style="margin-left: -10rem;">
                    <h2 class=" d-flex justify-content-center">Welcome to E loan Management System</h2>
                    <p class="mt-5">A Loan Management System (LMS) is a comprehensive software solution designed to
                        streamline and
                        automate the processes involved in managing loans throughout their lifecycle. It supports various
                        loan types, including personal, mortgage, and business loans. Key functionalities of an LMS include
                        loan origination, where applications are submitted and processed; loan approval and disbursement,
                        where decisions are made and funds are allocated; and loan servicing, which handles ongoing account
                        management, payment collections, and customer support.
                    </p>
                </div>
            </div>
        </div>
    @endsection
</body>

</html>
