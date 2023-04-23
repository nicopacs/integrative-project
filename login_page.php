<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ecommerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <div class = "container d-flex justify-content-center align-items-center"
    style = "min-height: 100vh"> 
    <form class = "border shadow p-3 rounded"
    action = "php/check-login.php"
    method = "post"
    style = "width: 500px">
        <h1 class =text-center p-3> LOGIN </h1>
        <?php if(isset($_GET['error'])) {?>  
        <div class="alert alert-danger" role="alert">
            <?=$_GET['error']?>
        </div>
          <?php } ?>
        <div class="mb-3">
            <label for="email" 
            class="form-label">Email address</label>
            <input type="email" 
            class="form-control" 
            id="email" name = "email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Never share your email with anyone else.</div>

        </div>
        <div class="mb-3">
            <label for="pass" 
            class="form-label">Password</label>
            <input type="password" 
            class="form-control" 
            id="pass" name = "pass" aria-describedby="passHelp"> 
            <div id="passHelp" class="form-text">Never share your password with anyone else.</div>
        </div>
        <div class = "mb-1">
        <label class = "form-label"> Select User: </label>
        <select class="form-select mb-3"
                name = "role" 
                aria-label="Default select example">
            <option selected value = "admin">Admin</option>
            <option value="user">User</option>
            </select>
        </div>
        <a href = "register_page.php" class = "register" > Create an account</a>
        <br>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>

  </body>
</html>