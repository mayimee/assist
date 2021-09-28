<?php

// php cart class
class Cart
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    // insert into cart table
    public  function insertIntoCart($params = null, $table = "cart"){
        if ($this->db->con != null){
            if ($params != null){
                // "Insert into cart(user_id) values (0)"
                // get table columns
                $columns = implode(',', array_keys($params));

                $values = implode(',' , array_values($params));

                // create sql query
                $query_string = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table, $columns, $values);

                // execute query
                $result = $this->db->con->query($query_string);
                return $result;
            }
        }
    }

    // to get user_id and service_id and insert into cart table
    public  function addToCart($userid, $serviceid){
        if (isset($userid) && isset($serviceid)){
            $params = array(
                "user_id" => $userid,
                "service_id" => $serviceid
            );

            // insert data into cart
            $result = $this->insertIntoCart($params);
            if ($result){
                // Reload Page
                header("Location: " . $_SERVER['PHP_SELF']);
            }
        }
    }

    // delete cart service using cart service id
    public function deleteCart($service_id = null, $table = 'cart'){
        if($service_id != null){
            $result = $this->db->con->query("DELETE FROM {$table} WHERE service_id={$service_id}");
            if($result){
                header("Location:" . $_SERVER['PHP_SELF']);
            }
            return $result;
        }
    }

    // calculate sub total
    public function getSum($arr){
        if(isset($arr)){
            $sum = 0;
            foreach ($arr as $service){
                $sum += floatval($service[0]);
            }
            return sprintf('%.2f' , $sum);
        }
    }

    // get service_it of shopping cart list
    public function getCartId($cartArray = null, $key = "service_id"){
        if ($cartArray != null){
            $cart_id = array_map(function ($value) use($key){
                return $value[$key];
            }, $cartArray);
            return $cart_id;
        }
    }

    // Save for later
    public function saveForLater($service_id = null, $saveTable = "wishlist", $fromTable = "cart"){
        if ($service_id != null){
            $query = "INSERT INTO {$saveTable} SELECT * FROM {$fromTable} WHERE service_id={$service_id};";
            $query .= "DELETE FROM {$fromTable} WHERE service_id={$service_id};";

            // execute multiple query
            $result = $this->db->con->multi_query($query);

            if($result){
                header("Location :" . $_SERVER['PHP_SELF']);
            }
            return $result;
        }
    }


}