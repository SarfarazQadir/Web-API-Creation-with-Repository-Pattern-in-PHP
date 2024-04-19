<?php

class Repository{

    private $db;

    public function __construct($db){
        $this->db = $db;
    }
    public function Data(){
        $query = "SELECT * FROM `hospital_details`";
        $result = mysqli_query($this->db,$query);
        $student = array();
        if($result){
        while($row = mysqli_fetch_assoc($result)){
            $student[] = array(
                'hospital_id' => $row['hospital_id'],
                'hospital_name' => $row['hospital_name'],
                'hospital_username' => $row['hospital_username'],
                'hospital_password' => $row['hospital_password'],
                'hospital_email' => $row['hospital_email'],
                'hospital_contact' => $row['hospital_contact'],
                'hospital_address' => $row['hospital_address'],
                'hospital_location' => $row['hospital_location'],
                'status' => $row['status'],
            );
        }
    }
    return $student;
    }
}



?>