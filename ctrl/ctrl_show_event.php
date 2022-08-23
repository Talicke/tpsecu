<?php
    include './utils/connectBdd.php';
    include './model/model_event.php';
    include './manager/manager_event.php';
    include './view/show_all_event.php';

    $event = new ManagerEvent (null, null, null, null);
    $events = $event->showAllEvent($bdd);

    foreach($events as $value){
        echo '<div>
            <p>'.$value->nom_event.'</p>
            <p>Description de l\'evenement : </p>
            <p>'.$value->desc_event.'</p>
            <p>Date de l\'evenement :</p>
            <p>'.$value->date_event.'</p>
            <p>Type d\'evenement : </p>
            <p>'.$value->name_type.'</p>
            </div>';
    }



?>