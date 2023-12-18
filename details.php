<?php

require_once 'partials/header.php';

?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $title = $_POST['title'];
    $author = $_POST['author'];
    $civility = $_POST['civility'];
    $year = $_POST['year'];
    $pages = $_POST['pages'];
    $categories = $_POST['categories'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $link = $_POST['link'];
    $errors = [];

    // Validate data
    if (empty($title) || strlen($title) < 2 || strlen($title) > 150) {
        $errors[] = "Invalid title. Title must be between 2 and 150 characters.";
    }

    if (empty($author) || strlen($author) < 2 || strlen($author) > 150) {
        $errors[] = "Invalid author name. Author name must be between 2 and 150 characters.";
    }

    if (empty($civility)) {
        $errors[] = "No civility selected. Please select at least one civility.";
    }

    if (empty($year) || $year < 2000 || $year > 2022) {
        $errors[] = "Invalid publication year. Year must be between 2000 and 2022.";
    }

    if (empty($pages) || $pages < 1 || $pages > 1000) {
        $errors[] = "Invalid number of pages. Pages must be between 1 and 1000.";
    }

    if (empty($categories)) {
        $errors[] = "No category selected. Please select at least one category.";
    }

    if (empty($price) || $price < 0 || $price > 299) {
        $errors[] = "Invalid price. Price must be between 0 and 299.";
    }

    if (empty($description) || strlen($description) > 500) {
        $errors[] = "Invalid description. Description cannot be empty and must be less than 500 characters.";
    }

    if (empty($link)) {
        $errors[] = "Invalid link. Link cannot be empty.";
    }


    if (!empty($errors)) {
        echo "<div class='error_container'>";
        foreach ($errors as $error) {
            echo "<p class='error_display'>$error</p>";
        }
        echo "</div>";
    } else {

        // Display data

        echo "<div class='container'>";
        echo '<p>Titre : ' . ($title ? $title : 'Missing title') . '</p>';
        echo '<p>Auteur : ' . ($author ? $author : 'Missing author') . '</p>';
        echo '<p>Civilité : ' . ($civility ? $civility : 'Missing civility') . '</p>';
        echo '<p>Année de publication : ' . ($year ? $year : 'Missing year') . '</p>';
        echo '<p>Nombre de pages : ' . ($pages ? $pages : 'Missing pages') . '</p>';
        if (!empty($categories)) {
            echo '<p>Catégories:</p>';
            echo '<ul>';
            foreach ($categories as $category) {
                echo '<li>' . $category . '</li>';
            }
            echo '</ul>';
        } else {
            echo 'Missing categories';
        }
        echo '<p>Prix : ' . ($price ? $price : 'Missing price') . '</p>';
        echo '<p>Description : ' . ($description ? $description : 'Missing description') . '</p>';

        echo '<p> Acheter ici : <a href="' . ($link ? $link : '#') . '">' . ($link ? $link : 'Missing link') . '</a></p>';

        $categoriesString = implode(',', $categories);
        echo '<button class="buy_btn"><a href="paiement.php?title=' . urlencode($title) . '&author=' . urlencode($author) . '&civility=' . urlencode($civility) . '&year=' . urlencode($year) . '&pages=' . urlencode($pages) . '&categories=' . urlencode($categoriesString) . '&price=' . urlencode($price) . '&description=' . urlencode($description) . '&link=' . urlencode($link) .'">Payer</a></button>';
        echo "</div>";

        // Write to file
        $ficher = fopen('fichier.txt', 'a');
        fwrite($ficher, "Title : " . $title . "\n");
        fwrite($ficher, "Written by " . $civility . " " . $author . "\n");
        fwrite($ficher, "Written in " . $year . "\n");
        fwrite($ficher, "This book has " . $pages . " pages" . "\n");
        foreach ($categories as $category) {
            fwrite($ficher, $category . "\n");
        }
        fwrite($ficher, "This book costs " . $price . " €". "\n");
        fwrite($ficher, "Here is a brief description of the book : " . $description . "\n");
        fwrite($ficher, "Here is a link to buy it : <a href='" . ($link ? $link : '#') . "'>" . ($link ? $link : 'Missing link') . "</a>\n");  
        fwrite($ficher, " \n");  
        fclose($ficher);
    }
}
?>



<?php
include 'partials/footer.php';
?>