<?php

class Manusia 
{
    protected $name;
    protected $nik = "123212131243243"; 
    protected $umur;

    public function getNama() 
    {
        return $this->name;
    }

    public function setNama($name) 
    {
        $this->name = $name;
    }

    private function getNIK() 
    {
        return "NIK: " . $this->nik;
    }

    public function tampilkanNIK() 
    {
        return $this->getNIK();
    }

    public function getUmur() 
    {
        return $this->umur;
    }

    public function setUmur($umur) 
    {
        $this->umur = $umur;
    }
}