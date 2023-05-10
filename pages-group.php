<?php
require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');
$groups = getGroupsWithTeachers();
if (isset($_GET['']))
?>
<div class="row">
    <div class="col-12 col-lg-12 col-xxl-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header">
                <h5 class="card-title mb-0">Останні групи</h5>
            </div>
            <table class="table table-hover my-0">
                <thead>
                    <tr>
                        <th>Назва</th>
                        <th class="d-none d-xl-table-cell">Початок занять</th>
                        <th class="d-none d-xl-table-cell">Завершення занять</th>
                        <th>Статус</th>
                        <th class="d-none d-md-table-cell">Викладач</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($groups as $group) {
                        $fullNameInitials = getSNP($group['surname_teacher'], $group['name_teacher'], $group['patronymic_teacher']);
                        $formatted_date = date('d/m/Y', strtotime($group['date_of_enrollment']));
                        $formatted_date2 = date('d/m/Y', strtotime($group['date_of_graduation']));

                        $current_date = date('Y-m-d'); // получаем текущую дату в формате ГГГГ-ММ-ДД
                        $target_date = $group['date_of_graduation']; // задаем целевую дату
                        $class = ''; $text = '';
                        if (strtotime($current_date) > strtotime($target_date)) {
                            $class = 'success';
                            $text = 'Завершено';
                        } else {
                            $class = 'warning';
                            $text = 'В процесі';
                        }

                    ?>
                        <tr>
                            <td><?= $group['name_group'] ?></td>
                            <td class="d-none d-xl-table-cell"><?= $formatted_date; ?></td>
                            <td class="d-none d-xl-table-cell"><?= $formatted_date2; ?></td>
                            <td><span class="badge bg-<?= $class?>"><?= $text;?></span></td>
                            <td class="d-none d-md-table-cell"><?= $fullNameInitials ?></td>
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