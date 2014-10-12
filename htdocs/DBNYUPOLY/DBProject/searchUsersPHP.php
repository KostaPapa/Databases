<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
    
<?php
    
    if (isset($_POST['search'])){
        
        $connection = mysql_connect('localhost', 'root','') or die('Could not connect: ' . mysql_error());
        mysql_select_db('v2adventures') or die('Could not select database');
        
        $ufname = $_POST['ufname'];
        $ulname = $_POST['ulname'];
        
        $searchUsersQ = 'SELECT ufname, ulname
                         FROM   users
                         WHERE ufname = "'.$ufname.'" AND ulname = "'.$ulname.'" ';
        $searchUsersQResult = mysql_query($searchUsersQ, $connection) or die (' $searchUsersQ: ' . mysql_error());
        
    }
?>
