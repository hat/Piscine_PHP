<?php

if ($_POST['login'] && $_POST['passwd'] && $_POST['submit'] === "OK") {
    if (!file_exists('../private')) {
        mkdir("../private");
    }
    if (!file_exists('../private/passwd')) {
        file_put_contents('../private/passwd', null);
    }
    $user = unserialize(file_get_contents('../private/passwd'));
    if ($user) {
        $flag = 0;
        foreach ($user as $k => $v) {
            if ($v['login'] === $_POST['login'])
                $flag = 1;
        }
    }
    if ($flag) {
        echo "ERROR\n";
    } else {
        $tmp['login'] = $_POST['login'];
        $tmp['passwd'] = hash('whirlpool', $_POST['passwd']);
        $user[] = $tmp;
        file_put_contents('../private/passwd', serialize($user));
        echo "OK\n";
    }
} else {
    echo "ERROR\n";
}

?>