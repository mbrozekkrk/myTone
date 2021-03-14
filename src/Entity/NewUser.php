<?php


namespace App\Entity;


class NewUser
{

    protected $login;
    protected $password;
    protected  $choice;
    protected $skills;
    protected $addedSkills;

    /**
     * @return mixed
     */
    public function getAddedSkills()
    {
        return $this->addedSkills;
    }

    /**
     * @param mixed $addedSkills
     */
    public function setAddedSkills($addedSkills): void
    {
        $this->addedSkills = $addedSkills;
    }

    /**
     * @return mixed
     */
    public function getSkills()
    {
        return $this->skills;
    }

    /**
     * @param mixed $skills
     */
    public function setSkills($skills): void
    {
        $this->skills = $skills;
    }


    public function getLogin()
    {
        return $this->login;
    }


    public function setLogin($login): void
    {
        $this->login = $login;
    }


    public function getPassword()
    {
        return $this->password;
    }


    public function setPassword($password): void
    {
        $this->password = $password;
    }

    public function getChoice()
    {
        return $this->choice;
    }


    public function setChoice($choice): void
    {
        $this->choice = $choice;
    }


}