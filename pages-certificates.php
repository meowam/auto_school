<?php
require($_SERVER['DOCUMENT_ROOT'] . '/configs/check-auth.php');
require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');
$certificates = getCertificates();
?>
<div class="row">
    <div class="col-12 col-lg-12 col-xxl-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header">
                <h5 class="card-title mb-0">Останні свідоцтва</h5>
            </div>
            <table class="table table-hover my-0">
                <thead>
                    <tr>
                        <th>№</th>
                        <th>Студент</th>
                        <th class="d-none d-xl-table-cell">Серія свідоцтва</th>
                        <th>Отримав свідоцтво</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i=0;
                    foreach ($certificates as $certificate) {
                        $i++;
                        $fullNameInitials = getSNP($certificate['surname'], $certificate['name'], $certificate['patronymic']);
                        $formatted_date3 = date('d/m/Y', strtotime($certificate['date_of_receipt']));
                    ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td class="d-none d-md-table-cell"><a href="/student.php?id=<?= $certificate['id_student']; ?>"><?= $fullNameInitials ?></a></td>
                            <td class="d-none d-xl-table-cell"><?= $certificate['series_of_certificate']; ?></td>
                            <td class="d-none d-xl-table-cell"><?= $formatted_date3; ?></td>
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