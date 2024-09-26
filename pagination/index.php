<?php
include_once 'connection.php';

// Pagination variables
$items_per_page = 4;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $items_per_page;

try {
    // Get total number of products for pagination
    $total_query = "SELECT COUNT(*) FROM products";
    $total_stmt = $pdo->query($total_query);
    $total_products = $total_stmt->fetchColumn();
    $total_pages = ceil($total_products / $items_per_page);

    // Get products for the current page
    $query = "SELECT * FROM products LIMIT :offset, :items_per_page";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
    $stmt->bindParam(':items_per_page', $items_per_page, PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Query failed: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <div class="content">
        <?php 
        // Check if there are results and display them
        if ($result) {
            foreach ($result as $row) {
                ?>
                <div class="product">
                    <img src="<?php echo htmlspecialchars($row['image_url']); ?>" alt="<?php echo htmlspecialchars($row['name']); ?>" width="150" height="150">
                    <p><?php echo htmlspecialchars($row["name"]); ?></p>
                    <p>Price: $<?php echo htmlspecialchars($row["price"]); ?></p>
                </div>
                <?php 
            }
        } else {
            echo "No products found.";
        }
        ?>
    </div>
    <div class="page-info">
        <a href="?page=1">First</a>
        <a href="<?php echo ($page > 1) ? "?page=" . ($page - 1) : "#"; ?>">Previous</a>
        
        <div class="page-number">
            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                <a href="?page=<?php echo $i; ?>" class="<?php echo ($i === $page) ? 'active' : ''; ?>"><?php echo $i; ?></a>
            <?php endfor; ?>
        </div>

        <a href="<?php echo ($page < $total_pages) ? "?page=" . ($page + 1) : "#"; ?>">Next</a>
        <a href="?page=<?php echo $total_pages; ?>">Last</a>
    </div>
</body>
</html>
