<?php

abstract class VehiculeFr_exercice2
{
    final public function demarrer(): string
    {
        return 'Demarrage :';
    }

    abstract public function carburant(): string;

    abstract public function nombreDeTestObligatoire(): int;

    public function afficherDetails(): void 
    {
        echo $this->demarrer() . '<br>';
        echo 'Carburant : ' . $this->carburant() .'<br>';
        echo ' Nombre de tests obligatoires : ' . $this->nombreDeTestObligatoire() .'<br>';
    }
}

final class Peugot_exercice2 extends VehiculeFr_exercice2 
{
    private const CARBURANT = 'Essence';
    private const TESTS_OBLIGATOIRES = 170;

    public function carburant(): string
    {
        return self::CARBURANT;

    }

    public function nombreDeTestObligatoire(): int 
    {
        return self::TESTS_OBLIGATOIRES;
    }

}

final class Renault_exercice2 extends VehiculeFr_exercice2
{
    private const CARBURANT = 'Diesel';
    private const TESTS_OBLIGATOIRES = 130;

    public function carburant(): string
    {
        return self::CARBURANT;
    }

    public function nombreDeTestObligatoire(): int
    {
        return self::TESTS_OBLIGATOIRES;
    }
}

$peugot_exercice2 = new Peugot_exercice2();
echo '<h3>PEUGEOT :</h3>';
$peugot_exercice2->afficherDetails();

$renault_exercice2 = new Renault_exercice2();
echo '<h3>RENAULT :</h3>';
$renault_exercice2->afficherDetails();
