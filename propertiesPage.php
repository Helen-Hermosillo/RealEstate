<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Properties Listing</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Available Properties</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="propertiesPage.php">Properties</a></li>
                <li><a href="contactInfo.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="properties-container">
            <?php
            // Check if there are any properties to display
            if ($result->num_rows > 0) {
                // Output data for each property
                while($row = $result->fetch_assoc()) {
                    echo '<div class="property">';
                    echo '<img src="' . $row["image_url"] . '" alt="Property Image">';
                    echo '<h2>' . $row["address"] . '</h2>';
                    echo '<p><strong>Price:</strong> $' . number_format($row["price"]) . '</p>';
                    echo '<p><strong>Beds:</strong> ' . $row["bedAmt"] . '</p>';
                    echo '<p><strong>Baths:</strong> ' . $row["bathAmt"] . '</p>';
                    echo '<p><strong>Square Feet:</strong> ' . number_format($row["sqftAmt"]) . ' sqft</p>';
                    echo '<p>' . $row["description"] . '</p>';
                    echo '</div>';
                }
            } else {
                echo '<p>No properties available at the moment.</p>';
            }

            // Close the database connection
            $conn->close();
            ?>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 Real Estate Website</p>
    </footer>
</body>
</html>
