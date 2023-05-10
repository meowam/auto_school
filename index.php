<?php
require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');
$years = getYearsOfStudent();
?>
<h1 class="h3 mb-3"><strong>Аналітика</strong></h1>

<div class="row">
	<div class="col-xl-6 col-xxl-5 d-flex">
		<div class="w-100">
			<div class="row">
				<div class="col-sm-6">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col mt-0">
									<h5 class="card-title">Годин у дорозі</h5>
								</div>
								<div class="col-auto">
									<div class="stat text-primary">
										<i class="align-middle" data-feather="truck"></i>
									</div>
								</div>
							</div>
							<h1 class="mt-1 mb-3">
								<?php
								$numRowCY = mysqli_num_rows(getTablesCY('driving', 'date_driving'));
								$numRowPY = mysqli_num_rows(getTablesPY('driving', 'date_driving'));
								$numRowCY = $numRowCY * 3;
								echo $numRowCY;
								$percent = getPercents($numRowPY, $numRowCY);

								?>
							</h1>
							<div class="mb-0">
								<span class="text-<?= $percent['class']; ?>"> <i class="mdi mdi-arrow-bottom-right"></i>
									<?php echo $percent['percentChange'] . '%'; ?>
								</span>
								<span class="text-muted">з минул. року</span>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col mt-0">
									<h5 class="card-title">Студентів</h5>
								</div>

								<div class="col-auto">
									<div class="stat text-primary">
										<i class="align-middle" data-feather="user"></i>
									</div>
								</div>
							</div>
							<h1 class="mt-1 mb-3">
								<?php

								$numRowStCY = mysqli_num_rows(getTablesCY('students', 'date_application'));
								$numRowStPY = mysqli_num_rows(getTablesPY('students', 'date_application'));
								echo $numRowStCY;
								$percent = getPercents($numRowStPY, $numRowStCY);
								?>
							</h1>
							<div class="mb-0">
								<span class="text-<?= $percent['class']; ?>"> <i class="mdi mdi-arrow-bottom-right"></i>
									<?php echo $percent['percentChange'] . '%'; ?>
								</span>
								<span class="text-muted">з минул. року</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col mt-0">
									<h5 class="card-title">₴, теорія</h5>
								</div>

								<div class="col-auto">
									<div class="stat text-primary">
										<i class="align-middle" data-feather="dollar-sign"></i>
									</div>
								</div>
							</div>
							<h1 class="mt-1 mb-3">
								<?php
								$numRowZrCY = mysqli_num_rows(getMoneyFromCM());
								$numRowGrLY = mysqli_num_rows(getMoneyFromPM());

								$numRowZr = $numRowZrCY * 5500;
								echo '₴' . $numRowZr;
								$percent = getPercents($numRowGrLY, $numRowZrCY);
								?>
							</h1>
							<div class="mb-0">
								<span class="text-<?= $percent['class']; ?>"> <i class="mdi mdi-arrow-bottom-right"></i>
									<?php echo $percent['percentChange'] . '%'; ?>
								</span>
								<span class="text-muted">з минул. місяця</span>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col mt-0">
									<h5 class="card-title">Груп</h5>
								</div>

								<div class="col-auto">
									<div class="stat text-primary">
										<i class="align-middle" data-feather="users"></i>
									</div>
								</div>
							</div>
							<h1 class="mt-1 mb-3">
								<?php
								$numRowGrCY = mysqli_num_rows(getTablesCY('groups', 'date_of_enrollment'));
								$numRowGrLY = mysqli_num_rows(getTablesPY('groups', 'date_of_enrollment'));
								echo $numRowGrCY;
								$percent = getPercents($numRowGrLY, $numRowGrCY);
								?>
							</h1>
							<div class="mb-0">
								<span class="text-<?= $percent['class']; ?>"> <i class="mdi mdi-arrow-bottom-right"></i>
									<?php echo $percent['percentChange'] . '%'; ?></span>
								<span class="text-muted">з минул. року</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-xl-6 col-xxl-7">
		<div class="card flex-fill w-100">
			<div class="card-header">
				<h5 class="card-title mb-0">₴, практичні заняття</h5>
			</div>
			<?php
			$practice = getPractice();
			while ($row = mysqli_fetch_assoc($practice)) {
			?>
				<div type="text" class="d-none practice-count" data-practice="<?= $row['price'] ?>"> <?= $row['price'] ?> </div>
			<?php } ?>
			<div class="card-body py-3">
				<div class="chart chart-sm">
					<canvas id="chartjs-dashboard-line"></canvas>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-12 col-md-6 col-lg-6 col-xxl-4 d-flex order-2 order-xxl-3">
		<div class="card flex-fill w-100">
			<div class="card-header">
				<h5 class="card-title mb-0">Вікова категорія</h5>
			</div>
			<div class="card-body d-flex">
				<div class="align-self-center w-100">
					<div class="py-3">
						<div class="chart chart-xs">
							<canvas id="chartjs-dashboard-pie"></canvas>
						</div>
					</div>
					<table class="table mb-0">
						<tbody>
							<tr>
								<td>17-21</td>
								<td class="text-end age-count" data-age="<?= $years['17-21']; ?>"><?= $years['17-21']; ?></td>
							</tr>
							<tr>
								<td>22-35</td>
								<td class="text-end age-count" data-age="<?= $years['22-35']; ?>"><?= $years['22-35']; ?></td>
							</tr>
							<tr>
								<td>36-45</td>
								<td class="text-end age-count" data-age="<?= $years['36-45']; ?>"><?= $years['36-45']; ?></td>
							</tr>
							<tr>
								<td>45+</td>
								<td class="text-end age-count" data-age="<?= $years['45+']; ?>"><?= $years['45+']; ?></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="col-12 col-md-6 col-lg-6 col-xxl-8 d-flex">
		<div class="card flex-fill w-100">
			<div class="card-header">
				<h5 class="card-title mb-0">Нових людей/міс.</h5>
			</div>
			<?php
			$date = getDateOfNewStudents();
			while ($row = mysqli_fetch_assoc($date)) {
			?>
				<div type="text" class="d-none people-count"> <?= $row['count'] ?> </div>
			<?php } ?>
			<div class="card-body d-flex w-100">
				<div class="align-self-center chart chart-lg">
					<canvas id="chartjs-dashboard-bar"></canvas>
				</div>
			</div>
		</div>
	</div>
</div>
<input type="text" da hidden>

<?php
require($_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php');
?>