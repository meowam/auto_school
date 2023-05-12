<?php
require($_SERVER['DOCUMENT_ROOT'] . '/configs/check-auth.php');
if (!isset($_GET['id'])) {
    header("location: /pages-teacher.php");
} else {
    $teacher = getCurrentTeacher($_GET['id']);
    $categories = getCategoriesOfCT($_GET['id']);
    $groups = getGroupsWithCT($_GET['id']);
    $practices = getPracticeOfCT($_GET['id']);
}

if (($teacher) == null) {
    header("location: /pages-teacher.php");
}
$formatted_date = date('d.m.Y', strtotime($teacher['date_birthday_teacher']));
require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');

?>

<div class="mb-3">
    <h1 class="h3 d-inline align-middle">Профіль</h1>
</div>
<div class="row">
    <div class="col-md-12 col-xl-4">
        <div class="card mb-3">
            <div class="card-body text-center">
                <img src="/assets/img/avatars/user.svg" class="img-fluid mb-2" width="128" height="128" />
                <div class="d-flex align-items-center justify-content-center m-t-3">
                    <h5 class="card-title mb-0 m-r-10"><?php echo $teacher['surname_teacher'] . ' ' . $teacher['name_teacher'] . ' ' . $teacher['patronymic_teacher'] ?></h5>
                    <a href="/edit/teacher.php?id=<?= $teacher['id_teacher'] ?>" class="text-color-gray m-r-10"><i class="align-middle" data-feather="edit-2"></i></a>
                </div>
            </div>
            <hr class="my-0" />
            <div class="card-body">
                <h5 class="h6 card-title">Відомості:</h5>
                <ul class="list-unstyled mb-0">
                    <li class="mb-1">Категорії:
                        <?= $categories['categories']; ?>
                    </li>
                    <li class="mb-1">Ціна, год.:
                        <?= $teacher['price_driving']; ?>
                    </li>
                    <li class="mb-1">Групи:
                        <a href="/pages-group.php?id=<?= $groups['id_group']; ?>"> <?= $groups['groups']; ?> </a>
                    </li>
                </ul>
            </div>

            <hr class="my-0" />
            <div class="card-body">
                <h5 class="h6 card-title">Контакти:</h5>
                <ul class="list-unstyled mb-0">
                    <li class="mb-1"><?= $teacher['telephone_teacher'] ?></li>
                    <li class="mb-1"><?= $teacher['email_teacher'] ?></li>
                </ul>
            </div>
            <hr class="my-0" />
            <div class="card-body">
                <h5 class="h6 card-title">Про викладача:</h5>
                <ul class="list-unstyled mb-0">
                    <li class="mb-1"><span data-feather="sunrise" class="feather-sm me-1"></span> Дата народження: <?= $formatted_date ?> </li>
                    <li class="mb-1"><span data-feather="home" class="feather-sm me-1"></span> Живе на <?= $teacher['home_adress_teacher'] ?></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-md-12 col-xl-8">
        <div class="card">
            <div class="card-header p-b-0">
                <h5 class="card-title mb-0">Практичні заняття</h5>
            </div>
            <div class="card-body h-100">
                <?php
                if (mysqli_num_rows($practices) > 0) {
                ?>
                    <div class="d-flex align-items-start">
                        <table class="table table-hover my-0">
                            <thead>
                                <tr>
                                    <th>№</th>
                                    <th class="d-xl-table-cell">Дата та час заняття</th>
                                    <th class="d-xl-table-cell">Студент</th>
                                    <th class="d-xl-table-cell">Контактні дані</th>
                                    <th class="d-xl-table-cell">Ціна</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach ($practices as $practice) {
                                    list($fullName, $contact) = getFullNameAndContact($practice);
                                ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td class="d-xl-table-cell"><?= date('d.m.Y H:i:s', strtotime($practice['date_driving'])) ?></td>
                                        <td class="d-md-table-cell"><?= $fullName ?></td>
                                        <td class="d-md-table-cell"><?= $contact ?></td>
                                        <td class="d-md-table-cell"><?= $practice['price'] ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                <?php
                } else {
                    echo 'Практичних занять в цьому місяці немає.';
                }
                ?>
            </div>


        </div>
    </div>
</div>

<?php
require($_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php');
?>