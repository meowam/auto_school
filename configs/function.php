<?php
if (!isset($_SESSION)) {
    session_start();
}

function isAuth()
{
    $is_session = isset($_SESSION['user_id']) && ($_SESSION["user_id"]) != null;
    $is_cookie = isset($_COOKIE['user_id']) && ($_COOKIE["user_id"]) != null;

    if ($is_session || $is_cookie) {
        return true;
    } else {
        return false;
    }
}

function getCurrentUser()
{
    global $conn;
    $is_session = isset($_SESSION['user_id']) && ($_SESSION["user_id"]) != null;
    $is_cookie = isset($_COOKIE['user_id']) && ($_COOKIE["user_id"]) != null;
    if ($is_session || $is_cookie) {
        $userID = $is_session ? $_SESSION['user_id'] : $_COOKIE['user_id'];
        $sql = "SELECT * FROM users WHERE id =" . $userID;
        $result = mysqli_query($conn, $sql);
        return $result->fetch_assoc();
    } else {
        return null;
    }
}

function getListTable($table)
{
    global $conn;

    $sql = "SELECT * FROM $table";
    $result = mysqli_query($conn, $sql);
    return $result;
}
function getStudents()
{
    global $conn;

    $sql = "SELECT * FROM students ORDER BY surname COLLATE utf8mb4_unicode_ci ASC";
    $result = mysqli_query($conn, $sql);
    return $result;
}
function getTeachers()
{
    global $conn;

    $sql = "SELECT * FROM teachers ORDER BY surname_teacher COLLATE utf8mb4_unicode_ci ASC";
    $result = mysqli_query($conn, $sql);
    return $result;
}
function getGroupsWithTeachers()
{
    global $conn;

    $sql = "SELECT * FROM `groups` inner join teachers on groups.teacher_id=teachers.id_teacher";
    $result = mysqli_query($conn, $sql);
    return $result;
}
function getGroupofCS($student)
{
    global $conn;

    $sql = "SELECT * FROM `group_students` inner join groups on group_students.group_id=groups.id_group where student_id = '$student'";
    $result = mysqli_query($conn, $sql);
    return $result->fetch_assoc();
}
function getResultsOfStudents()
{
    global $conn;

    $sql = "SELECT * FROM `results_test` inner join students on students.id_student=results_test.student_id order by `id_result` DESC";
    $result = mysqli_query($conn, $sql);
    return $result;
}
function getCategoriesOfTeachers()
{
    global $conn;

    $sql = "SELECT categories.name_category AS category, 
    GROUP_CONCAT(
      CONCAT(
        teachers.surname_teacher, ' ', 
        LEFT(teachers.name_teacher, 1), '.', 
        LEFT(teachers.patronymic_teacher, 1), '.'
      ) 
      ORDER BY 
        CONCAT(
          CASE WHEN teachers.name_teacher COLLATE utf8mb4_unicode_ci = '' THEN 'Я' ELSE teachers.name_teacher COLLATE utf8mb4_unicode_ci END, 
          CASE WHEN teachers.patronymic_teacher COLLATE utf8mb4_unicode_ci = '' THEN 'Я' ELSE teachers.patronymic_teacher COLLATE utf8mb4_unicode_ci END, 
          teachers.surname_teacher COLLATE utf8mb4_unicode_ci
        ) ASC 
      SEPARATOR ', '
    ) AS full_name 
    FROM teachers_categories 
    INNER JOIN teachers ON teachers.id_teacher = teachers_categories.teacher_id 
    INNER JOIN categories ON categories.id_category = teachers_categories.category_id 
    GROUP BY categories.name_category 
    ORDER BY categories.name_category COLLATE utf8mb4_unicode_ci ASC";
    $result = mysqli_query($conn, $sql);
    return $result;
}
function getCertificates()
{
    global $conn;

    $sql = "SELECT * FROM `certificates_of_graduation` inner join students on certificates_of_graduation.student_id = students.id_student";
    $result = mysqli_query($conn, $sql);
    return $result;
}
function getYearsOfStudent()
{
    global $conn;

    $sql = "SELECT
    SUM(CASE WHEN TIMESTAMPDIFF(YEAR, date_birthday, CURDATE()) BETWEEN 17 AND 21 THEN 1 ELSE 0 END) AS `17-21`,
    SUM(CASE WHEN TIMESTAMPDIFF(YEAR, date_birthday, CURDATE()) BETWEEN 22 AND 35 THEN 1 ELSE 0 END) AS `22-35`,
    SUM(CASE WHEN TIMESTAMPDIFF(YEAR, date_birthday, CURDATE()) BETWEEN 36 AND 45 THEN 1 ELSE 0 END) AS `36-45`,
    SUM(CASE WHEN TIMESTAMPDIFF(YEAR, date_birthday, CURDATE()) > 46 THEN 1 ELSE 0 END) AS `45+`
    FROM students";

    $result = mysqli_query($conn, $sql);
    return $result->fetch_assoc();
}
function getPractice()
{
    global $conn;

    $sql = "SELECT MONTH(date_driving) AS month, COUNT(*) AS count, SUM(`price`) AS price FROM driving WHERE YEAR(date_driving) = YEAR(CURRENT_TIMESTAMP) GROUP BY month";

    $result = mysqli_query($conn, $sql);
    return $result;
}
function getDateOfNewStudents()
{
    global $conn;

    $sql = "SELECT MONTH(date_application) AS month, COUNT(*) AS count FROM students WHERE YEAR(date_application) = YEAR(CURRENT_TIMESTAMP) GROUP BY month";

    $result = mysqli_query($conn, $sql);
    return $result;
}

function getMoneyFromCM()
{
    global $conn;

    $sql = "SELECT * FROM students WHERE YEAR(date_application) = YEAR(CURRENT_TIMESTAMP) and MONTH(date_application) = MONTH(CURRENT_TIMESTAMP)";

    $result = mysqli_query($conn, $sql);
    return $result;
}
function getMoneyFromPM()
{
    global $conn;

    $sql = "SELECT * FROM students WHERE YEAR(date_application) = YEAR(DATE_SUB(CURRENT_TIMESTAMP, INTERVAL 1 MONTH)) AND MONTH(date_application) = MONTH(DATE_SUB(CURRENT_TIMESTAMP, INTERVAL 1 MONTH))";

    $result = mysqli_query($conn, $sql);
    return $result;
}

function getTablesPY($table,$column)
{
    global $conn;

    $sql = "SELECT * FROM $table WHERE YEAR(`$column`) = YEAR(DATE_SUB(CURRENT_TIMESTAMP, INTERVAL 1 YEAR))";
    $result = mysqli_query($conn, $sql);
    return $result;
}
function getTablesCY($table,$column)
{
    global $conn;

    $sql = "SELECT * FROM $table WHERE YEAR(`$column`) = YEAR(CURRENT_TIMESTAMP)";
    $result = mysqli_query($conn, $sql);
    return $result;
}
function getPercents($last_year,$current_year)
{
    $class = '';
    $difference = $current_year - $last_year;
    $percentChange = ($difference / $last_year) * 100;
    $percentChange = round($percentChange, 2);
    $class = ($percentChange > 0) ? 'success' : 'danger';
    return array(
        'percentChange' => $percentChange,
        'class' => $class
    );
}

function getSNP($surname, $name, $patronymic)
{
    $nameInitial = mb_strtoupper(mb_substr($name, 0, 1));
    $patronymicInitial = mb_strtoupper(mb_substr($patronymic, 0, 1));

    $fullNameInitials = $surname . ' ' . $nameInitial . '.' . $patronymicInitial . '.';
    return $fullNameInitials;
}