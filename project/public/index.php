<?php

declare(strict_types=1);

// autoload ici...

require_once __DIR__ . '/../src/Contract/IdentifiableInterface.php';
require_once __DIR__ . '/../src/Contract/ExportableInterface.php';
require_once __DIR__ . '/../src/Entity/Personne.php';
require_once __DIR__ . '/../src/Entity/Filiere.php';
require_once __DIR__ . '/../src/Entity/Etudiant.php';
require_once __DIR__ . '/../src/Entity/Enseignant.php';
require_once __DIR__ . '/../src/Service/PrinterService.php';



use App\Entity\Filiere;
use App\Entity\Etudiant;
use App\Entity\Enseignant;
use App\Service\PrinterService;

$fInfo = new Filiere(1, "Informatique");

$e1 = new Etudiant(null, "Sara", "sara@example.com", $fInfo);
$e2 = new Etudiant(null, "Youssef", "youssef@example.com", $fInfo);

$ens1 = new Enseignant(null, "Dr Karim", "karim@example.com", "Maitre de conferences");

$personnes = [$e1, $e2, $ens1];

$printer = new PrinterService();
$printer->printLabels($personnes);

echo PHP_EOL . "Export tableau (exemple) :" . PHP_EOL;
print_r($e1->toArray());
print_r($ens1->toArray());
