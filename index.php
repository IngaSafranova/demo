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
  <?php
  $MyBooks = [
    [
      'author' => 'J.K.Rowling',
      'name' => 'Philosopher`s stone',
      'character' => 'Harry Potter',
      'releaseYear' => 1997
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
  
  <ul>
    <?php
    foreach ($MyBooks as $book): ?>
      <?php if ($book['character'] === 'Charlie Parker'): ?>
        <li>
          <?= $book['name'] ?>
        </li>
      <?php endif ?>
    <?php endforeach ?>
  </ul>
  <?php
  function filterByYear($MyBooks, $Year)
  {
    $FilteredBooks = [];
    foreach ($MyBooks as $book) {
      if ($book['releaseYear'] === $Year) {
        $FilteredBooks[] = $book;
      }
    }
    return $FilteredBooks;
  }
  ?>
  <?php
  function filterByAuthor($MyBooks, $author)
  {
    $filteredBooks = [];
    foreach ($MyBooks as $book) {
      if ($book['author'] === $author) {
        $filteredBooks[] = $book;
      }
    }
    return $filteredBooks;
  }
  ?>
  <ul>
    <?php
    foreach (filterByAuthor($MyBooks, 'J.K.Rowling') as $book): ?>
      <li>
        <?= $book['name'] ?>
      </li>
    <?php endforeach; ?>
  </ul>
  <ul>
    <?php foreach (filterByYear($MyBooks, 2000) as $book): ?>
      <li>
        <?= $book['name'] ?>, released <?= $book['releaseYear'] ?>
      <?php endforeach; ?>
    </li>
  </ul>

  <!-- Lambda functions and refactoring -->
  <?php
  $filterByAuthor = function ($MyBooks, $author) {
    $filteredBooks = [];
    foreach ($MyBooks as $book) {
      if ($book['author'] === $author) {
        $filteredBooks[] = $book;
      }

    }
    return $filteredBooks;
  };

   $filteredBooks = $filterByAuthor($MyBooks, 'J.Connolly');
 
  ?>
  <h4>Filtered Books</h4>
  <ul>
    <?php foreach ($filteredBooks as $book): ?>
      <li> book
        <?= $book['name']; ?>

      </li>
    <?php endforeach; ?>
  </ul>

  <!-- Refactoring -->
  <?php
 function filter ($items, $key, $value) {
    $filteredItems = [];
    foreach ($items as $item) {
      if ($item[$key] === $value) {
        $filteredItems[] = $item;
      }

    }
    return $filteredItems;
  };

  $filteredBooks = filter($MyBooks,'author','J.K.Rowling');
  ?>
  <ul>
    <?php foreach ($filteredBooks as $book): ?>
      <li> book
        <?= $book['name']; ?>
  
      </li>
    <?php endforeach; ?>
  </ul>
  <?php 
  // function filterItems ($items, $fn) {
  //   $filteredItems = [];
  //   foreach ($items as $item) {
  //     if ($fn($item)) {
  //       $filteredItems[] = $item;
  //     }

  //   }
  //   return $filteredItems;
  // };

  // $filteredBooks = filterItems($MyBooks, function ($book) {
  //   return $book['releaseYear'] < 2000;
  // });
  ?>
  <?php 
  // function array_filter($items, $fn)
  // {
  //   $filteredItems = [];
  //   foreach ($items as $item) {
  //     if ($fn($item)) {
  //       $filteredItems[] = $item;
  //     }

  //   }
  //   return $filteredItems;
  // }
  // ;

  $filteredBooks = array_filter($MyBooks, function ($book) {
    return $book['releaseYear'] < 2000 && $book['author'] === 'J.K.Rowling';
  });
  ?>
  <h4>Refactored Books</h4>
  <ul>
    <?php foreach($filteredBooks as $book): ?>
      <li>
        <?= $book['name'] ?>
      </li>
      <?php endforeach; ?>
  </ul>
</body>

</html>