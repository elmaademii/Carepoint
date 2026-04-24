<?php

require_once __DIR__ . '/User.php';

class Doctor extends User{
    private $specialty;
    private $phone;
    private $experience;
    private $image;
    private $profileLink;

    public function __construct($name, $email, $role, $specialty, $phone, $experience, $image, $profileLink){
        parent::__construct($name, $email, $role);
        $this->specialty = $specialty;
        $this->phone = $phone;
        $this->experience = $experience
        $this->image = $image;
        $this->profileLink = $profileLink;
    }

    public function getSpecialty(){
        return $this->specialty;
    }

    public function getPhone(){
        return $this->phone;
    }

    public function getExperience(){
        return $this->experience;
    }

    public function getImage(){
        return $this->image;
    }

    public function getProfileLink(){
        return $this->profileLink;
    }

    public function getDoctorProfile(){
        return $this->getName() . " - " . $this->specialty . " - " . $this->experience;
    }
}
?>