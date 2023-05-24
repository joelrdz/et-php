<?php
  $players = [
    [
      'name' => 'Cristiano Ronaldo',
      'age' => 37,
      'country' => 'Portugal',
      'position' => 'striker',
    ],
    [
      'name' => 'David de Gea',
      'age' => 31,
      'country' => 'Spain',
      'position' => 'goalkeeper',
    ],
  ];

  foreach ($players as $player) {
    echo "Name: " . $player['name'] . '<br>' .
      "Age: " . $player['age'] . '<br>' .
      "Position: " . $player['position'] . '<br><hr>';
  }
?>
