<?php

    $db = array(
        'servername' => 'localhost',
        'database' => 'faq idsignage',
        'username' => 'root',
        'password' => ''
    );    

    try
    {
        $db = new PDO('mysql:host=' . $db['servername'] . ';dbName=' . $db['database'], $db['username'], $db['password']);
    }

    catch(PDOException $e)
    {
        $msg = '<p>
                <b>Regelnummer:</b> ' . $e->getLine() . '<br>
                <b>Bestand:</b> ' . $e->getFile() . '<br>
                <b>Foutmelding:</b> ' . $e->getMessage() . '
                </p>';

        trigger_error($msg);
    }
?>