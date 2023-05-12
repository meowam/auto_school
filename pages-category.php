<?php
require($_SERVER['DOCUMENT_ROOT'] . '/configs/check-auth.php');
require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');
$categories = getCategoriesOfTeachers();
?>
<div class="row">
    <div class="col-12 col-lg-12 col-xxl-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header">
                <h5 class="card-title mb-0">Категорії</h5>
            </div>
            <table class="table table-hover my-0">
                <thead>
                    <tr>
                        <th>№</th>
                        <th class="d-none d-xl-table-cell">Назва категорії</th>
                        <th class="d-none d-xl-table-cell">Викладачі</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 0;
                    foreach ($categories as $category) {
                        $i++;
                    ?>
                        <tr>
                            <td><?= $i; ?> </td>
                            <td class="d-none d-xl-table-cell "><?= $category['category'];?></td>
                            <td class="d-none d-xl-table-cell "><?= $category['full_name'].' '?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

<?php
require($_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php');
?>