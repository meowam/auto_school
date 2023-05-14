<?php
require($_SERVER['DOCUMENT_ROOT'] . '/configs/check-auth.php');
require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');
?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex align-items-end p-b-0">
                <a href="/create/categoryTeacher.php" class="text-color-gray m-r-4">
                    <i class="align-middle" data-feather="plus-square"></i>
                </a>
                <h5 class="card-title mb-0">Додати нову категорію</h5>
            </div>
            <div class="card-body">
                <form action="/create/createCategory.php" method="post">
                    <label>Категорія:</label>
                    <input type="text" class="form-control m-b-10" name="name_category">
                    <button class="btn btn-success m-t-10" type="submit">Додати</button>
                </form>
            </div>

        </div>
    </div>
</div>


<?php
require($_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php');
?>