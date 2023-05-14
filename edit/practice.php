<?php
require($_SERVER['DOCUMENT_ROOT'] . '/configs/check-auth.php');
if (!isset($_GET['id'])) {
	header("location: /pages-practice.php");
} else {
    $driving = getTableColumnWhereResult('driving','id_driving',$_GET['id']);
}
if ($driving == null) {
	header("location: /pages-practice.php");
}
require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');
?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header p-b-0">
                <h5 class="card-title mb-0">Редагувати практичне заняття</h5>
            </div>
            <div class="card-body">
                <form action="/edit/editPractice.php" method="post">
                    <label>Дата практичного заняття:</label>
                    <input type="datetime-local" class="form-control m-b-10" name="date_practice" value="<?= $driving['date_driving'];?>">
                    <input type="text" class="form-control m-b-10" name="id" value="<?= $driving['id_driving'];?>" hidden>
                    <label>Куратор групи:</label>
                    <select class="form-select m-b-10" name="teacher_id">
                        <?php
                        $teachers = getTeachers();
                        foreach ($teachers as $teacher) {
                            echo '<option value="' . $teacher['id_teacher'] . '"';
                            if ($teacher['id_teacher']== $driving['teacher_id']) {
                                echo 'selected';
                            }
                            echo '>'  . $teacher['surname_teacher'] . ' ' . $teacher['name_teacher'] . ' ' . $teacher['patronymic_teacher'] . '</option>';
                        }
                        ?>
                    </select>
                    <label>Студент:</label>
                    <select class="form-select m-b-10" name="student_id" id="student_id">
                        <option value="00">Не вибрано</option>
                        <?php
                        $students = getStudents();
                        foreach ($students as $student) {
                            echo '<option value="' . $student['id_student'] . '"';
                            if ($student['id_student']== $driving['student_id']) {
                                echo 'selected';
                            }
                            echo '>' . $student['surname'] . ' ' . $student['name'] . ' ' . $student['patronymic'] . '</option>';
                        }
                        ?>
                    </select>

                    <label for="name_surname">Прізвище та ім'я студента:</label>
                    <input type="text" class="form-control m-b-10" name="name_surname" id="name_surname" value="<?= $driving['pib'];?>">

                    <label for="contacts-student">Контактні дані студента:</label>
                    <input type="text" class="form-control m-b-10" placeholder="+380992338422" name="contacts" id="contacts-student" value="<?= $driving['contact_student'];?>">

                    <label>Ціна за заняття:</label>
                    <input type="number" class="form-control m-b-10" name="price" value="<?= $driving['price'];?>">

                    <button class="btn btn-success m-t-10" type="submit">Редагувати</button>
                </form>
            </div>

        </div>
    </div>
</div>


<?php
require($_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php');
?>