<?php
/**
 * @author Naru Koshin
 * @Github https://github.com/narukoshin
 */
class Users {
    /**
     * Storing the user list
     * 
     * @var array $userList
     */
    public array $userList = [];
    /**
     * Adding a new user to the list
     * 
     * @param string|array $user
     * @return void
     */
    public function add($user){
      if (is_array($user)){
        // Adding multiple users to the array.
        $this->userList = array_merge($this->userList, $user);
        // Stoping there.
        return;
      }
      // Adding one user to the array.
      if (!preg_match("/^[a-zA-Z\s]+$/", $user)){
        return "Special characters are not allowed.";
      }
      array_push($this->userList, $user);
    }
    /**
     * Returning the last name of the last user sorted by the first name
     * 
     * @return string
     */
    public function getSpecialUser(){
        $users = $this->userList;
        asort($users);
        $last_user = end($users);
        $user = explode(" ", $last_user);
        return end($user);
    }
}

$users = new Users;
$users->add('Terrell Irving');
$users->add('Magdalen Sara Tanner');
$users->add('Chad Niles');
$users->add(['Mervin Spearing', 'Dean Willoughby', 'David Prescott']);
print_r($users->userList);
print_r($users->getSpecialUser()); // Irving

// $users = new Users();
// $users->add('Andre Garfield');
// $users->add('Magdalen Sara Tanner');
// $users->add('Chad Niles');
// $users->add(['Mervin Spearing', 'Dean Willoughby', 'David Prescott']);
// print_r($users->getSpecialUser());

// $users = new Users();
// $users->add('Zzzzz Aaaaa');
// $users->add('Magdalen Sara Tanner');
// $users->add('Chad Niles');
// $users->add(['Mervin Spearing', 'Dean Willoughby', 'David Prescott']);
// print_r($users->getSpecialUser());

// $users = new Users();
// $users->add('#234 @#a');
// $users->add('Magdalen Sara Tanner');
// $users->add('Chad Niles');
// $users->add(['Mervin Spearing', 'Dean Willoughby', 'David Prescott']);
// print_r($users->getSpecialUser());