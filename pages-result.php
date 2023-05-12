<?php
require($_SERVER['DOCUMENT_ROOT'] . '/configs/check-auth.php');
require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');
$results = getResultsOfStudents();
?>
<div class="row">
    <div class="col-12 col-lg-12 col-xxl-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <a href="/create/result.php" class="text-color-gray m-r-4">
                        <i class="align-middle" data-feather="plus-square"></i>
                    </a>
                    <h5 class="card-title mb-0">Останні результати</h5>
                </div>
            </div>
            <table class="table table-hover my-0">
                <thead>
                    <tr>
                        <th>№</th>
                        <th class="d-none d-xl-table-cell">ПІБ</th>
                        <th class="d-none d-xl-table-cell">Група</th>
                        <th class="d-none d-xl-table-cell text-center">Дата проходження</th>
                        <th class="d-none d-md-table-cell text-center">Результат</th>
                        <th class="d-none d-md-table-cell">Статус</th>
                        <th class="d-none d-md-table-cell">Дії</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 0;
                    foreach ($results as $result) {
                        $i++;
                        $fullNameInitials = getSNP($result['surname'], $result['name'], $result['patronymic']);
                        $formatted_date = date('d/m/Y', strtotime($result['date_result']));
                        $class = '';
                        $text = '';
                        if ($result['status_result']) {
                            $class = 'success';
                            $text = 'Склав';
                        } else {
                            $class = 'danger';
                            $text = 'Не склав';
                        }
                        $group = getGroupofCS($result['id_student']);
                    ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td class="d-none d-xl-table-cell"><a href="/student.php?id=<?= $result['id_student']; ?>"><?= $fullNameInitials ?></a></td>
                            <td class="d-none d-md-table-cell"><?= $group['name_group']; ?></td>
                            <td class="d-none d-xl-table-cell text-center"><?= $formatted_date; ?></td>
                            <td class="d-none d-xl-table-cell text-center"><?= $result['score_result']; ?></td>
                            <td class="d-none d-md-table-cell "><span class="badge bg-<?= $class ?>"><?= $text; ?></span></td>
                            <td class="d-none d-md-table-cell">
                                <a href="/edit/result.php?id=<?= $result['id_result'] ?>" class="text-color-gray m-r-10"><i class="align-middle" data-feather="edit-2"></i></a>
                                <a href="/delete/deleteResult.php?id=<?= $result['id_result'] ?>" class="text-color-gray"><i class="align-middle" data-feather="trash-2"></i></a>
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

<?php
require($_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php');
?>