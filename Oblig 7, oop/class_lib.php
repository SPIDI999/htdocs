<?php 

class Person {
    var $navn;
    var $alder;
    var $mobil;
    var $epost;

    function __construct($navn, $alder, $mobil, $epost) {
        $this->navn = $navn;
        $this->alder = $alder;
        $this->mobil = $mobil;
        $this->epost = $epost;
    }


    function get_navn(){
        return $this->navn;
    }

    function set_navn($navn){
        $this->navn = $navn;
    }
    

    function get_alder(){
        return $this->alder;
    }

    function set_alder($alder){
        $this->alder = $alder;
    }


    function get_mobil(){
        return $this->mobil;
    }

    function set_mobil($mobil){
        $this->mobil = $mobil;
    }


    function get_epost(){
        return $this->epost;
    }

    function set_epost($epost){
        $this->epost = $epost;
    }
}

class elev extends Person{
    private $studentnum;
    private $elevgruppe;
    private $kontaktlarer;

    function __construct($person_navn, $person_alder, $person_mobil, $person_epost, $studentnum, $elevgruppe, $kontaktlarer){
        $this->navn = $person_navn;
        $this->alder = $person_alder;
        $this->mobil = $person_mobil;
        $this->epost = $person_epost;
        $this->studentnum = $person_studentnum;
        $this->elevgruppe = $person_elevgruppe;
        $this->kontaktlarer = $person_kontaktlarer;
    }

    function set_studentnum($ny_studentnum){
        $this->studentnum = $ny_studentnum;
    }
    
    function set_elevgruppe($ny_elevgruppe){
        $this->elevgruppe = $ny_elevgruppe;
    }

    function set_kontaktlarer($ny_kontaktlarer){
        $this->kontaktlarer = $ny_kontaktlarer;
    }

    function get_studentnum(){
        return $this->studentnum;
    }

    function get_set_elevgruppe(){
        return $this->set_elevgruppe;
    }

    function get_kontaktlarer(){
        return $this->kontaktlarer;
    }
}

?>

<?php 


?>
