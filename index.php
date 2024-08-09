<?php

echo "<!DOCTYPE html>".
     "<html lang='en'>";
echo "<head>";
echo "    <meta charset='UTF-8'>";
echo "    <meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "    <title>Real Estate Website</title>";
echo "    <link rel='stylesheet' href='style.css'>";
echo "</head>";
echo "<body>";
echo "    <header>";
echo "        <h1>Jordan Realtor</h1>";
echo "        <!-- Navigation -->";
echo "        <nav>";
echo "            <ul>";
echo "                <li><a href='index.php'>Home</a></li>";
echo "                <li><a href='propertiesPage.php'>Properties</a></li>";
echo "                <li><a href='contactInfoPage.php'>Contact</a></li>";
echo "            </ul>";
echo "        </nav>";
echo "    </header>";
echo "    <main>";
echo "        <!-- Parallax Image -->";
echo "        <div class='parallax'></div>";

// Contact Section
echo "        <section id='contact-form'>";

echo "            <h2>Contact the Agent</h2>";
echo "            <form action='sendEmail.php' method='post'>";
echo "                <label for='name'>Name:</label>";
echo "                <input type='text' id='name' name='name' required><br>";
echo "                <label for='email'>Email:</label>";
echo "                <input type='email' id='email' name='email' required><br>";
echo "                <label for='phone'>Phone Number:</label>";
echo "                <input type='tel' id='phone' name='phone' required><br>";
echo "                <label for='message'>Your Message:</label><br>";
echo "                <textarea id='message' name='message' rows='5' required></textarea><br>";
echo "                <input type='submit' value='Send Message'>";

echo "            </form>";
echo "        </section>";


echo "    </main>";
echo "    <footer>";
echo "        <p>&copy; 2024 Real Estate Website</p>";
echo "    </footer>";
echo "</body>";
echo "</html>";

?>
