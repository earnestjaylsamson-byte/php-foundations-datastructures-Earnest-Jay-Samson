<?php

$library = [
    "Philosophy" => [
        "Ethics" => ["The Nicomachean Ethics", "Groundwork of the Metaphysics of Morals"],
        "Existentialism" => ["Being and Nothingness", "Man’s Search for Meaning"]
    ],
    "Science & Technology" => [
        "Physics" => ["A Brief History of Time", "The Elegant Universe"],
        "Computer Science" => ["Introduction to Algorithms", "The Art of Computer Programming"]
    ],
    "Art & Culture" => [
        "Music" => ["This Is Your Brain on Music", "The Music Lesson"],
        "Architecture" => ["Form, Space, and Order", "Complexity and Contradiction in Architecture"]
    ]
];

function showLibrary($data, $depth = 0) {
    $indent = str_repeat("&nbsp;&nbsp;&nbsp;", $depth);
    foreach ($data as $key => $value) {
        if (is_array($value)) {
            echo $indent . "<b>📁 $key</b><br>";
            showLibrary($value, $depth + 1);
        } else {
            echo $indent . "📖 $value<br>";
        }
    }
}

/*

Example Output:

📁 Philosophy
   📁 Ethics
      📖 The Nicomachean Ethics
      📖 Groundwork of the Metaphysics of Morals
   📁 Existentialism
      📖 Being and Nothingness
      📖 Man’s Search for Meaning
📁 Science & Technology
   📁 Physics
      📖 A Brief History of Time
      📖 The Elegant Universe
   📁 Computer Science
      📖 Introduction to Algorithms
      📖 The Art of Computer Programming
📁 Art & Culture
   📁 Music
      📖 This Is Your Brain on Music
      📖 The Music Lesson
   📁 Architecture
      📖 Form, Space, and Order
      📖 Complexity and Contradiction in Architecture

*/
?>
