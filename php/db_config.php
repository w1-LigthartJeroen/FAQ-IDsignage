<?php
    try
    {
        //connectie met sql-server
	    $pdo = new PDO('sqlsrv:server=BERTHA\SQLEXPRESS;database=faqIdsignage;','','');
	    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    catch (PDOException $e)
    {
	    die ('Unable to connect to the database server.' . $e->getMessage());
    }
        echo 'Database connection established.';

?>