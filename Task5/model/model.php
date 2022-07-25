<?php 

require_once '../model/db_connect.php';

function showUser($id)
{
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `guest_user` where id = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } 
    catch (PDOException $e) 
    {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function addUser($data)
{
	$conn = db_conn();
    $selectQuery = "INSERT into user_info (name, username, password, email)
    VALUES (:name, :username, :password, :email)";
    try
    {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
        	':email' => $data['email'],
        	':username' => $data['username'],
        	':password' => $data['password'],
        	':image' => $data['image']
        ]);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function updateUser($id, $data)
{
    $conn = db_conn();
    $selectQuery = "UPDATE guest_user SET UserName = ?, Password = ? where id = ?";
    try
    {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        $data['username'], $data['password'], $id]);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    $conn = null;
    return true;
}

function updateProfile($id, $data)
{
    $conn = db_conn();
    $selectQuery = "UPDATE userinfo SET name = ?, email = ?, username = ?, address = ?, phone = ?, gender = ?, dob = ? where id = ?";
    try
    {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        $data['name'], $data['email'], $data['username'], $data['address'], $data['phone'], $data['gender'], $data['dob'], $id]);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    $conn = null;
    return true;
}

function deleteUser($id)
{
	$conn = db_conn();
    $selectQuery = "DELETE FROM `userinfo` WHERE `id` = ?";
    try
    {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    $conn = null;
    return true;
}