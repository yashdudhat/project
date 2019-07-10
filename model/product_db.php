<?php

function get_products_by_category($dept_id) {
    global $db;
    $query = 'SELECT * FROM emps
              WHERE emps.deptID = :dept_id
              ORDER BY empID';
    $statement = $db->prepare($query);
    $statement->bindValue(":dept_id", $dept_id);
        $statement->execute();
    $products = $statement->fetchAll();
    $statement->closeCursor();
    return $products;
}
//change $product_id to $dept_id and also change function name
function get_emp($emp_id) {
    global $db;
    $query = 'SELECT * FROM emps
              WHERE empID = :emp_id';
    $statement = $db->prepare($query);
    $statement->bindValue(":emp_id", $emp_id);
    $statement->execute();
    $product = $statement->fetch();
    $statement->closeCursor();
    return $product;
}
//change $product_id to $emp_id and change in function name
function delete_emp($emp_id) {
    global $db;
    $query = 'DELETE FROM emps
              WHERE empID = :emp_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':emp_id', $emp_id);
    $statement->execute();
    $statement->closeCursor();
}

?>