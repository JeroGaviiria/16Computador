<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style1.css">
    <title>Login</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row  mt-5">   
                <div class="balls col-sm">
                <div class="ball"></div>
                <div class="ball"></div>
                <div class="ball"></div>
                <div class="ball"></div>
                <div class="ball"></div>
                <div class="ball"></div>
                <div class="ball"></div>
                </div>
            
            <div class="col-7 ">
                <div class="card bg-transparent border-light mt-2 p-2" style="width: 32rem;">
                    <h1 class="mb-3 text-light text-center">WELCOME!</h1>
                    <form method="p ost" action="./class/objetoLogin.php" class="text-light">
                        <div class="mb-3">
                            <label class="form-label fs-4">User</label>
                            <input type="text" name="user" class="form-control text-light bg-secondary">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fs-4">Password</label>
                            <input type="password" name="pass" class="form-control text-light bg-secondary">
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto text-center">
                            <button type="submit" class="btn btn-success ">Log In</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>