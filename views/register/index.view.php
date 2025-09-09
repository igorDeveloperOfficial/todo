<?php
require base_path('views/partials/header.php');
?>




<div class="container">
    <div class="row vh-100 d-flex flex-column justify-content-center align-items-center">
        <div class="col-4 mx-auto">
            <h1 class="h1 mb-3">Todo - Create Account</h1>
            <form action="/register" method="post" enctype="multipart/form-data" class="form">
                <div class="form-group">
                    <label for="username" class="form-label">Username:</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username">
                </div>

                <div class="form-group my-3">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="********">
                </div>

                <div class="form-group mb-5">
                    <label for="cover" class="form-label">Choose your cover:</label>
                    <input type="file" name="cover" id="cover">
                </div>

                <button class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
</div>





<?php
require base_path('views/partials/footer.php');
?>

