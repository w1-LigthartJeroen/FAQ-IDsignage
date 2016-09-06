<?php

    $db = array(
        'host' => 'localhost',
        'dbName' => 'faqIdsignage',
        'user' => 'BERTHA\SQLEXPRESS',
        'pass' => ''
    );    

    try
    {
        $db = new PDO('mysql:host='.$db['host'].';dbName=' . $db['dbName'], $db['user'], $db['pass']);
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