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
            private $surName;
            private $dataNascita;
    
            public function __construct($name, $surName) {
    
                $this->name = $name;
                $this->surName = $surName;
               
            }

            public function getName()
            {
                return $this->name; //MI PRENDE IL VALORE
            }
            public function setName($name)
            {
                $this->name = $name; //DO IL VALORE E LO UTILIZZO
            }
            public function getSurname()
            {
                return $this->surName; 
            }
            public function setSurname($surName)
            {
                $this->surName = $surName; 
            }
            public function getdataNascita() {
                return $this-> dataNascita;
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
                    . "surname: " . $this->surName . "<br>"
                    ."data di nascita: " . $this->dataNascita;
            }
        }  

        $p1 = new Persone("Gabriele", "Scaloni");
        $p1->setdataNascita("10-34-1222");
        echo "Persone:<br>" . $p1 
            . "<br>- - - - - - - - - - - - -<br>";
    
        class Employee extends Persone {

            private $salary;

            public function __construct($name, $surname, $stipendio){
            parent:: __construct($name, $surname); //ACCETTA SOLO 2 PARAMETRI, POTREI UTILIZZARE ANCHE SETNAME O SETSURNAME

                $this->salary = $stipendio; //non devono essere per forza uguali ma stipendio deve essere uguale al parametro sopra
            }
            public function __toString() {
    
                return "name: " . $this->getName(). "<br>" //uso il getname perchè ho i dati in private, se erano public bastava senza il metodo, solo l'attributo
                    . "surname: " . $this->getSurname() . "<br>"
                    ."salary: " . $this->salary;    
            }
        }

        $dipendente2 = new Employee("Franco", "Bianchi", "1500€");
        echo "Dipendente: <br>" . $dipendente2;
     
    ?>
    
</body>
</html>
