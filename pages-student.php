<?php
require($_SERVER['DOCUMENT_ROOT'] . '/configs/check-auth.php');
require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');
$i = 0;
$range = 6;
$rowsperpage = 12;

$sql = 'SELECT COUNT(*) FROM students';

[$numrows] = getCountOfTable($sql);
$totalpages = ceil($numrows / $rowsperpage);
if (isset($_GET['curr_p']) && is_numeric($_GET['curr_p'])) {
    $curr_p = (int) $_GET['curr_p'];
} else {
    $curr_p = 1;
}

if ($curr_p > $totalpages) {
    $curr_p = $totalpages;
}
if ($curr_p < 1) {
    $curr_p = 1;
}

$offset = ($curr_p - 1) * $rowsperpage;
$users = getStudentsLimit($offset, $rowsperpage);
?>
<div class="row">
    <div class="col-12 col-lg-12 col-xxl-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header d-flex align-items-end">
                <a href="/create/student.php" class="text-color-gray m-r-4">
                    <i class="align-middle" data-feather="plus-square"></i>
                </a>
                <h5 class="card-title mb-0">Усі студенти</h5>
            </div>
            <table class="table table-hover my-0">
                <thead>
                    <tr>
                        <th>№</th>
                        <th class="d-none d-xl-table-cell">ПІБ</th>
                        <th>Телефон</th>
                        <th class="d-none d-md-table-cell">Email</th>
                        <th class="d-none d-xl-table-cell">День народження</th>
                        <th class="d-none d-md-table-cell">Дії</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($users as $user) {
                        $i++;
                        $fullNameInitials = getSNP($user['surname'], $user['name'], $user['patronymic']);
                        $formatted_date = date('d/m/Y', strtotime($user['date_birthday']));
                    ?>
                        <tr>
                            <td><?= $i; ?> </td>
                            <td class="d-none d-xl-table-cell"><a href="/student.php?id=<?= $user['id_student']; ?>"><?= $fullNameInitials ?></a></td>
                            <td class="d-none d-xl-table-cell"><?= $user['telephone']; ?></td>
                            <td class="d-none d-md-table-cell"><?= $user['email']; ?></td>
                            <td class="d-none d-xl-table-cell"><?= $formatted_date; ?></td>
                            <td class="d-none d-md-table-cell">
                                <a href="/edit/student.php?id=<?= $user['id_student'] ?>" class="text-color-gray m-r-10"><i class="align-middle" data-feather="edit-2"></i></a>
                                <?php if ((getTableColumnWhere('driving', 'student_id', $user['id_student']) == 0) && (getTableColumnWhere('certificates_of_graduation', 'student_id', $user['id_student']) == 0) && (getTableColumnWhere('group_students', 'student_id', $user['id_student']) == 0) && (getTableColumnWhere('results_test', 'student_id', $user['id_student']) == 0)) { ?>
                                    <a href="/delete/deleteStudent.php?id=<?= $user['id_student'] ?>" class="text-color-gray"><i class="align-middle" data-feather="trash-2"></i></a>
                                <?php } ?>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <?php
            require($_SERVER['DOCUMENT_ROOT'] . '/configs/pagination.php');
            ?>
        </div>
    </div>

</div>

<?php
require($_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php');
?>