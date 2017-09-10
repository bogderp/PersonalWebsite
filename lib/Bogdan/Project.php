<?php
/**
 * Created by PhpStorm.
 * User: Bogdan
 * Date: 9/09/17
 * Time: 19:07
 */

namespace Bogdan;


class Project {

  private $id;		         ///< The internal ID for the project
  private $title;		       ///< Project name
  private $description; 	 ///< Description
  private $github; 	       ///< github source
  private $demo;	         ///< Demo link

  /**
   * Constructor
   * @param $row Row from the user table in the database
   */
  public function __construct($row) {
    $this->id = $row['id'];
    $this->title = $row['title'];
    $this->description = $row['description'];
    $this->github = $row['github'];
    $this->demo = $row['demo'];
  }

  /**
   * @return mixed
   */
  public function getId() {
    return $this->id;
  }

  /**
   * @return mixed
   */
  public function getTitle() {
    return $this->title;
  }

  /**
   * @return mixed
   */
  public function getDescription() {
    return $this->description;
  }

  /**
   * @return mixed
   */
  public function getGithub() {
    return $this->github;
  }

  /**
   * @return mixed
   */
  public function getDemo() {
    return $this->demo;
  }

}
