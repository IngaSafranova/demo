<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    body{
      display: grid;
      place-items: center;
    }
    h2{
      color:blue;
    }
  </style>
  <title>Demo</title>
</head>
<body>
  <h1>
    <!-- Writing string and concantenating -->
    <?php
    echo "Hello,".'World';
    $name = 'Inga';
    echo 'My name is'. " ".$name;
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
    if($read){
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
  foreach($books as $book) : ?>
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
    'name'=> 'Jane',
    'surname'=> 'Johnson',
    'email'=> 'jj@gmail.com'
  ],
  [
    'name'=> 'Mark',
    'surname'=> 'Dork',
    'email'=> 'md@gmail.com'
  ]
]
?>
<h3>People info</h3>

<ul>
  <?php foreach ($people as $person) : ?>
    <a href='<?= $person['email'] ?>'>
<li>
 
  <?= $person['name'] ?>
 
  <?php endforeach; ?>
</li> 
</a>
</ul>
</body>
</html>