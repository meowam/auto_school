<?php
require($_SERVER['DOCUMENT_ROOT'] . '/configs/check-auth.php');
require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');
?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header p-b-0">
                <h5 class="card-title mb-0">Додати категорію викладачу </h5>
            </div>
            <div class="card-body">
                <form action="/create/createCategoriesTeacher.php" method="post">
                    <label>Категорія:</label>
                    <select class="form-select m-b-10" name="category_id">
                        <?php
                        $categories = getListTable('categories');
                        foreach ($categories as $category) {
                            echo '<option value="' . $category['id_category'] . '"';
                            if ($category['id_category'] == $_GET['id']) {
                                echo 'selected';
                            }
                            echo '>'  . $category['name_category'] . '</option>';
                        }
                        ?>
                    </select>
                    <label>Викладач:</label>
                    <select class="form-select m-b-10" name="teacher_id">
                        <?php
                        $teachers = getTeachers();
                        foreach ($teachers as $teacher) {
                            echo '<option value="' . $teacher['id_teacher'] . '">' . $teacher['surname_teacher'] . ' ' . $teacher['name_teacher'] . ' ' . $teacher['patronymic_teacher'] . '</option>';
                        }
                        ?>
                    </select>
                    <button class="btn btn-success m-t-10" type="submit">Додати</button>
                </form>
            </div>

        </div>
    </div>
</div>


<?php
require($_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php');
?>