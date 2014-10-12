<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

        <?php
        
             if(isset($_POST['postIt'])){
                 
                $connection = mysql_connect('localhost', 'root','') or die('Could not connect: ' . mysql_error());
                mysql_select_db('v2adventures') or die('Could not select database');
                
                $did = NULL; //update          
                $dtitle = $_POST['dtitle']; //insert; correct the name at writeDiary
                $ddt = NULL; //timestapm                
                
                $phid = NULL;
                $phurl =  $_POST['phurl']; //update
                $phdt = NULL; //timestamp
                
        $ucountry = $_POST['ucountry'];
        $username = $_POST['username'];
        $upass = $_POST['upass'];
             }
             
             else{
                print("Post Diary is not clicking!");
            }               
        ?>
   