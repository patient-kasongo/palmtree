<?php

namespace App;

class Recu
{
    private $id;
    private $sommeChiffre;

    private $sommeLettre;

    private $date;

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @param mixed $sommeChiffre
     */
    public function setSommeChiffre($sommeChiffre): void
    {
        $this->sommeChiffre = $sommeChiffre;
    }

    /**
     * @param mixed $sommeLettre
     */
    public function setSommeLettre($sommeLettre): void
    {
        $this->sommeLettre = $sommeLettre;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date): void
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getSommeChiffre()
    {
        return $this->sommeChiffre;
    }

    /**
     * @return mixed
     */
    public function getSommeLettre()
    {
        return $this->sommeLettre;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }
    public function enregistrer(){

    }
    public static function convertirEnLettres($nombre)
    {
        $unites = [
            0 => 'zéro',
            1 => 'un',
            2 => 'deux',
            3 => 'trois',
            4 => 'quatre',
            5 => 'cinq',
            6 => 'six',
            7 => 'sept',
            8 => 'huit',
            9 => 'neuf',
            10 => 'dix',
            11 => 'onze',
            12 => 'douze',
            13 => 'treize',
            14 => 'quatorze',
            15 => 'quinze',
            16 => 'seize',
            20 => 'vingt',
            30 => 'trente',
            40 => 'quarante',
            50 => 'cinquante',
            60 => 'soixante',
            70 => 'soixante-dix',
            80 => 'quatre-vingt',
            90 => 'quatre-vingt-dix'
        ];
        if($nombre < 0 || $nombre > 999) {
            throw new InvalidArgumentException('Le nombre doit être compris entre 0 et 999.');
        }
        if ($nombre < 17) {
            return $unites[$nombre];
        }    if ($nombre < 20) {
        return 'dix-' . $unites[$nombre - 10];
    }
        if ($nombre < 70) {
            if ($nombre % 10 == 1) {
                return $unites[$nombre - 1] . '-et-' . $unites[1];
            } elseif ($nombre % 10 == 0) {
                return $unites[$nombre];
            } else {
                return $unites[$nombre - $nombre % 10] . '-' . $unites[$nombre % 10];
            }
        }
        if ($nombre < 80) {
            return $unites[60] . '-' . self::convertirEnLettres($nombre - 60);
        }
        if ($nombre < 90) {
            return $unites[80] . '-' . self::convertirEnLettres($nombre - 80);
        }
        if ($nombre < 100) {
            return $unites[90] . '-' . self::convertirEnLettres($nombre - 90);
        }
        if ($nombre == 100) {
            return 'cent';
        }
        if ($nombre < 200) {
            return 'cent-' . self::convertirEnLettres($nombre - 100);
        }
        if ($nombre < 1000) {
            if ($nombre % 100 == 0) {
                return $unites[intdiv($nombre,100)] . ' cents';
            } else {
                return $unites[intdiv($nombre,100)] . ' cent-' . self::convertirEnLettres($nombre % 100);
            }
        }
    }


}