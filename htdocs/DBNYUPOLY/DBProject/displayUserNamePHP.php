<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    
    if (isset($_POST['login'])){
        
        $connection = mysql_connect('localhost', 'root','') or die('Could not connect: ' . mysql_error());
        mysql_select_db('v2adventures') or die('Could not select database');
        
        $username = $_POST['username'];
        
        $displayUserNameQ = 'SELECT username
                             FROM   users
                             WHERE  username = "'.$username.'" ';
                                 
        $displayUserNameQResult = mysql_query($displayUserNameQ, $connection) or die (' displayUserNameQ: ' . mysql_error());
        
    }
?>

