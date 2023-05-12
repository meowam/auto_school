<?php
require($_SERVER['DOCUMENT_ROOT'] . '/configs/check-auth.php');
require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');

?>
<div class="row">
    <div class="col-12 col-lg-12 col-xxl-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <a href="/create/practice.php" class="text-color-gray m-r-4">
                        <i class="align-middle" data-feather="plus-square"></i>
                    </a>
                    <h5 class="card-title mb-0">Останні практичні заняття</h5>
                </div>
            </div>
            <table class="table table-hover my-0">
                <thead>
                    <tr>
                        <th>№</th>
                        <th class="d-none d-md-table-cell">Викладач</th>
                        <th class="d-none d-xl-table-cell">Дата та час заняття</th>
                        <th class="d-none d-xl-table-cell">Студент</th>
                        <th class="d-none d-xl-table-cell">Контактні дані</th>
                        <th class="d-none d-md-table-cell">Дії</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    $result = getPracticeDesc();
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            list($fullName, $contact) = getFullNameAndContact($row);
                    ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td class="d-none d-xl-table-cell"><a href="/teacher.php?id=<?= $row['teacher_id']; ?>"><?= getSNP($row['surname_teacher'], $row['name_teacher'], $row['patronymic_teacher']) ?></a></td>
                                <td class="d-none d-xl-table-cell"><?= date('d.m.Y H:i:s', strtotime($row['date_driving'])) ?></td>
                                <td class="d-none d-md-table-cell"><?= $fullName ?></td>
                                <td class="d-none d-md-table-cell"> <?= $contact ?></td>
                                <td class="d-none d-md-table-cell">
                                    <a href="/edit/practice.php?id=<?= $row['id_driving']; ?>" class="text-color-gray m-r-10"><i class="align-middle" data-feather="edit-2"></i></a>
                                    <a href="/delete/deletePractice.php?id=<?= $row['id_driving'] ?>" class="text-color-gray"><i class="align-middle" data-feather="trash-2"></i></a>
                                </td>
                            </tr>
                    <?php
                        }
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