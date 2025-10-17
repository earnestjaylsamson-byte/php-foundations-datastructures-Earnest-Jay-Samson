<?php

class BookNode {
    public $title;
    public $left;
    public $right;

    function __construct($title) {
        $this->title = $title;
        $this->left = null;
        $this->right = null;
    }
}

class BookTree {
    public $root = null;

    public function insert($title) {
        $this->root = $this->insertRec($this->root, $title);
    }

    private function insertRec($node, $title) {
        if ($node === null) return new BookNode($title);
        if (strcasecmp($title, $node->title) < 0)
            $node->left = $this->insertRec($node->left, $title);
        elseif (strcasecmp($title, $node->title) > 0)
            $node->right = $this->insertRec($node->right, $title);
        return $node;
    }

    public function display($node) {
        if ($node) {
            $this->display($node->left);
            echo "📖 " . $node->title . "<br>";
            $this->display($node->right);
        }
    }

    public function search($title) {
        return $this->searchRec($this->root, $title);
    }

    private function searchRec($node, $title) {
        if ($node === null) return false;
        if (strcasecmp($title, $node->title) == 0) return true;
        return (strcasecmp($title, $node->title) < 0)
            ? $this->searchRec($node->left, $title)
            : $this->searchRec($node->right, $title);
    }
}

$tree = new BookTree();
$bookTitles = [
    "A Brief History of Time", "Being and Nothingness", "Form, Space, and Order",
    "Man’s Search for Meaning", "The Nicomachean Ethics", "The Art of Computer Programming"
];
foreach ($bookTitles as $title) {
    $tree->insert($title);
}

/*

Example Output (In-order Display):

📖 A Brief History of Time
📖 Being and Nothingness
📖 Form, Space, and Order
📖 Man’s Search for Meaning
📖 The Art of Computer Programming
📖 The Nicomachean Ethics


Example Search:
$tree->search("Man’s Search for Meaning") ➜ true
$tree->search("Harry Potter") ➜ false

*/
?>
