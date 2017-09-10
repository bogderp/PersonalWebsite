<?php
namespace Bogdan;

/**
 * Manage users in our system.
 */
class Projects extends Table {

  /**
   * Constructor
   * @param $site. The Site object
   */
  public function __construct(Site $site) {
    parent::__construct($site, "project");
  }

  /**
   * Get a user based on the id
   * @param $id ID of the user
   * @returns User object if successful, null otherwise.
   */
  public function get($id) {
    $sql =<<<SQL
SELECT * from $this->tableName
where id=?
SQL;

    $pdo = $this->pdo();
    $statement = $pdo->prepare($sql);

    $statement->execute(array($id));
    if($statement->rowCount() === 0) {
      return null;
    }

    return new Project($statement->fetch(\PDO::FETCH_ASSOC));
  }

  /**
   * Get a all projects
   * @returns Array of Project objects if successful, null otherwise.
   */
  public function all() {
    $sql =<<<SQL
SELECT * from $this->tableName
ORDER BY id
SQL;

    $pdo = $this->pdo();
    $statement = $pdo->prepare($sql);

    $statement->execute();
    if($statement->rowCount() === 0) {
      return null;
    }

    $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
    $return = array();

    foreach ($result as $project) {
      $return[] = new Project($project);
    }

    return $return;
  }

}
