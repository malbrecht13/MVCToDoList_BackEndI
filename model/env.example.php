<?php
    $variables = [
        'DB_DSN' => 'mysql:host=phtfaw4p6a970uc0.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=ze3n7uyhcoywmp5a',
        'DB_USERNAME' => 'eygt4158xbq3bip0',
        'DB_PASSWORD' => 'tjl94cvi1so3n1hv'
    ];

    foreach ($variables as $key => $value) {
        putenv("$key=$value");
    }

?>