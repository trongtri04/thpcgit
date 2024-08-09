<!doctype html>
<html lang="en">

<head>
    @include('parts.head')

</head>

<body>

</body>
<h1>Trang đang nhập</h1>
<h3>Email: doanhuy9909@gmail.com</h3>
<h3>pass: 123456</h3>
<form action="/check_login" method="POST">
    <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="email" name="email" placeholder="email" class="form-control" id="inputEmail3">
        </div>
    </div>
    <div class="row mb-3">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <input type="password" name="password" placeholder="password" class="form-control" id="inputPassword3">
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Sign in</button>
    @csrf
</form>
<!-- <h1>Email: doanhuy9909@gmail.com</h1>
    <h1>Pass: 123456</h1>
    <input type="text" name="email" placeholder="email">
    <input type="password" name="password" placeholder="password">
    <button type="submit">Đăng nhập</button>
    @csrf -->


<!-- footer -->
@include('parts.footer')