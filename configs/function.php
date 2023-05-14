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
function getCountOfTable($sql)
{
    global $conn;
    $result = mysqli_query($conn, $sql);
    $r = mysqli_fetch_row($result);
    return $r;
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
function getStudentsLimit($min, $max)
{
    global $conn;

    $sql = "SELECT * FROM students ORDER BY surname COLLATE utf8mb4_unicode_ci ASC  LIMIT $min,$max";
    $result = mysqli_query($conn, $sql);
    return $result;
}
function getCurrentStudents($student)
{
    global $conn;

    $sql = "SELECT * FROM `group_students` inner join groups on groups.id_group = group_students.group_id inner join students on students.id_student=group_students.student_id WHERE `student_id`  = '$student'";
    $result = mysqli_query($conn, $sql);
    return $result->fetch_assoc();
}
function getStudentsofCG($group)
{
    global $conn;

    $sql = "SELECT * FROM `group_students` inner join students on group_students.student_id = students.id_student where group_id = '$group' ORDER BY students.surname COLLATE utf8mb4_unicode_ci ASC";
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
function getCurrentTeacher($teacher)
{
    global $conn;

    $sql = "SELECT * FROM `teachers` WHERE `id_teacher` LIKE '$teacher'";
    $result = mysqli_query($conn, $sql);
    return $result->fetch_assoc();
}
function getGroupsWithTeachers()
{
    global $conn;

    $sql = "SELECT * FROM `groups` inner join teachers on `groups`.teacher_id=`teachers`.id_teacher ORDER BY `groups`.`date_of_graduation` DESC";
    $result = mysqli_query($conn, $sql);
    return $result;
}
function getGroupsWithCT($teacher)
{
    global $conn;

    $sql = "SELECT id_group, GROUP_CONCAT(name_group SEPARATOR ', ') as groups FROM `groups` WHERE `teacher_id` = '$teacher' and `date_of_graduation` >CURRENT_TIMESTAMP ORDER BY `groups`.`date_of_graduation` ASC;";
    $result = mysqli_query($conn, $sql);
    return $result->fetch_assoc();
}
function getCGWithTeachers($group)
{
    global $conn;

    $sql = "SELECT * FROM `groups` inner join teachers on `groups`.teacher_id=`teachers`.id_teacher WHERE `id_group` LIKE '$group' ORDER BY `groups`.`date_of_graduation` DESC";
    $result = mysqli_query($conn, $sql);
    return $result;
}
function getGroupofCS($student)
{
    global $conn;

    $sql = "SELECT * FROM `group_students` inner join groups on `group_students`.group_id=`groups`.id_group where student_id = '$student'";
    $result = mysqli_query($conn, $sql);
    return $result->fetch_assoc();
}
function getResultsOfStudents($min, $max)
{
    global $conn;

    $sql = "SELECT * FROM `results_test` inner join students on `students`.id_student=`results_test`.student_id order by `id_result` DESC LIMIT $min,$max";
    $result = mysqli_query($conn, $sql);
    return $result;
}

function getResultsOfCS($student)
{
    global $conn;

    $sql = "SELECT * FROM `results_test` WHERE `student_id` LIKE '$student'";
    $result = mysqli_query($conn, $sql);
    return $result;
}
function getCategoriesOfTeachers()
{
    global $conn;

    $sql = "SELECT categories.name_category AS category, categories.`id_category`,
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
function getCategoriesOfCT($teacher)
{
    global $conn;

    $sql = "SELECT teacher_id, GROUP_CONCAT(name_category SEPARATOR ', ') as categories FROM teachers_categories INNER JOIN categories ON categories.id_category = teachers_categories.id WHERE teacher_id = '$teacher' GROUP BY teacher_id";
    $result = mysqli_query($conn, $sql);
    return $result->fetch_assoc();
}
function getCategories($category)
{
    global $conn;

    $sql = "SELECT DISTINCT(`name_category`),`id_category` FROM `categories` inner join teachers_categories on teachers_categories.category_id = categories.id_category where categories.id_category like '$category'";
    $result = mysqli_query($conn, $sql);
    return $result->fetch_assoc();
}
function getCertificates()
{
    global $conn;

    $sql = "SELECT * FROM `certificates_of_graduation` inner join students on certificates_of_graduation.student_id = students.id_student ORDER BY `certificates_of_graduation`.`date_of_receipt` DESC";
    $result = mysqli_query($conn, $sql);
    return $result;
}
function getTeachersByCategory($category)
{
    global $conn;

    $sql = "SELECT * FROM `categories` inner join teachers_categories on teachers_categories.category_id = categories.id_category INNER JOIN teachers on teachers.id_teacher = teachers_categories.teacher_id where teachers_categories.category_id like '$category'";
    $result = mysqli_query($conn, $sql);
    return $result;
}
function getLastIdByTable($column,$table)
{
    global $conn;

    $sql = "SELECT MAX($column) AS last_id FROM $table";
    $result = mysqli_query($conn, $sql);
    return $result->fetch_assoc();
}
function getCertificatesOfCS($student)
{
    global $conn;

    $sql = "SELECT * FROM `certificates_of_graduation` WHERE `student_id` LIKE '$student'";
    $result = mysqli_query($conn, $sql);
    return $result->fetch_assoc();
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

function getTablesPY($table, $column)
{
    global $conn;

    $sql = "SELECT * FROM $table WHERE YEAR(`$column`) = YEAR(DATE_SUB(CURRENT_TIMESTAMP, INTERVAL 1 YEAR))";
    $result = mysqli_query($conn, $sql);
    return $result;
}
function getTablesCY($table, $column)
{
    global $conn;

    $sql = "SELECT * FROM $table WHERE YEAR(`$column`) = YEAR(CURRENT_TIMESTAMP)";
    $result = mysqli_query($conn, $sql);
    return $result;
}
function getPercents($last_year, $current_year)
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
function getPracticeDesc($min,$max)
{
    global $conn;

    $sql = "SELECT d.*, t.surname_teacher, t.name_teacher, t.patronymic_teacher, s.surname, s.name, s.telephone FROM `driving` AS d 
    INNER JOIN `teachers` AS t ON d.teacher_id = t.id_teacher 
    LEFT JOIN `students` AS s ON d.student_id = s.id_student ORDER BY d.`date_driving` DESC LIMIT $min,$max";
    $result = mysqli_query($conn, $sql);
    return $result;
    
}
function getPracticeOfCT($teacher)
{
    global $conn;

    $sql = "SELECT d.*, t.surname_teacher, t.name_teacher, t.patronymic_teacher, s.surname, s.name, s.telephone FROM `driving` AS d INNER JOIN `teachers` AS t ON d.teacher_id = t.id_teacher LEFT JOIN `students` AS s ON d.student_id = s.id_student where `teacher_id` = '$teacher'and MONTH(`date_driving`) = MONTH(CURRENT_TIMESTAMP) ORDER BY d.`date_driving` DESC";
    $result = mysqli_query($conn, $sql);
    return $result;
    
}
function getAvailableTeachers()
{
    global $conn;

    $sql = "SELECT * FROM teachers WHERE id_teacher NOT IN ( SELECT teacher_id FROM groups WHERE date_of_graduation > CURDATE() ) ORDER BY surname_teacher ASC";
    $result = mysqli_query($conn, $sql);
    return $result;
    
}
function getTableColumnWhere($table,$column,$id)
{
    global $conn;

    $sql = "SELECT * FROM `$table` WHERE `$column` = '$id'";
    $result = mysqli_query($conn, $sql);
    return mysqli_num_rows($result);
}
function getTableColumnWhereResult($table,$column,$id)
{
    global $conn;

    $sql = "SELECT * FROM `$table` WHERE `$column` = '$id'";
    $result = mysqli_query($conn, $sql);
    return $result->fetch_assoc();
}
function getAvailableGroups()
{
    global $conn;

    $sql = "SELECT * FROM `groups` WHERE `date_of_graduation` > CURRENT_DATE";
    $result = mysqli_query($conn, $sql);
    return $result;
}


function getFullNameAndContact($row) {
    $fullName = '';
    $contact = '';
    if ($row['student_id']) {
        $fullName = $row['surname'] . ' ' . $row['name'];
        $contact = $row['telephone'];
    } else {
        $fullName = $row['pib'];
        $contact = $row['contact_student'];
    }
    return array($fullName, $contact);
}
