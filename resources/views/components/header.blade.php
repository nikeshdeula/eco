<?php
use App\Http\Controllers\ProductController;
$total = ProductController::cartItem();
?>

<nav
    class="navbar navbar-expand-sm navbar-dark bg-dark"
>
    <a class="navbar-brand" href="#">&nbsp; Eco.</a>
    <button
        class="navbar-toggler d-lg-none"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#collapsibleNavId"
        aria-controls="collapsibleNavId"
        aria-expanded="false"
        aria-label="Toggle navigation"
    ></button>
    <div class=" container collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav  me-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link active" href="#" aria-current="page"
                    >Home <span class="visually-hidden">(current)</span></a
                >
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
           
        </ul>
        <form class="d-flex my-2 my-lg-0">
            <input
                class="form-control me-sm-2"
                type="text"
                placeholder="Search"
            />
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                Search
            </button>
           
        </form>
        <li class="nav-item text-white list-unstyled m-2">
            <a class="nav-link" href="#">Cart ({{$total}})</a>
        </li>
    </div>
</nav>
