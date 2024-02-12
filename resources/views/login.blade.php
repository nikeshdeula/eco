@extends('layout')
@section('content')

<form action="" method="post" class="container login">
    <h3 class="mb-4">WELCOME TO LOGIN</h3>
    <div class="mb-3 w-25 ">
        <label for="" class="form-label">Email</label>
        <input
            type="text"
            name="email"
            id=""
            class="form-control"
            placeholder=""
            aria-describedby="helpId"
        />
    </div>
    <div class="mb-3 w-25">
        <label for="" class="form-label">password</label>
        <input
            type="text"
            name="password"
            id=""
            class="form-control"
            placeholder=""
            aria-describedby="helpId"
        />
    </div>
    <button class="btn bg-dark text-white w-25">LOGIN</button>
</div>
    <a href="/" class="mt-3">New Member? Register Here</a>
</form>
    
@endsection