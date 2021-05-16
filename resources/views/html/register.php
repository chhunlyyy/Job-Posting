<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style><?php include 'C:\xampp\htdocs\Job-Posting\resources\css\style.css'; ?></style>
</head>
<body>
    <div class="container p-5 my-5" >
        <div class="row pt-3">
            <div class="col-xl-3 col-lg-3 col-md-2 col-sm-1 ">
            </div>
            <div class="col-xl-6 col-lg-6 col-md-8 col-sm-10 ">
            <center><h1>Sign Up</h1></center>
            <form class="pt-5">
                <div class="form-group">
                    <label for="firstname">First Name</label>
                    <input type="text" class="form-control border" id="fristname" name="fristname"placeholder="">
                </div>
                <div class="form-group">
                    <label for="lastname">Last Name</label>
                    <input type="text" class="form-control border" id="lastname" name="lastname" placeholder="">
                </div>
                <div class="form-group">
                    <label for="firstname">E-mail</label>
                    <input type="text" class="form-control border" id="fristname" name="email"placeholder="">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control border" id="password" name="password" placeholder="">
                </div>
                <div class="form-group buttun">
                    <center><button class="btn btn-primary" type="submit" name="signup" id="signup">Sign Up</button>
                    <p class="font-10">By clicking Sign Up you are in Agreement of <br>
                    <span class="font-18">Terms and Condition</span></p></center>
                </div>
            </form>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-2 col-sm-1 ">
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-xl-3 col-lg-3 col-md-2 col-sm-1 ">
                <a href="#"><p class="font-18">Already have an Account?</p></a>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-8 col-sm-10">
            </div>
            <div class="col-xl-3 col-lg-3 col-md-2 col-sm-1  ">
                <a href="login"><p class="font-22 link-login">Login</p></a>
            </div>
        </div>
    </div>
</body>
</html>