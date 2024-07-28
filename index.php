<!DOCTYPE html>
<html lang="en">

<head>
  <style>
    body {
      display: grid;
      place-items: center;
    }

    h2 {
      color: blue;
    }
  </style>
  <title>Demo</title>
</head>

<body>
  <h1>
    <!-- Writing string and concantenating -->
    <?php
    echo "Hello," . 'World';
    $name = 'Inga';
    echo 'My name is' . " " . $name;
    echo "My name is $name";
    echo 'My name is $name'
      ?>
    <?php
    echo 'how are you?'
      ?>
  </h1>
  <!-- making variables and if statement -->
  <?php
  $name = 'Grufallo';
  $read = false;
  if ($read) {
    $message = "You have read $name";
  } else {
    $message = "You have Not read $name";
  }
  ?>
  <h2>
    You have read <?php echo $name ?>
  </h2>
  <h3>
    <?php echo $message ?>
    <?= $message ?>
  </h3>
  <!-- Arrays -->
  <?php
  $books = ['Gruffalo', 'Hail Mary', 'Mercy']
    ?>
  <h3>Favorite books</h3>
  <ul>
    <?php
    foreach ($books as $book): ?>
      <li>
        <?= $book ?>
      <?php endforeach; ?>
    </li>
    <!-- <li>'Grufallo'</li> -->
    <!-- <li>'Hail Mary'</li> -->
    <!-- <li>'Mercy'</li> -->
  </ul>
  <!-- Associative Arrays -->

  <?php
  $people = [
    [
      'name' => 'Jane',
      'surname' => 'Johnson',
      'email' => 'jj@gmail.com'
    ],
    [
      'name' => 'Mark',
      'surname' => 'Dork',
      'email' => 'md@gmail.com'
    ]
  ]
    ?>
  <h3>People info</h3>

  <ul>
    <?php foreach ($people as $person): ?>
      <a href='<?= $person['email'] ?>'>
        <li>

          <?= $person['name'] ?>

        <?php endforeach; ?>
      </li>
    </a>
  </ul>

  <!-- Functions and Filters -->
  <h3>My Books</h3>
  <?php
$MyBooks = [
  [
    'author'=> 'J.K.Rowling',
    'name'=> 'Philosopher`s stone',
    'character'=> 'Harry Potter',
    'releaseYear'=> 1997
  ],
  [
      'author' => 'J.K.Rowling',
      'name' => 'Chamber of Secrets',
      'character' => 'Harry Potter',
      'releaseYear' => 1998
  ],
  [
      'author' => 'J.K.Rowling',
      'name' => 'Prisoner of Azkaban',
      'character' => 'Harry Potter',
      'releaseYear' => 1999
  ],
  [
      'author' => 'J.Connolly',
      'name' => 'Every dead thing',
      'character' => 'Charlie Parker',
      'releaseYear' => 1999
  ],
  [
      'author' => 'J.Connolly',
      'name' => 'Dark Hollow',
      'character' => 'Charlie Parker',
      'releaseYear' => 2000
  ]
]
  ?>
  <ul>
  <?php 
  foreach ($MyBooks as $book): ?>
  <?php if($book['character'] === 'Charlie Parker'): ?>
  <li>
<?= $book['name'] ?>
  </li>
<?php endif ?>
  <?php endforeach ?>
  </ul>
  <?php 
  function filterByAuthor($MyBooks,$author){
    $filteredBooks = [];
    foreach($MyBooks as $book){
      if ($book['author'] === $author) {
        $filteredBooks[] = $book;
      }
      }
    return $filteredBooks;
    }
  ?>
  <ul>
    <?php 
    foreach(filterByAuthor($MyBooks,'J.K.Rowling' ) as $book): ?>
    <li>
      <?= $book['name']?>
    </li>
    <?php endforeach;  ?>
    </ul>
</body>

</html>