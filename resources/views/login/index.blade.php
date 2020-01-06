<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access to BintangTobing management tool.</title>
    <link rel="shortcut icon" href="{!!asset('storage/img/icon-64x.png')!!}">
    <link rel="stylesheet" type="text/css" href="{!!asset('css/auth/bootstrap.min.css')!!}">
    <link rel="stylesheet" type="text/css" href="{!!asset('css/auth/fontawesome-all.min.css')!!}">
    <link rel="stylesheet" type="text/css" href="{!!asset('css/auth/bt-mstyle.css')!!}">
    <link rel="stylesheet" type="text/css" href="{!!asset('css/auth/bt-mstyleother.css')!!}">

    <meta name="robots" content="index, nofollow">
</head>

<body>
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <div class="website-logo-inside">
                            <a href="index.html">
                                <div class="logo">
                                    <img class="logo-size" src="{!!asset('storage/img/bt-logo@120px.png')!!}" alt="">
                                </div>
                            </a>
                        </div>
                        <h3>Access to BintangTobing tool in dashboard web.</h3>
                        {{-- <div class="page-links">
                            <a href="#" class="active">Login</a>
                        </div> --}}
                        <form>
                            <input class="form-control" type="text" name="username" placeholder="Username" required>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Login</button> <a href="#">Forget
                                    password?</a>
                            </div>
                        </form>
                        {{-- <div class="other-links">
                            <span>Or login with</span><a href="#">Facebook</a><a href="#">Google</a><a
                                href="#">Linkedin</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
