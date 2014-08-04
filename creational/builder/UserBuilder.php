<?php

namespace DesignPatterns\Creational\Builder;

include_once 'User.php';

class UserBuilder
{
    /**
     * @var string
     */
    protected $firstName = '';

    /**
     * @var string
     */
    protected $lastName = '';

    /**
     * @var string
     */
    protected $gender;

    /**
     * @var string
     */
    protected $linkedinProfile = '';

    /**
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function setMale()
    {
        $this->gender = User::GENDER_MALE;
    }

    public function setFemale()
    {
        $this->gender = User::GENDER_FEMALE;
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @param string $linkedinProfile
     */
    public function setLinkedinProfile($linkedinProfile)
    {
        $this->linkedinProfile = $linkedinProfile;
    }

    /**
     * @return User
     */
    public function buildUser()
    {
        $user = new User();
        $user->setFirstName($this->firstName);
        $user->setLastName($this->lastName);
        $user->setGender($this->gender);
        $user->setLinkedinProfile($this->linkedinProfile);
        return $user;
    }
}