<?php
require($_SERVER['DOCUMENT_ROOT'] . '/configs/check-auth.php');
require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');
$teachers = getTeachers();
?>
<div class="row">
    <div class="col-12 col-lg-12 col-xxl-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header">
                <h5 class="card-title mb-0">Усі викладачі</h5>
            </div>
            <table class="table table-hover my-0">
                <thead>
                    <tr>
                        <th>№</th>
                        <th class="d-none d-xl-table-cell">ПІБ</th>
                        <th class="d-none d-xl-table-cell">День народження</th>
                        <th>Телефон</th>
                        <th class="d-none d-md-table-cell">Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 0;
                    foreach ($teachers as $teacher) {
                        $i++;

                        $fullNameInitials = getSNP($teacher['surname_teacher'], $teacher['name_teacher'], $teacher['patronymic_teacher']);
                        $formatted_date = date('d/m/Y', strtotime($teacher['date_birthday_teacher']));
                    ?>
                        <tr>
                            <td><?= $i; ?> </td>
                            <td class="d-none d-xl-table-cell"><a href="/teacher.php?id=<?= $teacher['id_teacher']; ?>"><?= $fullNameInitials ?></a></td>
                            <td class="d-none d-xl-table-cell"><?= $formatted_date;?></td>
                            <td class="d-none d-xl-table-cell"><?= $teacher['telephone_teacher'];?></td>
                            <td class="d-none d-md-table-cell"><?= $teacher['email_teacher'];?></td>
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