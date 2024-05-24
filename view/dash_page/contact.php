<?php
require_once 'database.php';

class Contact {
    static function select() {
        global $conn;
        $sql = "SELECT * FROM `databasecontactapp`";
        $result = $conn->query($sql);
        $arr = array();

        if ($result->num_rows > 0) {   
            while ($row = mysqli_fetch_assoc($result)) {
                foreach ($row as $key => $value) {
                    $arr[$key][]= $value;
                }
            }
        }
        return $arr;
    }
    static function insert($id, $no_hp, $owner) {
        global $conn;
        $sql = "INSERT INTO 'databasecontactapp'(id, no_hp, owner) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $id, $no_hp, $owner);
        $stmt->execute();
        $result = $stmt->affected_rows > 0? true : false;
        return $result;
    }
    static function update($id, $no_hp, $owner) {
        global $conn;
        $sql = "UPDATE INTO 'databasecontactapp'(id, no_hp, owner) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $id, $no_hp, $owner);
        $stmt->execute();
        $result = $stmt->affected_rows > 0? true : false;
        return $result;
    }
    static function delete($id) {global $conn;
        $sql = "DELETE INTO'databasecontactapp' WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $id);
        $stmt->execute();
        $result = $stmt->affected_rows > 0? true : false;
        return $result;}
    }

?>