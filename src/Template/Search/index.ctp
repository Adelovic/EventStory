<?php 
foreach($queryResultUsers as $user) {
  echo '<li><a href="">';
  echo $user['first_name'] . " " . $user['last_name'];
  echo '</a></li>';
}
echo "<li role='separator' class='divider'></li>";
foreach($queryResultEvents as $event) {
  echo '<li><a href="">';
    echo $event['title'];
  echo '</a></li>';
} ?>
