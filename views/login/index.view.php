<?php
require base_path('views/partials/header.php');
?>


<div class="container">
    <div class="row vh-100 d-flex flex-column justify-content-center align-items-center">
        <div class="col-4 mx-auto">
            <h1 class="h1 mb-3">Todo - Login</h1>
            <form action="/login" method="post" enctype="multipart/form-data" class="form">
                <div class="form-group">
                    <label for="username" class="form-label">Username:</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username">
                </div>

                <div class="form-group my-3">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="********">
                </div>

                <button class="btn btn-primary mb-3">Login now</button>

                <p><a href="/register" class="">You don't have an account ? Create now.</a></p>

                <p class="mt-3 text-success"><?= $success ?? "" ?></p>
                <p class="mt-3 text-danger"><?= $errors ?? "" ?></p>
            </form>
        </div>
    </div>
</div>
<?php
require base_path('views/partials/footer.php');
?>

