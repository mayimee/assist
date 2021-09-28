<?php

// Use to fetch product data
class Product
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    // fetch product data using getData Method
    public function getData(){
        $result = $this->db->con->query("SELECT * FROM service");
       

        $resultArray = array();
       
        // fetch product data one by one
        while ($service = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $service;
            
        }

        return $resultArray;
    }

    // get product using service id
    public function getProduct($service_id = null){
        if (isset($service_id)){
            $result = $this->db->con->query("SELECT * FROM service WHERE service_id={$service_id}");

            $resultArray = array();

            // fetch product data one by one
            while ($service = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $resultArray[] = $service;
            }

            return $resultArray;
        }
    }

}