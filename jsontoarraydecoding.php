
<?php
require 'conn.php';

$json = '{
    "title": "JavaScript: The Definitive Guide",
    "author": "David Flanagan",
    "edition": 6
}';
$book = json_decode($json);
// access title of $book object
echo $book->edition;
echo "\n";
 // JavaScript: The Definitive Guide 
echo $book->title;
echo "\n";
echo $book->author;
echo "\n";
$json = '["apple","orange","banana","strawberry"]';
$ar = json_decode($json);
// access first element of $ar array
echo $ar[0]; // apple
echo "\n";
$json = '{
    "title": "JavaScript: The Definitive Guide",
    "author": "David Flanagan",
    "edition": 6
}';
$book = json_decode($json, true);
// access title of $book array
echo $book['title']; 
echo "\n";
$json = '[
    {
        "title": "Professional JavaScript",
        "author": "Nicholas C. Zakas"
    },
    {
        "title": "JavaScript: The Definitive Guide",
        "author": "David Flanagan"
    },
    {
        "title": "High Performance JavaScript",
        "author": "Nicholas C. Zakas"
    }
]';

//$books = json_decode($json);
// access property of object in array
//echo $books[2]->title; // JavaScript: The Definitive Guide
$books = json_decode($json, true);
// numeric/associative array access
echo $books[0]['title'];
echo "\n";
for($i=0;$i<sizeof($books);$i++)
{
  echo $books[$i]['title'];
  echo "\n";
}
?>

