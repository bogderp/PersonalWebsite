<?php
/**
 * Function to localize our site
 * @param $site The Site object
 */
return function(Bogdan\Site $site) {
  // Set the time zone
  date_default_timezone_set('America/Detroit');
  $site->setEmail($_ENV['EMAIL']);
  $site->setRoot($_ENV['BASE_PATH']);
  $site->dbConfigure('pgsql:dbname=' . $_ENV['DB_NAME'] . ';host=' . $_ENV['DB_HOST'],
    $_ENV['DB_USER'],    // Database user
    $_ENV['DB_PASS']     // Database password
  );

};
