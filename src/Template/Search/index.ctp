<?php foreach($queryResultUsers as $user) {
  echo('<p> Utilisateurs :');
  echo($user['first_name']);
  echo(' ');
  echo($user['last_name']);
  echo('</p>');
}
foreach($queryResultEvents as $event) {
  echo('<p> Evenements :');
  echo($event['titre']);
  echo(' ');
  echo($event['description']);
  echo('</p>');
} ?>
