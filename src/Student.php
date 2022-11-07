<?php

namespace App;

class Student extends User
{
    private $stipendiya;
    private $kurs;

    public function getStipendiya()
    {
        return $this->stipendiya;
    }
    public function setStipendiya($stipendiya)
    {
        $this->stipendiya = $stipendiya;
    }
    public function getKurs()
    {
        return $this->kurs;
    }
    public function setKurs($kurs)
    {
        $this->kurs = $kurs;
    }
}