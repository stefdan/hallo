<?php

require_once 'Adresse.php';

class Person
{
    protected $name = '';
    protected $email = '';
    protected $adresse;


    public function __construct(Array $daten = array())
    {
        $this->setDaten($daten);
        $this->setAdresse(new Adresse());
    }

    public function setDaten(array $daten)
    {
        // wenn $daten nicht leer ist, rufe die passenden Setter auf
        if ($daten) {
            foreach ($daten as $k => $v) {
                $setterName = 'set' . ucfirst($k);
                // pruefe ob ein passender Setter existiert
                if (method_exists($this, $setterName)) {
                    $this->$setterName($v); // Setteraufruf
                }
            }
        }
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getAdresse()
    {
        return $this->adresse;
    }

    public function setAdresse(Adresse $adresse)
    {
        $this->adresse = $adresse;
    }

    public function getStrasse()
    {
        return $this->adresse->getStrasse();
    }

    public function setStrasse($strasse)
    {
        $this->adresse->setStrasse($strasse);
    }

    public function getHausnummer()
    {
        return $this->adresse->getHausnummer();
    }

    public function setHausnummer($hausnummer)
    {
        $this->adresse->setHausnummer($hausnummer);
    }

    public function getPlz()
    {
        return $this->adresse->getPlz();
    }

    public function setPlz($plz)
    {
        $this->adresse->setPlz($plz);
    }

    public function getOrt()
    {
        return $this->adresse->getOrt();
    }

    public function setOrt($ort)
    {
        $this->adresse->setOrt($ort);
    }
}