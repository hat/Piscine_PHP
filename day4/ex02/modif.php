<?php

if ($_POST['login'] && $_POST['oldpw'] && $_POST['newpw'] && $_POST['submit'] === "OK") {
    $user = unserialize(file_get_contents('../private/passwd'));
    if ($user) {
        $flag = 0;
        foreach ($user as $k => $v) {
            if ($v['login'] === $_POST['login'] && $v['passwd'] === hash('whirlpool', $_POST['oldpw'])) {
                $flag = 1;
                $user[$k]['passwd'] =  hash('whirlpool', $_POST['newpw']);
            }
        }
        if ($flag) {
            file_put_contents('../private/passwd', serialize($user));
            echo "OK\n";
        } else {
            echo "ERROR\n";
        }
    } else {
        echo "ERROR\n";
    }
} else {
    echo "ERROR\n";
}

?>