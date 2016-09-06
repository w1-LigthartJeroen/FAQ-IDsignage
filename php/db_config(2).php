<?php

    $db = array(
        'servername' => 'localhost',
        'database' => 'faqIdsignage',
        'username' => 'BERTHA\SQLEXPRESS',
        'password' => ''
    );    

    try
    {
        $db = new PDO('mysql:host='.$db['servername'] . ';dbName=' . $db['database'], $db['username'], $db['password']);
    }

    catch(PDOException $e)
    {
        $msg = '<p>
                Regelnummer: ' . $e->getLine() . '<br>
                Bestand: ' . $e->getFile() . '<br>
                Foutmelding ' . $e->getMessage() . '
                </p>';

        trigger_error($msg);
    }
?>