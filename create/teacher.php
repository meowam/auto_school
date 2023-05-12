<?php
require($_SERVER['DOCUMENT_ROOT'] . '/configs/check-auth.php');
require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');
?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header p-b-0">
                <h5 class="card-title mb-0">Додати нового викладача</h5>
            </div>
            <div class="card-body">
                <form action="/create/createTeacher.php" method="post">
                    <label>Прізвище:</label>
                    <input type="text" class="form-control m-b-10" name="surname">

                    <label>Ім'я:</label>
                    <input type="text" class="form-control m-b-10" name="name">

                    <label>По-батькові:</label>
                    <input type="text" class="form-control m-b-10" name="patronymic">

                    <label>Дата народження:</label>
                    <input type="date" class="form-control m-b-10" name="date_birthday">

                    <label>Домашня адреса:</label>
                    <input type="text" class="form-control m-b-10" placeholder="вул. Зелена 10, м. Київ" name="home_adress">

                    <label>Телефон:</label>
                    <input type="text" class="form-control m-b-10" placeholder="+380992338422" name="telephone">

                    <label>Email:</label>
                    <input type="text" class="form-control m-b-10" placeholder="example@gmail.com" name="email">

                    <label>Ціна за годину практичних занять:</label>
                    <input type="number" class="form-control m-b-10" min="100" value="400" name="price">

                    <button class="btn btn-success m-t-10" type="submit">Додати</button>
                </form>
            </div>

        </div>
    </div>
</div>


<?php
require($_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php');
?>