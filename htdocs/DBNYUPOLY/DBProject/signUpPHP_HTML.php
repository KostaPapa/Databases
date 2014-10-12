<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    if (isset($_POST['signup'])){
        
        $connection = mysql_connect('localhost', 'root','') or die('Could not connect: ' . mysql_error());
        mysql_select_db('v2adventures') or die('Could not select database');
        
        $ufname = $_POST['ufname'];
        $ulname = $_POST['ulname'];
        $uage = $_POST['uage'];
        $ucity = $_POST['ucity'];
        $ustate = $_POST['ustate'];
        $ucountry = $_POST['ucountry'];        
        $username = $_POST['username'];
        $upass = $_POST['upass'];
        
        $signUpUsersQ = 'INSERT INTO users (ufname, ulname, uage, ucity, ustate, ucountry, username, upass)
                         VALUES ("'.$ufname.'","'.$ulname.'","'.$uage.'","'.$ucity.'","'.$ustate.'","'.$ucountry.'","'.$username.'","'.$upass.'")';
        $signUpUsersQResult = mysql_query($signUpUsersQ, $connection) or die(' signUpUsersQ: ' . mysql_error());
        
        
        $updateDiaryContentsUserNameQ = 'INSERT INTO diarycontents (username)
                                         VALUES ("'.$username.'")';
        $updateDiaryContentsUserNameQResult = mysql_query($updateDiaryContentsUserNameQ, $connection) or die(' updateDiaryContentsUserNameQ: ' . mysql_error());
        
        
        $updateFriendsUserNameQ = 'INSERT INTO friends (username)
                                         VALUES ("'.$username.'")';
        $updateFriendsUserNameQResult = mysql_query($updateFriendsUserNameQ, $connection) or die(' $updateFriendsUserNameQ: ' . mysql_error());
        
        
        $updateLikesUserNameQ = 'INSERT INTO likes (username)
                                         VALUES ("'.$username.'")';
        $updateLikesUserNameQResult = mysql_query($updateLikesUserNameQ, $connection) or die(' $updateLikesUserNameQ: ' . mysql_error());
        
        
        $updateProfilesUserNameQ = 'INSERT INTO profiles (username)
                                         VALUES ("'.$username.'")';
        $updateProfilesUserNameQResult = mysql_query($updateProfilesUserNameQ, $connection) or die(' $updateProfilesUserNameQ: ' . mysql_error());

        
        $updateRequestsUserNameQ = 'INSERT INTO requests (username)
                                         VALUES ("'.$username.'")';
        $updateRequestsUserNameQResult = mysql_query($updateRequestsUserNameQ, $connection) or die(' $updateRequestsUserNameQ: ' . mysql_error());
                
    }
 ?>

<html>
    <body style="background-color: windowframe">
        <form action="searchUsersPHP.php" method="POST">
            <input type=text size=79 name="name" style="background-color: whitesmoke">
            <input type=submit name="search" value="Search" style="background-color: skyblue">
        </form>
    </body>
</html>
