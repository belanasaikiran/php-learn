<?php


$books = [
    [
        'name' => 'Do Andorids Dream of Electric Sheep',
        'author' => 'Philip k. Dick',
        'purchaseUrl' => 'http://example.com',
        'release_year' => '1968'
    ],
    [
        'name' => 'Project Hail Mary',
        'author' => 'Andy Weir',
        'purchaseUrl' => 'http://example.com',
        'release_year' => '2021'

    ],
    [
        'name' => 'The Martian',
        'author' => 'Andy Weir',
        'purchaseUrl' => 'http://example.com',
        'release_year' => '2011'

    ],
];

function filter($items, $fn)
{
    $filterItems = [];

    foreach ($items as $item) {
        if ($fn($item)) {
            $filterItems[] = $item;
        }
    }
    return $filterItems;
}

$filteredBooks = array_filter($books, function ($book) {
    return $book['release_year'] >= 2000;
});


require "index.view.php";