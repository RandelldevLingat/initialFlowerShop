<?php
    include_once 'connection.php';

    
    try{
        $query = "SELECT * FROM products LIMIT 0, 4";
        $stmt = $pdo->prepare($query);

        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }catch(PDOException $e){
        die("Query failed: " . $e->getMessage());
    }


    
    

?>