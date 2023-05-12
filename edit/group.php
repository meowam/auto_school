<?php
require($_SERVER['DOCUMENT_ROOT'] . '/configs/check-auth.php');
if (!isset($_GET['id'])) {
	header("location: /pages-group.php?id=all");
} else {
	$groups = getCGWithTeachers($_GET['id']);
}
if (mysqli_num_rows($groups) == 0) {
	header("location: /pages-group.php?id=all");
}
require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');

?>

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header p-b-0">
				<h5 class="card-title mb-0">Редагувати групу</h5>
			</div>
			<div class="card-body">
				<?php
				foreach ($groups as $group) { ?>
					<form action="/edit/editGroup.php" method="post">
						<label>Назва групи:</label>
						<input type="text" class="form-control m-b-10" placeholder="Базовий курс (X потік)" value="<?= $group['name_group'] ?>" name="name_group">
						<input type="text" class="form-control m-b-10" value="<?= $group['id_group'] ?>" name="id_group" hidden>

						<label>Куратор групи:</label>
						<select class="form-select mb-3" name="teacher_id">
						<option value="<?= $group['id_teacher']?>" selected><?=$group['surname_teacher'].' '.$group['name_teacher'] . ' ' . $group['patronymic_teacher']?></option>
							<?php
							$teachers = getAvailableTeachers();
							foreach ($teachers as $teacher) {
								echo '<option value="' . $teacher['id_teacher'] . '">' . $teacher['surname_teacher'] . ' ' . $teacher['name_teacher'] . ' ' . $teacher['patronymic_teacher'] . '</option>';
							}
							?>

						</select>
						<div class="d-flex div-date-group">
							<div class="m-r-20 date-group">
								<label>Дата початку занять:</label>
								<input type="date" class="form-control m-b-10" name="date_start" value="<?= $group['date_of_enrollment']?>">
							</div>
							<div class="date-group">
								<label>Дата завершення занять:</label>
								<input type="date" class="form-control m-b-10" name="date_end" value="<?= $group['date_of_graduation']?>">
							</div>
						</div>
						<button class="btn btn-success m-t-10" type="submit">Оновити</button>
					</form>
				<?php
				}
				?>
			</div>
		</div>
	</div>
</div>


<?php
require($_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php');
?>