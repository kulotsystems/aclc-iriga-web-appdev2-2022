<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>members-json</title>
</head>
<body style="font-family: monospace">
<?php

    $members  = [];
    $members2 = [];
    require_once '../arvic.php';
    require_once '../sarahmae.php';
    require_once '../ruel.php';
    require_once '../lean.php';
    require_once '../jeffrey.php';
    require_once '../Gella.php';
    require_once '../pauline.php';
    require_once '../lucy.php';
    require_once '../Ron.php';
    require_once '../Michael.php';
    require_once '../johnbern.php';
    require_once '../vhan.php';

    for($i=0; $i<sizeof($members); $i++) {
        $member = $members[$i];
        $key    = str_replace(' ', '-', strtolower($member['first_name']));
        $members2[$key] = $member;
    }

    $members_json = json_encode($members2, JSON_PRETTY_PRINT);
    $file = fopen('members.json', 'w');
    fwrite($file, $members_json);
    fclose($file);

    echo '<pre>';
    echo $members_json;
    echo '</pre>';
?>
</body>
</html>

