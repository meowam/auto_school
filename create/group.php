<?php
require($_SERVER['DOCUMENT_ROOT'] . '/configs/check-auth.php');
require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');
?>

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header p-b-0">
				<h5 class="card-title mb-0">Додати нову групу</h5>
			</div>
			<div class="card-body">
				<form action="/create/createGroup.php" method="post">
					<label>Назва групи:</label>
					<input type="text" class="form-control m-b-10" placeholder="Базовий курс (X потік)" value="Базовий курс (X потік)" name="name_group">

					<label>Куратор групи:</label>
					<select class="form-select mb-3" name="teacher_id">
						<?php
						$teachers = getAvailableTeachers();
						foreach ($teachers as $teacher) {
							echo '<option value="'.$teacher['id_teacher'].'">' . $teacher['surname_teacher'] . ' ' . $teacher['name_teacher'] . ' ' . $teacher['patronymic_teacher'] . '</option>';
						}
						?>
					</select>
					<div class="d-flex div-date-group">
						<div class="m-r-20 date-group">
							<label>Дата початку занять:</label>
							<input type="date" class="form-control m-b-10" name="date_start">
						</div>
						<div class="date-group">
							<label>Дата завершення занять:</label>
							<input type="date" class="form-control m-b-10" name="date_end">
						</div>
					</div>
					<button class="btn btn-success" type="submit">Додати</button>
				</form>
			</div>

		</div>
	</div>
</div>


<?php
require($_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php');
?>