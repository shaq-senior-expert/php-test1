<?php

// Define a User class with three private properties firstName, lastName and email

class User {
  private $firstName;
  private $lastName;
  private $email;

  // Define a method setFirstName that accepts a parameter $firstName and sets the firstName property to it, then returns $this
  public function setFirstName($firstName) {
    $this->firstName = $firstName;
    return $this;
  }

  // Define a method setLastName that accepts a parameter $lastName and sets the lastName property to it, then returns $this
  public function setLastName($lastName) {
    $this->lastName = $lastName;
    return $this;
  }

  // Define a method setEmail that accepts a parameter $email and sets the email property to it, then returns $this
  public function setEmail($email) {
    $this->email = $email;
    return $this;
  }

  // Define a magic method __toString that returns a formatted string representation of the object
  public function __toString() {
    return sprintf('%s %s <%s>', $this->firstName, $this->lastName, $this->email);
  }
}

// Create a new User object
$user = new User();

// Chain method calls to set the properties of the object
$user->setFirstName('John')
  ->setLastName('Doe')
  ->setEmail('john.doe@example.com');

// Print the object, which calls the __toString method and outputs the formatted string
echo $user; // Output: John Doe <john.doe@example.com>

?>