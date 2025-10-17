<?php

$bookData = [
    "The Nicomachean Ethics" => ["author" => "Aristotle", "year" => -350, "genre" => "Philosophy"],
    "Man’s Search for Meaning" => ["author" => "Viktor Frankl", "year" => 1946, "genre" => "Psychology"],
    "A Brief History of Time" => ["author" => "Stephen Hawking", "year" => 1988, "genre" => "Science"],
    "The Art of Computer Programming" => ["author" => "Donald Knuth", "year" => 1968, "genre" => "Computer Science"],
    "This Is Your Brain on Music" => ["author" => "Daniel Levitin", "year" => 2006, "genre" => "Music Psychology"]
];

function searchBook($title, $bookData) {
    if (isset($bookData[$title])) {
        $info = $bookData[$title];
        echo "<div class='success'>";
        echo "<h3>📘 Book Found!</h3>";
        echo "Title: <b>$title</b><br>";
        echo "Author: {$info['author']}<br>";
        echo "Year: {$info['year']}<br>";
        echo "Genre: {$info['genre']}<br>";
        echo "</div>";
    } else {
        echo "<div class='error'><h3>❌ Book not found in the library records.</h3></div>";
    }
}
<?php
// hashtable.php

$bookData = [
    "The Nicomachean Ethics" => ["author" => "Aristotle", "year" => -350, "genre" => "Philosophy"],
    "Man’s Search for Meaning" => ["author" => "Viktor Frankl", "year" => 1946, "genre" => "Psychology"],
    "A Brief History of Time" => ["author" => "Stephen Hawking", "year" => 1988, "genre" => "Science"],
    "The Art of Computer Programming" => ["author" => "Donald Knuth", "year" => 1968, "genre" => "Computer Science"],
    "This Is Your Brain on Music" => ["author" => "Daniel Levitin", "year" => 2006, "genre" => "Music Psychology"]
];

function searchBook($title, $bookData) {
    if (isset($bookData[$title])) {
        $info = $bookData[$title];
        echo "<div class='success'>";
        echo "<h3>📘 Book Found!</h3>";
        echo "Title: <b>$title</b><br>";
        echo "Author: {$info['author']}<br>";
        echo "Year: {$info['year']}<br>";
        echo "Genre: {$info['genre']}<br>";
        echo "</div>";
    } else {
        echo "<div class='error'><h3>❌ Book not found in the library records.</h3></div>";
    }
}

/*
Example Output 1 (Book Found):

📘 Book Found!
Title: A Brief History of Time
Author: Stephen Hawking
Year: 1988
Genre: Science


Example Output 2 (Book Not Found):

❌ Book not found in the library records.

*/
?>
/*

Example Output 1 (Book Found):

📘 Book Found!
Title: A Brief History of Time
Author: Stephen Hawking
Year: 1988
Genre: Science


Example Output 2 (Book Not Found):

❌ Book not found in the library records.

*/
?>
