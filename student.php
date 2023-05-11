<?php
if (!isset($_GET['id'])) {
	header("location: /pages-student.php");
}
require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');
if (isset($_GET['id'])) {
	$student = getCurrentStudents($_GET['id']);
	$results = getResultsOfCS($_GET['id']);
	$certificate = getCertificatesOfCS($_GET['id']);
}
if (($student) == null) {
	header("location: /pages-student.php");
}
$formatted_date = date('d.m.Y', strtotime($student['date_birthday']));
$formatted_date2 = date('d.m.Y', strtotime($student['date_application']));
?>

<div class="mb-3">
	<h1 class="h3 d-inline align-middle">Профіль</h1>
</div>
<div class="row">
	<div class="col-md-6 col-xl-6">
		<div class="card mb-3">
		<div class="card-header">
				<h5 class="card-title mb-0"><a href="/pages-group.php?id=<?= $student['id_group'] ?>"><?= $student['name_group'] ?></a></h5>
			</div>
			<div class="card-body text-center">
				<img src="/assets/img/avatars/user.svg" class="img-fluid mb-2" width="128" height="128" />
				<h5 class="card-title mb-0 mt-3"><?php echo $student['surname'] . ' ' . $student['name'] . ' ' . $student['patronymic'] ?></h5>
			</div>
			<hr class="my-0" />
			<div class="card-body">
				<h5 class="h6 card-title">Відомості:</h5>
				<ul class="list-unstyled mb-0">
					<li class="mb-1">Дата народження: <?= $formatted_date ?></li>
					<li class="mb-1">Дата подачі заявки: <?= $formatted_date2 ?></li>
				</ul>
			</div>
			<hr class="my-0" />
			<div class="card-body">
				<h5 class="h6 card-title">Про студента:</h5>
				<ul class="list-unstyled mb-0">
					<li class="mb-1"><span data-feather="home" class="feather-sm me-1"></span> Живе на <?= $student['home_adress'] ?></li>
					<li class="mb-1"><span data-feather="briefcase" class="feather-sm me-1"></span> Працює/навчається в <?= $student['place_of_sw'] ?></li>
				</ul>
			</div>
			<hr class="my-0" />
			<div class="card-body">
				<h5 class="h6 card-title">Контакти:</h5>
				<ul class="list-unstyled mb-0">
					<li class="mb-1"><?= $student['telephone'] ?></li>
					<li class="mb-1"><?= $student['email'] ?></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="col-md-6 col-xl-6">
		<div class="card">
			<div class="card-header">
				<h5 class="card-title mb-0">Результати</h5>
			</div>
			<div class="card-body h-100">
				<?php
				if (mysqli_num_rows($results)>0) {
				?>
					<div class="d-flex align-items-start">
						<table class="table table-hover my-0">
							<thead>
								<tr>
									<th>№</th>
									<th class="d-none d-xl-table-cell text-center">Дата проходження</th>
									<th class="d-none d-md-table-cell text-center">Результат</th>
									<th class="d-none d-md-table-cell">Статус</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$i = 0;
								foreach ($results as $result) {
									$i++;
									$formatted_date = date('d/m/Y', strtotime($result['date_result']));
									$class = '';
									$text = '';
									if ($result['status_result']) {
										$class = 'success';
										$text = 'Склав';
									} else {
										$class = 'danger';
										$text = 'Не склав';
									}
								?>
									<tr>
										<td><?= $i; ?></td>
										<td class="d-none d-xl-table-cell text-center"><?= $formatted_date; ?></td>
										<td class="d-none d-xl-table-cell text-center"><?= $result['score_result']; ?></td>
										<td class="d-none d-md-table-cell "><span class="badge bg-<?= $class ?>"><?= $text; ?></span></td>
									</tr>
								<?php
								}
								?>
							</tbody>
						</table>
					</div>
				<?php
				} else {
					echo 'Результатів тесту немає.';
				}
				?>
			</div>
			<div class="card-header">
				<h5 class="card-title mb-0">Свідоцтво</h5>
			</div>

			<div class="card-body h-100">
				<?php
				if ($certificate != null) {
				?>
					<div class="d-flex align-items-start">
						<table class="table table-hover my-0">
							<thead>
								<tr>
									<th class="d-none d-xl-table-cell">Серія свідоцтва</th>
									<th>Отримано свідоцтво</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="d-none d-xl-table-cell"><?= $certificate['series_of_certificate']; ?></td>
									<td class="d-none d-xl-table-cell"><?= date('d/m/Y', strtotime($certificate['date_of_receipt'])) ?></td>
								</tr>
							</tbody>
						</table>
					</div>
				<?php
				} else {
					echo 'Свідоцтво ще не отримано.';
				}
				?>
			</div>

		</div>
	</div>
</div>


<?php
require($_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php');
?>