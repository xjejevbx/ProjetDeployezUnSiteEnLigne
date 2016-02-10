<?php 

if (isset($_POST['texteContact']) && isset($_POST['subjectContact']) && isset($_POST['nomContact']) && isset($_POST['emailContact']) && isset($_POST['nationalityContact'])) {
    $texteContact = htmlspecialchars($_POST['texteContact']);
    $subjectContact = htmlspecialchars($_POST['subjectContact']);
    $nomContact = htmlspecialchars($_POST['nomContact']);
    $emailContact = htmlspecialchars($_POST['emailContact']);
    $nationalityContact = htmlspecialchars($_POST['nationalityContact']);
    if (isset($_POST['residentContact'])){
        $msg = $subjectContact . "Mail de " . $emailContact . " resident dans la ville (nom : " . $nomContact . " nationalité : " . $nationalityContact . " vous dit : " . $texteContact;
    } else {
        $msg = $subjectContact . "Mail de " . $emailContact . " (nom : " . $nomContact . " nationalité : " . $nationalityContact . " vous dit : " . $texteContact;
    }
    $msg = wordwrap($msg,70);
	mail('xjejevbx@gmail.com', 'Message d\'un citoyen', $msg);
	
	header('Location: ../site/contact.php');
}
if (isset($_POST['nomActivit']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['dateActivit'])) {
    $dateActivit = htmlspecialchars($_POST['dateActivit']);
    $nomActivit = htmlspecialchars($_POST['nomActivit']);
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    
	$msg = $nom . " " . $prenom . " viens de s'inscrire à l'activitée " . $nomActivit . " qui commence le " . $dateActivit . ".";
	$msg = wordwrap($msg,70);
	
	mail('xjejevbx@gmail.com', "Inscription à une activitée", $msg);
	
	header('Location: ../site/actiDuMois.php');
}
?>