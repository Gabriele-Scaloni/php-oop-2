<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack-php</title>
</head>
<body>
    
    <!--   Definire classe Persona:
    *          - ATTRIBUTI (private):
    *              - nome
    *              - cognome
    *              - dataNascita (stringa)
    *          - METODI:
    *              - costruttore che accetta nome e cognome
    *              - setter/getter per ogni variabile
    *              - printFullPerson: che stampa "nome cognome: dataNascita"
    *              - toString: che ritorna "nome cognome: dataNascita"
    *      Definire classe Employee che eredita da Persona:
    *          - ATTRIBUTI (private):
    *              - stipendio
    *              - dataAssunzione
    *          - METODI:
    *              - costruttore che accetta nome, cognome e stipendio
    *              - setter/getter per variabili 
    *              - printFullEmployee: che stampa "nome cognome: stipendio (dataAssunzione)"
    *              - toString: che ritorna "nome cognome: stipendio (dataAssunzione)" -->
   
    <?php

        class Persone {

            private $name;
            private $surname;
            private $dataNascita;
    
            public function __construct($name, $surname, $dataNascita) {
    
                $this->name = $name;
                $this->surnname = $surname;
               
            }

            public function getName()
            {
                return $this->name; 
            }
            public function setName($name)
            {
                return $this->$name; 
            }
            public function getSurname()
            {
                return $this->surname; 
            }
            public function setSurname($surname)
            {
                return $this->$surname; 
            }
            public function getdataNascita() {
                return $this-> $$dataNascita;
            }
            public function setdataNascita($dataNascita) {
                $this->dataNascita = $dataNascita;
            }
            public function printFullPerson() {
                return $this->getName()
                . $this->getSurname()
                . $this->getdataNascita();
            }


            public function __toString() {
    
                return "name: " . $this->name . "<br>" 
                    . "surname: " . $this->surname . "<br>"
                    ."data di nascita: " . $this->dataNascita;;    
            }
        }  

        $p1 = new Persone("Gabriele", "Scaloni", "16-05-1993");
        echo "Persone:<br>" . $p1 
            . "<br>- - - - - - - - - - - - -<br>";
    
        class Employee extends Persone {
            
        }

        $dipendente2 = new Employee("Franco", "Bianchi", "123");

        echo "Dipendente: <br>" . $dipendente2;
    
    ?>
    
</body>
</html>
