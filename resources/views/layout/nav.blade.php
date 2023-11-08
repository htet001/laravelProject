<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orange Navigation with Dropdown</title>
    <style>
    /* Custom CSS styles */
    body {
        font-family: Arial, sans-serif;
        background-color: #f9f9f9;
    }

    .navbar {
        background-color: #ffa200;
    }

    .navbar-collapse {
        flex-grow: 0;
    }

    .navbar-brand,
    .navbar-nav .nav-link {
        color: #fff;
    }

    .nav-link {
        background-color: #e74c3c;
        border: none;
        border-radius: 25px;
        margin-right: 10px;
    }

    .navbar-nav .nav-link:hover {
        background-color: white;
        color: black;
    }

    #navbarNav {
        justify-content: end;
    }

    .search-form {
        justify-content: center;
    }

    .search-form input {
        border: none;
        border-radius: 25px;
    }

    .search-form button {
        background-color: #e74c3c;
        border: none;
        border-radius: 25px;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{url('/')}}"><i class="fa-sharp fa-solid fa-house-chimney"
                    style="color: #ffffff;"></i>HHHHHHH</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Search Bar -->
            <form class="form-inline search-form">
                <div class="d-flex">
                    <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </div>
            </form>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cart&nbsp;&nbsp;<i class="fa-sharp fa-solid fa-cart-plus"
                                id="nav_icon" style="color: black;"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Brand</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="portfolioDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Product
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="portfolioDropdown">
                            <li><a class="dropdown-item" href="{{url('products/create')}}">Create</a></li>
                            <li><a class="dropdown-item" href="#">View All Product</a></li>
                            <li><a class="dropdown-item" href="#">Edit</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="portfolioDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Membership
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="portfolioDropdown">
                            <li><a class="dropdown-item" href="#">Login</a></li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                            <li><a class="dropdown-item" href="#">Register</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>

</html>