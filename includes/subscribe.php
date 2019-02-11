<?php

function sendForm($fname,$lname,$email,$country){
    include('connect.php');

    //check if email exists
    $check_email_query = 'SELECT subs_email FROM tbl_subs WHERE subs_email = :subs_email';
    $email_set = $pdo->prepare($check_email_query);
    $email_set -> execute(
        array(
            ':subs_email' => $email
        )
    );

    $row = $email_set->fetch(PDO::FETCH_ASSOC);

    //if($email_set -> fetch() > 0){
    if(!empty($row['subs_email'])){
        $update_subs_query = 'UPDATE tbl_subs SET subs_last_update = NOW(), subs_fname = :fname, subs_lname = :lname, subs_country = :country WHERE subs_email = :email';
        $update_subs_set = $pdo->prepare($update_subs_query);
        $update_subs_set->execute(
            array(
                ':fname'=>$fname,
                ':lname'=>$lname,
                ':email'=>$email,
                ':country'=>$country
            )
        );

        /*$replace_email_query = 'REPLACE INTO tbl_subs(subs_fname,subs_lname,subs_email,subs_country,subs_last_update)';
        $replace_email_query .= ' VALUES(:fname,:lname,:email,:country,NOW())';
        $replace_email_set = $pdo->prepare($replace_email_query);
        $replace_email_set->execute(
            array(
                ':fname'=>$fname,
                ':lname'=>$lname,
                ':email'=>$email,
                ':country'=>$country
            )
        );*/

        /*$message = 'Email already in use';
        return $message;*/

    }else{
        $create_subs_query = 'INSERT INTO tbl_subs(subs_fname,subs_lname,subs_email,subs_country,subs_date)';
        $create_subs_query .= ' VALUES(:fname,:lname,:email,:country,NOW())';
        $create_subs_set = $pdo->prepare($create_subs_query);
        $create_subs_set->execute(
            array(
                ':fname'=>$fname,
                ':lname'=>$lname,
                ':email'=>$email,
                ':country'=>$country
            )
        );

        // updates the last login date and time
        /*date_default_timezone_set('America/Toronto');
        $update_date_query = 'UPDATE tbl_subs SET subs_date = NOW() WHERE subs_id = :id';
        $update_date_set = $pdo->prepare($update_date_query);
        $update_date_set->execute(
            array(
                ':id' => $id
            )
        );*/
    }

}

?>