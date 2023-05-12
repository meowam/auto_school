<?php
require($_SERVER['DOCUMENT_ROOT'] . '/configs/check-auth.php');
if (!isset($_GET['id'])) {
	header("location: /pages-teacher.php");
} else {
    $teacher = getCurrentTeacher($_GET['id']);
}
if ($teacher == null) {
	header("location: /pages-teacher.php");
}
require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');
?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header p-b-0">
                <h5 class="card-title mb-0">Редагувати дані викладача</h5>
            </div>
            <div class="card-body">
                <form action="/edit/editTeacher.php" method="post">
                    <label>Прізвище:</label>
                    <input type="text" class="form-control m-b-10" name="surname" value="<?= $teacher['surname_teacher'] ?>">
                    <input type="text" class="form-control m-b-10" name="id" value="<?= $teacher['id_teacher'] ?>" hidden>

                    <label>Ім'я:</label>
                    <input type="text" class="form-control m-b-10" name="name" value="<?= $teacher['name_teacher'] ?>">

                    <label>По-батькові:</label>
                    <input type="text" class="form-control m-b-10" name="patronymic" value="<?= $teacher['patronymic_teacher'] ?>">

                    <label>Дата народження:</label>
                    <input type="date" class="form-control m-b-10" name="date_birthday" value="<?= $teacher['date_birthday_teacher'] ?>">

                    <label>Домашня адреса:</label>
                    <input type="text" class="form-control m-b-10" placeholder="вул. Зелена 10, м. Київ" name="home_adress" value="<?= $teacher['home_adress_teacher'] ?>">

                    <label>Телефон:</label>
                    <input type="text" class="form-control m-b-10" placeholder="+380992338422" name="telephone" value="<?= $teacher['telephone_teacher'] ?>">

                    <label>Email:</label>
                    <input type="text" class="form-control m-b-10" placeholder="example@gmail.com" name="email" value="<?= $teacher['email_teacher'] ?>">

                    <label>Ціна за годину практичних занять:</label>
                    <input type="number" class="form-control m-b-10" min="100" value="400" name="price" value="<?= $teacher['price_driving'] ?>">

                    <button class="btn btn-success m-t-10" type="submit">Редагувати</button>
                </form>
            </div>

        </div>
    </div>
</div>


<?php
require($_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php');
?>