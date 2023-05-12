<?php
require($_SERVER['DOCUMENT_ROOT'] . '/configs/check-auth.php');
if (!isset($_GET['id'])) {
    header("location: /pages-group.php?id=all");
} else {
    $groups = getTableColumnWhereResult('groups','id_group',$_GET['id']);
}
if ($groups == null) {
    header("location: /pages-group.php?id=all");
}
require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');
?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header p-b-0">
                <h5 class="card-title mb-0">Додати студента в групу - <a href="/pages-group.php?id=<?=$groups['id_group']?>"> <?=$groups['name_group']?></a></h5>
            </div>
            <div class="card-body">
                <form action="/create/createStudentsInGroup.php" method="post">
                    <label>Група:</label>
                    <select class="form-select mb-3" name="group_id">
                        <?php
                        $groups = getAvailableGroups();
                        foreach ($groups as $group) {
                            echo '<option value="' . $group['id_group'] . '"';
                            if ($group['id_group'] == $_GET['id']) {
                                echo 'selected';
                            }
                            echo '>' . $group['name_group'] . '</option>';
                        }
                        ?>
                    </select>
                    <label>Студент:</label>
                    <select class="form-select mb-3" name="student_id">
                        <?php
                        $students = getStudents();
                        foreach ($students as $student) {
                            echo '<option value="' . $student['id_student'] . '">' . $student['surname'] . ' ' . $student['name'] . ' ' . $student['patronymic'] . '</option>';
                        }
                        ?>
                    </select>

                    <button class="btn btn-success" type="submit">Додати</button>
                </form>
            </div>

        </div>
    </div>
</div>


<?php
require($_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php');
?>