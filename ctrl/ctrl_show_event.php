<?php
    include './utils/connectBdd.php';
    include './model/model_event.php';
    include './manager/manager_event.php';
    include './view/show_all_event.php';

    $event = new ManagerEvent (null, null, null, null);
    $events = $event->showAllEvent($bdd);

    foreach($events as $value){
        $date = date("d/m/Y", strtotime($value->date_event));
        echo '           
            <div class="card">
                <div class="card-title">
                    <h4>'.$value->nom_event.'</h4>
                </div>
                <div class="card-body">
                    <p>
                        '.$value->desc_event.'
                    </p>
                </div>
                <div class="card-footer">
                    <p>
                        <span>'.$date.'</span><span>'.$value->name_type.'
                    </p>
                </div>
            </div>';
            
    }



?>