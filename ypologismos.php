<?php
    error_reporting(0);
    
    $pk_Error = $pev_Error = $bonus = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["pk"])) {
            $pk_Error = "Συμπλήρωσε ντε το ποσοστό του κόμματος";
            $edres = "";
        }
        else {
            $pk = $_POST["pk"];
            if (!preg_match("/^[0-9].*$/",$pk)) {
                $pk_Error = "Μόνο νούμερα και υποδιαστολή βάλε μεγάλε";
                $edres = "";
            }
            else if ($pk>100) {
                $pk_Error = "Καλά κατούρα και λίγο που πήρες και πάνω από 100%";
                $edres = "";
            }
            else if ($pk<3){
                $pk_Error = "Εσύ τώρα περιμένεις με <3% να πάρεις και έδρες;";
                $edres = "";
            }
        }
        
        
        if (empty($_POST["pev"])) {
            $pev_Error = "Συμπλήρωσε ντε το ποσοστό των κομμάτων που έμειναν εκτός βουλής";
            $edres = "";
        }        
        else {
            $pev = $_POST["pev"];
            if (!preg_match("/^[0-9].*$/",$pev)) {
                $pev_Error = "Μόνο νούμερα και υποδιαστολή βάλε μεγάλε";
                $edres = "";
            }  
            else if ($pev>=100) {
                $pev_Error = "Τι στο διάολο; Κανένα κόμμα δε μπήκε στη βουλή; Ποιός θα μας κυβερνήσει; ΑΑΑΑΑΑΑΑ!!";
                $edres = "";
            }            
        }
        
        
        if ($pk_Error=="" && $pev_Error=="" && $pk>28) {
            $bonus = "&nbsp;&nbsp;&nbsp;(+50 έδρες αν είναι πρώτο κόμμα)";
            $edres1 = ($pk*250)/(100-$pev);
            $edres = number_format($edres1, 0);   
            $edres2 = number_format($edres1, 3);
            $edres2 = "&nbsp;&nbsp;&nbsp;($edres2 για την ακρίβεια)";
        }
        else if ($pk_Error=="" && $pev_Error==""){
            $edres1 = ($pk*250)/(100-$pev);
            $edres = number_format($edres1, 0);  
            $edres2 = number_format($edres1, 3);
            $edres2 = "&nbsp;&nbsp;&nbsp;($edres2 για την ακρίβεια)";
        }

    }
?>
