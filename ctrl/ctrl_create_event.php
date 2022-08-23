<?php
    if(isset($_SESSION['id_role'])){
        if($_SESSION['id_role'] = 2){

    //import
    include './utils/connectBdd.php';
    include './model/model_event.php';
    include './model/model_type.php';
    include './manager/manager_event.php';
    include './manager/manager_type.php';
    include './view/view_create_event.php';
    //message 
    $message = "";   
    
    $type = new ManagerType (null, null);
    $types = $type->showAllType($bdd);

    

    foreach($types as $value){
        echo '<option value='.$value->id_type.'>'.$value->name_type.'</option>';
    }

    echo "
    </select>
    <p><input type='submit' value='Ajouter' name='create'></p>
    </form>";




    //test si le bouton submit est cliqué
    if(isset($_POST['create'])){
        //test si les champs sont remplis
        if($_POST['nom_event'] !="" AND $_POST['desc_event'] !=""){
            //sécurisation des variables POST
            $nom = cleanInput($_POST['nom_event']);
            $desc = cleanInput($_POST['desc_event']);
            $date = cleanInput($_POST['date_event']);
            $type = cleanInput($_POST['selectType']);
            //instancier l'objet
            $event = new ManagerEvent($nom, $desc, $date, $type);
            $event->createEvent($bdd);
            $message = mb_strtoupper($event->getNomEvent())." a été ajouté en BDD";
        }
        //test sinon les champs sont vides
        else{
            $message = 'Les champs sont vides';
        }
    }
    //test sinon le bouton n'est pas cliqué
    else{
        $message = 'Pour ajouter un evenement cliquez sur ajouter';
    }
    //affichage du message d'erreur
    echo $message;

    $type = new ManagerType (null, null);
    $types = $type->showAllType($bdd);



    }else{
        header('Location: /Tpsecu/');
    }
}
else{
    header('Location: /Tpsecu/');
}

?>