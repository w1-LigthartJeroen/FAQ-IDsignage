<?php
    include('db_config.php');
    try
    {
        $sql = 'SELECT * FROM faqidsignage';
        $result = $pdo->query($sql);    
    }

    catch(PDOException $e)
    {
        echo 'Er is een probleem met het berijken van de database: ' . $e->getMessage();
        exit();
    }
    
    while($row = $result->fetch(PDO::FETCH_ASSOC))
    {
        print_r($row);
    }
?>
