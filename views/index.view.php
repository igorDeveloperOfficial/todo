<?php
    require base_path('views/partials/header.php');
?>

<div class="container">
    <div class="row">
        <div class="col-12 mx-auto">
            <h1 class="display-4"><?=$heading?></h1>
            <p>Welcome <?= $user ?></p>
        </div>
    </div>
</div>
<?php
require base_path('views/partials/footer.php');
?>

