<?php
require($_SERVER['DOCUMENT_ROOT'] . '/configs/check-auth.php');
if (!isset($_GET['id'])) {
    header("location: /pages-category.php");
} else {
    $category = getCategories($_GET['id']);
}
if (($category) == null) {
    header("location: /pages-category.php");
}
require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');
?>

<div class="mb-3">
    <h1 class="h3 d-inline align-middle">Категорія <?= $category['name_category']; ?></h1>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex align-items-end p-b-0">
                <a href="/create/categoryTeacher.php?id=<?=$_GET['id']?>" class="text-color-gray m-r-4">
                    <i class="align-middle" data-feather="plus-square"></i>
                </a>
                <h5 class="card-title mb-0">Додати викладача</h5>
            </div>
            <div class="card-body">
                <table class="table table-hover my-0">
                    <thead>
                        <tr>
                            <th>№</th>
                            <th>Викладач</th>
                            <th>Дія</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 0;
                        $teachers = getTeachersByCategory($_GET['id']);
                        foreach ($teachers as $teacher) {
                            $i++;
                            $fullNameInitials = getSNP($teacher['surname_teacher'], $teacher['name_teacher'], $teacher['patronymic_teacher']);
                        ?>
                            <tr>
                                <td><?= $i ?></td>
                                <td class="d-none d-md-table-cell"><a href="/teacher.php?id=<?= $teacher['id_teacher']; ?>"><?= $fullNameInitials ?></a></td>
                                <td class="d-xl-table-cell">
                                    <a href="/delete/deleteTeachersCategory.php?id=<?= $teacher['id'] ?>" class="text-color-gray">
                                        <i class="align-middle" data-feather="trash-2"></i></a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>


<?php
require($_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php');
?>