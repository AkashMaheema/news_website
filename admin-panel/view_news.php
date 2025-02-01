<?php
require 'db_connect.php';
?>
<html>

<head>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <?php include('navbar.php') ?>
        <main class="content">
            <h2>View News</h2>
            <?php
            $result = $conn->query("SELECT * FROM news");
            while ($row = $result->fetch_assoc()) {
                echo "<div class='news-card'>";
                echo "<img src='" . $row['image'] . "' width='100'>";
                echo "<div class='news-card-body'>";
                echo "<h2>" . $row['title'] . "</h2>";
                echo "<p>" . $row['description'] . "</p>";
                echo "</div>";
                echo "<div class='news-card-btns'>";
                echo "<a href='edit_news.php?id=" . $row['id'] . "'>Edit</a>";
                echo "<a href='delete_news.php?id=" . $row['id'] . "'>Delete</a>";
                echo "</div>";
                echo "</div>";
            }
            ?>
        </main>
    </div>
</body>

</html>