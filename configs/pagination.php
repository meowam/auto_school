<div class="col-lg-12  m-t-30">
    <ul class="pagination justify-content-center">
        <?php
        $params = $_GET;
        unset($params['curr_p']);
        $query_string = http_build_query($params);
        if ($curr_p > 1) {
            $prevpage = $curr_p - 1;
        } else {
            $prevpage = $curr_p - 1;
        }

        for ($x = ($curr_p - $range); $x < (($curr_p + $range) + 1); $x++) {
            if (($x > 0) && ($x <= $totalpages)) {
                if ($x == $curr_p) {
                    echo " <li class='active'><a class='page-link' href='{$_SERVER['PHP_SELF']}?$query_string&curr_p=$x'>$x</a></li>";
                } else {
                    echo " <li class=''><a class='page-link'  href='{$_SERVER['PHP_SELF']}?$query_string&curr_p=$x'>$x</a></li> ";
                }
            }
        }

        if ($curr_p != $totalpages) {
            $nextpage = $curr_p + 1;
        } else {
            $nextpage = $curr_p + 1;
        }
        ?>

    </ul>
</div>