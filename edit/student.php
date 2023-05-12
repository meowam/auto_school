<?php
require($_SERVER['DOCUMENT_ROOT'] . '/configs/check-auth.php');
if (!isset($_GET['id'])) {
	header("location: /pages-student.php");
} else {
    $student = getTableColumnWhereResult('students','id_student',$_GET['id']);
}
if ($student == null) {
	header("location: /pages-student.php");
}
require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');
?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header p-b-0">
                <h5 class="card-title mb-0">Редагувати дані про студента</h5>
            </div>
            <div class="card-body">
                <form action="/edit/editStudent.php" method="post">
                    <label>Прізвище:</label>
                    <input type="text" class="form-control m-b-10" name="surname" value='<?= $student['surname'] ?>'>
                    <input type="text" class="form-control m-b-10" hidden name="id" value='<?= $student['id_student']?>'>

                    <label>Ім'я:</label>
                    <input type="text" class="form-control m-b-10" name="name" value='<?= $student['name'] ?>'>

                    <label>По-батькові:</label>
                    <input type="text" class="form-control m-b-10" name="patronymic" value='<?= $student['patronymic'] ?>'>

                    <label>Дата народження:</label>
                    <input type="date" class="form-control m-b-10" name="date_birthday" value='<?= $student['date_birthday'] ?>'>

                    <label>Домашня адреса:</label>
                    <input type="text" class="form-control m-b-10" placeholder="вул. Зелена 10, м. Київ" name="home_adress" value='<?= $student['home_adress'] ?>'>

                    <label>Телефон:</label>
                    <input type="text" class="form-control m-b-10" placeholder="+380992338422" name="telephone" value='<?= $student['telephone'] ?>'>

                    <label>Email:</label>
                    <input type="text" class="form-control m-b-10" placeholder="example@gmail.com" name="email" value='<?= $student['email'] ?>'>

                    <label>Місце навчання\роботи:</label>
                    <input type="text" class="form-control m-b-10" name="place_of_sw" value='<?= $student['place_of_sw'] ?>'>

                    <button class="btn btn-success m-t-10" type="submit">Редагувати</button>
                </form>
            </div>
        </div>
    </div>
</div>



<?php
require($_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php');
?>