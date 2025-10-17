Digital Library Organizer

---

 Project Purpose

The **Digital Library Organizer** is a mini PHP system that simulates how a digital library manages its books and categories.  
This project demonstrates **Recursion**, **Hash Tables (Associative Arrays)**, and **Binary Search Trees (BST)** — three core programming and data structure concepts in PHP.

The purpose of this project is to help students:
- Understand how recursion works when navigating hierarchical folders.
- Learn how to efficiently store and access data using associative arrays (hash tables).
- Implement a binary search tree (BST) to search and organize books alphabetically.
- Strengthen problem-solving and logical thinking through hands-on PHP programming.

---

How to Run Each Part

Part I — Recursive Directory Display
File: `recursion.php`  
Description: Displays book categories and titles using a recursive function.  

How to Run:
1. Open `recursion.php` in your local PHP server (e.g., `http://localhost/php-foundations-datastructures-[YourName]/recursion.php`)
2. It will show the folder-like book category structure.

Example Output:

Philosophy 
Ethics 
The Nicomachean Ethics 
Groundwork of the Metaphysics of Morals 
Existentialism 
Being and Nothingness 
Man’s Search for Meaning 
Science & Technology 
Physics 
A Brief History of Time 
The Elegant Universe 
Computer Science 
Introduction to Algorithms 
The Art of Computer Programming

Part II — Hash Table for Book Details
File: `hashtable.php`  
Description: Uses associative arrays (hash tables) to store and retrieve book information like author, year, and genre.

How to Run:
1. Open `hashtable.php` in your browser.  
2. Change the `$title` variable or create an input to search for any book title.  
3. The system will return details if the book is found.

Example Output (Found):

 Book Found! Title: A Brief History of Time Author: Stephen Hawking Year: 1988 Genre: Science

Example Output (Not Found):

 Book not found in the library records.



Part III — Binary Search Tree (BST) for Book Titles
File: `bst.php`  
Description:*Implements a binary search tree to store and search book titles alphabetically.

How to Run:
1. Open `bst.php` in your local PHP server.
2. The file automatically inserts sample book titles into a BST.
3. You can modify the `$bookTitles` array or call the `search()` function to test searching.

Example Output (In-Order Traversal):

A Brief History of Time 
Being and Nothingness 
Form, Space, and Order 
Man’s Search for Meaning 
The Art of Computer Programming 
The Nicomachean Ethics

Example Search Results:

Searching for "The Art of Computer Programming": Found! Searching for "Inferno": Not Found.



Part IV — Integration (Optional Bonus)
File: `index.php`  
**Description:** Combines all three features into one interactive interface.  
Users can:
- View categories (recursion)
- View all book titles alphabetically (BST)
- Search for a specific book (Hash Table)

How to Run:
1. Start your local PHP server.
2. Open `index.php` in your browser (e.g., `http://localhost/php-foundations-datastructures-[YourName]/index.php`)
3. Use the buttons to display categories, view titles, or search for a book.

Example Interface:

[View Categories]  [ View All Titles]

Search Box: [ Enter Book Title ] [Search]

 Book Found! Title: A Brief History of Time Author: Stephen Hawking Year: 1988 Genre: Science


Files Included

| File Name       | Description 
| `recursion.php`  | Displays book categories using recursion 
| `hashtable.php`  | Stores and retrieves book data using associative arrays 
| `bst.php`        | Implements a binary search tree for alphabetical search 
| `index.php`      | Integrates all parts into one system 
| `style.css`      | Handles the website’s design and layout 
| `README.md`      | Contains project documentation 
