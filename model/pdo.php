
<?php
// kết nối cơ sở dữ liệu
function get_connection(){
    $dburl = "mysql:host=localhost;dbname=dam;charset=utf8";
    $username = 'root';
    $password = '';
    $conn = new PDO($dburl, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
}

// thực thi câu lệnh thao tác dữ liệu( insert, update, delete)
function pdo_execute($sql){
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $conn = get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
    } catch (PDOException $e){
        throw $e;
    } finally {
        unset($conn);
    }
}

// truy vấn dữ liệu select
function pdo_query($sql){
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $conn = get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $rows = $stmt->fetchAll();
        return $rows;
    } catch (PDOException $e){
        throw $e;
    } finally {
        unset($conn);
    }
}

// Thực thi câu lệnh sql truy vấn một bản ghi
function pdo_query_one($sql){
    $sql_args = array_slice(func_get_args(), 1);
    try{
        $conn = get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}

// Thực thi câu lệnh sql truy vấn một giá trị
function pdo_query_value($sql){
    $sql_args = array_slice(func_get_args(), 1);
    try{
        $conn = get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return array_values($row)[0];
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}

?>

