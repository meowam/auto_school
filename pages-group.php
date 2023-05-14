<?php
require($_SERVER['DOCUMENT_ROOT'] . '/configs/check-auth.php');
if (!isset($_GET['id'])) {
    header("location: /pages-group.php?id=all");
} else {
    if ($_GET['id'] == 'all') {
        $groups = getGroupsWithTeachers();
        $cg = true;
    } else {
        $groups = getCGWithTeachers($_GET['id']);
        $cg = false;
    }
}
if (mysqli_num_rows($groups) == 0) {
    header("location: /pages-group.php?id=all");
}
require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');
?>
<div class="row">
    <div class="col-12 col-lg-12 col-xxl-12 d-flex">
        <?php
        if ($cg) {
        ?>
            <div class="card flex-fill">
                <div class="card-header d-flex align-items-end">
                    <a href="/create/group.php" class="text-color-gray m-r-4">
                        <i class="align-middle" data-feather="plus-square"></i>
                    </a>
                    <h5 class="card-title mb-0">
                        Останні групи
                    </h5>
                </div>
                <table class="table table-hover my-0">
                    <thead>
                        <tr>
                            <th>Назва</th>
                            <th class="d-none d-xl-table-cell">Початок занять</th>
                            <th class="d-none d-xl-table-cell">Завершення занять</th>
                            <th>Статус</th>
                            <th class="d-none d-md-table-cell">Викладач</th>
                            <th class="d-none d-md-table-cell">Дії</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($groups as $group) {
                            $fullNameInitials = getSNP($group['surname_teacher'], $group['name_teacher'], $group['patronymic_teacher']);
                            $formatted_date = date('d/m/Y', strtotime($group['date_of_enrollment']));
                            $formatted_date2 = date('d/m/Y', strtotime($group['date_of_graduation']));

                            $current_date = date('Y-m-d');
                            $target_date = $group['date_of_graduation'];
                            $class = '';
                            $text = '';
                            if (strtotime($current_date) > strtotime($target_date)) {
                                $class = 'success';
                                $text = 'Завершено';
                            } else {
                                $class = 'warning';
                                $text = 'В процесі';
                            }

                        ?>
                            <tr>
                                <td><a href="/pages-group.php?id=<?= $group['id_group'] ?>"> <?= $group['name_group'] ?></a></td>
                                <td class="d-none d-xl-table-cell"><?= $formatted_date; ?></td>
                                <td class="d-none d-xl-table-cell"><?= $formatted_date2; ?></td>
                                <td><span class="badge bg-<?= $class ?>"><?= $text; ?></span></td>
                                <td class="d-none d-md-table-cell"><a href="/teacher.php?id=<?= $group['id_teacher']; ?>"><?= $fullNameInitials ?> </a></td>
                                <td class="d-none d-md-table-cell">
                                    <a href="/edit/group.php?id=<?= $group['id_group'] ?>" class="text-color-gray m-r-10"><i class="align-middle" data-feather="edit-2"></i></a>
                                    <?php if (mysqli_num_rows(getStudentsofCG($group['id_group'])) == 0) { ?>
                                        <a href="/delete/deleteGroup.php?id=<?= $group['id_group'] ?>" class="text-color-gray"><i class="align-middle" data-feather="trash-2"></i></a>
                                    <?php } ?>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                
            </div>
            <?php
        } else {

            while ($row = mysqli_fetch_assoc($groups)) {
                $students = getStudentsofCG($row['id_group']);
            ?>
                <div class="card flex-fill">
                    <div class="card-header d-flex justify-content-between" style="padding: 16px;">
                        <div class="d-flex align-items-center">
                            <a href="/create/studentsInGroup.php?id=<?= $row['id_group']?>" class="text-color-gray m-r-4">
                                <i class="align-middle" data-feather="plus-square"></i>
                            </a>
                            <h5 class="card-title mb-0"><?= $row['name_group'] ?></h5>
                        </div>
                        
                        <h5 class="card-title mb-0">Куратор: <a href="/teacher.php?id=<?= $row['id_teacher']; ?>"> <?= $row['surname_teacher'] . ' ' . $row['name_teacher'] ?></a></h5>
                    </div>
                    <?php
                    if (mysqli_num_rows($students) > 0) {
                    ?>
                        <table class="table table-hover my-0">
                            <thead>
                                <tr>
                                    <th>№</th>
                                    <th class="d-none d-xl-table-cell">ПІБ</th>
                                    <th>Телефон</th>
                                    <th class="d-none d-md-table-cell">Email</th>
                                    <th class="d-none d-md-table-cell">Місце роботи/навчання</th>
                                    <th class="d-none d-md-table-cell">Дії</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 0;
                                foreach ($students as $student) {
                                    $i++;
                                    $fullNameInitials = getSNP($student['surname'], $student['name'], $student['patronymic']);
                                ?>
                                    <tr>
                                        <td><?= $i; ?> </td>
                                        <td class="d-none d-xl-table-cell"><a href="/student.php?id=<?= $student['id_student']; ?>"><?= $fullNameInitials ?></a></td>
                                        <td class="d-none d-xl-table-cell"><?= $student['telephone']; ?></td>
                                        <td class="d-none d-md-table-cell"><?= $student['email']; ?></td>
                                        <td class="d-none d-md-table-cell"><?= $student['place_of_sw']; ?></td>
                                        <td>
                                            <a href="/delete/deleteStudentInGroup.php?id=<?= $student['id_student'] ?>&group=<?=$row['id_group']?>" class="text-color-gray">
                                                <i class="align-middle" data-feather="trash-2"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    <?php
                    } else {
                        echo '<p class="m-3">Студентів до цієї групи ще не додано!</p>';
                    }
                    ?>
                </div>
        <?php
            }
        }
        ?>
    </div>

</div>

<?php
require($_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php');
?>