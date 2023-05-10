<?php
require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');
$results = getResultsOfStudents();
?>
<div class="row">
    <div class="col-12 col-lg-12 col-xxl-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header">
                <h5 class="card-title mb-0">Останні результати</h5>
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
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i=0;
                    foreach ($results as $result) {
                        $i++;
                        $fullNameInitials = getSNP($result['surname'], $result['name'], $result['patronymic']);
                        $formatted_date = date('d/m/Y', strtotime($result['date_result']));
                        $class = ''; $text = '';
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
                            <td class="d-none d-xl-table-cell"><?= $fullNameInitials ?></td>
                            <td class="d-none d-md-table-cell"><?= $group['name_group']; ?></td>
                            <td class="d-none d-xl-table-cell text-center"><?= $formatted_date; ?></td>
                            <td class="d-none d-xl-table-cell text-center"><?= $result['score_result']; ?></td>
                            <td class="d-none d-md-table-cell " ><span class="badge bg-<?= $class?>"><?= $text;?></span></td>
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