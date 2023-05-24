<?php
  $names = [
    'John Petrucci',
    'Mike Mangini',
    'Jordan Rudess',
    'John Myung',
    'James LaBrie',
  ];

  $numberOfItems = count($names);
  // die(var_dump($numberOfItems));

  for ($i=0; $i < $numberOfItems; $i++) {
    echo $names[$i] . '<br>';
  }
?>
