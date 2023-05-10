<?php
require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');

?>
<div class="row">
    <div class="col-12 col-lg-12 col-xxl-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header">
                <h5 class="card-title mb-0">Останні практичні заняття</h5>
            </div>
            <table class="table table-hover my-0">
                <thead>
                    <tr>
                        <th>№</th>
                        <th class="d-none d-md-table-cell">Викладач</th>
                        <th class="d-none d-xl-table-cell">Дата та час заняття</th>
                        <th class="d-none d-xl-table-cell">Студент</th>
                        <th class="d-none d-xl-table-cell">Контактні дані</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 0;
                    $driving = getListTable('driving');
                    foreach ($driving as $drive) {
                        $i++;
                        if ($drive['student_id'] != null) {
                            $sql = 'SELECT * FROM `driving` inner join teachers on driving.teacher_id=teachers.id_teacher inner join students on students.id_student=driving.student_id where student_id is NOT NULL';
                            $id = true;
                        } else {
                            $sql = 'SELECT * FROM `driving` inner join teachers on driving.teacher_id=teachers.id_teacher where `student_id` is NULL';
                            $id = false;
                        }
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                        $fullNameInitials = getSNP($row['surname_teacher'], $row['name_teacher'], $row['patronymic_teacher']);
                        $formatted_date = date('d.m.Y H:i:s', strtotime($row['date_driving']));
                    ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td class="d-none d-xl-table-cell"><?= $fullNameInitials ?></td>
                                <td class="d-none d-xl-table-cell"><?= $formatted_date?></td>
                                <?php 
                                if ($id) {
                                    echo '<td class="d-none d-md-table-cell">'.$row['surname']." ".$row['name'].'</td>
                                    <td class="d-none d-md-table-cell">'.$row['telephone'].'</td>';
                                } else{
                                    echo '<td class="d-none d-md-table-cell">'.$row['pib'].'</td>
                                    <td class="d-none d-md-table-cell">'.$row['contact_student'].'</td>';
                                }
                                ?>

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