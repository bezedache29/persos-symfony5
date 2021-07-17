<?php

namespace App\Entity;

class Arme {

    private $nom;
    private $image;
    private $description;
    private $degats;

    public static $armes = [];

    public function getNom()
    {
        return $this->nom;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getDegats()
    {
        return $this->degats;
    }

    public function setNom(String $nom)
    {
        $this->nom = $nom;
        return $this;
    }

    public function setImage(String $image)
    {
        $this->image = $image;
        return $this;
    }

    public function setDescription(String $description)
    {
        $this->description = $description;
        return $this;
    }

    public function setDegats(Int $degats)
    {
        $this->degats = $degats;
        return $this;
    }

    public function __construct(String $nom, String $image, String $description, Int $degats)
    {
        $this->setNom($nom);
        $this->setImage($image);
        $this->setDescription($description);
        $this->setDegats($degats);
        self::$armes[] = $this;
    }

    public static function creerArmes()
    {
        new Arme('épée', 'epee', 'Une superbe épée tranchante', 10);
        new Arme('arc', 'arc', 'Une arme à distance', 7);
        new Arme('hache', 'hache', 'Une arme ou un outil', 15);

        return self::$armes;
    }

    public static function afficherArmeParNom(String $nom)
    {
        foreach (self::$armes as $arme) {
            if (strtolower(str_replace("é", "e", $arme->getNom())) === strtolower($nom)) {
                return $arme;
            }
        }
    }
}