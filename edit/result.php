<?php
require($_SERVER['DOCUMENT_ROOT'] . '/configs/check-auth.php');
if (!isset($_GET['id'])) {
	header("location: /pages-result.php");
} else {
    $result = getTableColumnWhereResult('results_test','id_result',$_GET['id']);
}
if ($result == null) {
	header("location: /pages-result.php");
}
require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');
?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header p-b-0">
                <h5 class="card-title mb-0">Додати результат</h5>
            </div>
            <div class="card-body">
                <form action="/edit/editResult.php" method="post">
                    <label>Студент:</label>
                    <select class="form-select mb-3" name="student_id">
                        <?php
                        $students = getStudents();
                        foreach ($students as $student) {
                            echo '<option value="' . $student['id_student'] . '"';
                            if ($student['id_student']== $result['student_id']) {
                                echo 'selected';
                            }
                            echo '>' . $student['surname'] . ' ' . $student['name'] . ' ' . $student['patronymic'] . '</option>';
                        }
                        ?>
                    </select>

                    <label>Результат</label>
                    <input type="number" class="form-control m-b-10" min="0" max="20" name="result" value="<?= $result['score_result'];?>">
                    <input type="text" class="form-control m-b-10" min="0" max="20" name="id" value="<?= $result['id_result'];?>" hidden>

                    <label>Дата проходження іспиту:</label>
                    <input type="date" class="form-control m-b-10" name="date" value="<?= $result['date_result'];?>">

                    <button class="btn btn-success m-t-10" type="submit">Відредагувати</button>
                </form>

            </div>
        </div>
    </div>
</div>


<?php
require($_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php');
?>