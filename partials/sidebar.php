<?php
$currentPage = $_SERVER['REQUEST_URI'];
?>
<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.php">
            <span class="align-middle" style="font-size: 1rem;">Панель адміністратора</span>
        </a>
        <?php
        function comparisonPages($page)
        {
            $current_page = basename($_SERVER['PHP_SELF'], '.php');
            $class = '';
            if ($current_page == $page) {
                $class = 'active';
            }
            return $class;
        }
        ?>
        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Cторінки
            </li>

            <li class="sidebar-item <?= comparisonPages('index'); ?>">
                <a class="sidebar-link" href="/index.php">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Статистика</span>
                </a>
            </li>

            <li class="sidebar-item <?= comparisonPages('pages-group'); ?>">
                <a class="sidebar-link" href="/pages-group.php?id=all">
                    <i class="align-middle" data-feather="users"></i> <span class="align-middle">Групи</span>
                </a>
            </li>
            <li class="sidebar-item <?= comparisonPages('pages-teacher'); ?>">
                <a class="sidebar-link" href="/pages-teacher.php">
                    <i class="align-middle" data-feather="speaker"></i> <span class="align-middle">Викладачі</span>
                </a>
            </li>
            <li class="sidebar-item <?= comparisonPages('pages-student'); ?>">
                <a class="sidebar-link" href="/pages-student.php">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Студенти</span>
                </a>
            </li>
            <li class="sidebar-item <?= comparisonPages('pages-result'); ?>">
                <a class="sidebar-link" href="/pages-result.php">
                    <i class="align-middle" data-feather="book"></i> <span class="align-middle">Результати</span>
                </a>
            </li>
            <li class="sidebar-item <?= comparisonPages('pages-practice'); ?>">
                <a class="sidebar-link" href="/pages-practice.php">
                    <i class="align-middle" data-feather="calendar"></i> <span class="align-middle">Практичні заняття</span>
                </a>
            </li>
            <li class="sidebar-item <?= comparisonPages('pages-certificates'); ?>">
                <a class="sidebar-link" href="/pages-certificates.php">
                    <i class="align-middle" data-feather="award"></i> <span class="align-middle">Свідоцтва</span>
                </a>
            </li>

            <li class="sidebar-header">
                Інструменти
            </li>
            <li class="sidebar-item <?= comparisonPages('pages-category'); ?>">
                <a class="sidebar-link" href="/pages-category.php">
                    <i class="align-middle" data-feather="truck"></i> <span class="align-middle">Категорії</span>
                </a>
            </li>
            <li class="sidebar-item <?= comparisonPages('pages-sign-up'); ?>">
                <a class="sidebar-link" href="/pages-sign-up.php">
                    <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Cтворити групу</span>
                </a>
            </li>
            <li class="sidebar-item <?= comparisonPages('ui'); ?>">
                <a class="sidebar-link" href="/ui.php">
                    <i class="align-middle" data-feather="square"></i> <span class="align-middle">UI (прибрати)</span>
                </a>
            </li>
        </ul>
    </div>
</nav>