<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

    <?php 
        if(isset($_POST['login'])){
            
            $connection = mysql_connect('localhost', 'root','') or die('Could not connect: ' . mysql_error());
            mysql_select_db('v2adventures') or die('Could not select database');
            
            $username = $_POST['username'];
            $upass = $_POST['upass'];
            
            $did = NULL;
            $vid = NULL;
            $phid = NULL;
            $cid = NULL;
        
            $logInUsersQ = 'SELECT  *
                            FROM    users
                            WHERE   username = "'.$username.'" AND upass = "'.$upass.'" ';
            $logInUsersQResult = mysql_query($logInUsersQ, $connection) or die(' $logInUsersQ: ' . mysql_error());
            
            $aboutUsersQ = 'SELECT  ufname, ulname, uage, ucity, ustate, ucountry
                            FROM    users
                            WHERE   username = "'.$username.'" AND upass = "'.$upass.'" ';
            $aboutUsersQResult = mysql_query($aboutUsersQ, $connection) or die(' $aboutUsersQ: ' . mysql_error());
            
            $countLogInUsersQResult = mysql_num_rows($logInUsersQResult);           
            if($countLogInUsersQResult==1){
                echo    '<html>';
                echo        '<body style="background-color: windowframe">';
                
                echo            '<form action="searchUsersPHP.php" method="POST">'; //need working
                echo                '<input type=text size=79 name="name" style="background-color: whitesmoke">';
                echo                '<input type=submit name="search" value="Search" style="background-color: skyblue">';
                echo            '</form>';
                
                echo            '<br><br>';
                
                echo            '<div style ="font:21px/31px Comic Sans MS;color:whitesmoke; hight:100px; float:left"><u> Hi, '.$username.'';
                echo            '</div>';                
                
                echo            '</u><br><br><br><br>';
                
                echo            '<div style ="background-color:lightblue; font:21px/31px Comic Sans MS;color:whitesmoke; border-radius:250px; width:150px; text-align:center; hight=100px"> About';                
                echo            '</div>';
                
                echo            '<div style="float: right">';
                echo                '<table width="400" border="5" align="right" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">';
                echo                    '<tr>';
                echo                        '<form method="post" action="writeDiaryPHP.php">';
                echo                            '<td>';
                echo                                '<table width="400" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">';
                echo                                    '<tr>';
                echo                                        '<td width="117">Diary Title</td>';                
                echo                                        '<td width="357"><input name="dtitle" type="text" id="dtitle" size="40" /></td>';
                echo                                    '</tr>';
                echo                                    '<tr>';
                echo                                        '<td valign="top">Comment</td>';                
                echo                                        '<td><textarea name="ct" cols="40" rows="3" id="ct"></textarea></td>';
                echo                                    '</tr>';
                echo                                    '<tr>';
                echo                                        '<td valign="top">';
                echo                                        '<label for="file">Attach Photo: </label>';
                echo                                        '<input type="file" name="phurl" accept="image/*">';
                echo                                    '</tr>';
                echo                                    '<tr>';
                echo                                        '<td valign="top">';
                echo                                        '<label for="file">Attach Video: </label>';
                echo                                        '<input type="file" name="vurl" accept="video/*">';
                echo                                    '</tr>';
                echo                                    '<tr>';
                echo                                        '<td>&nbsp;</td>';
                echo                                        '<td>&nbsp;</td>';
                echo                                        '<td><input type="submit" name="postIt" value="Post It" /> <input type="reset" name="clear" value="Clear" /></td>';
                echo                                    '</tr>';
                echo                                '</table>';
                echo                            '</td>';
                echo                        '</form>';
                echo                    '</tr>';
                echo                '</table>';                            
                echo            '</div>';                 
                
                echo            '<form action="$aboutUsersQResult" method="POST">';
                echo            '<table border="2" style="background-color:windowframe; border:skyblue 2px solid; float:left">';
                echo            '</form>';
                echo            '<br>';
                
                                while($row = mysql_fetch_array($aboutUsersQResult)){
                echo                '<tr>';
                echo                '<td>' . $row['ufname'] . '</td>';
                echo                '<td>' . $row['ulname'] . '</td>';                            
                echo                '<td>' . $row['uage'] . '</td>';
                echo                '</tr>';
                echo                '<tr>';
                echo                '<td>' . $row['ucity'] . '</td>';                                
                echo                '<td>' . $row['ustate'] . '</td>';                               
                echo                '<td>' . $row['ucountry'] . '</td>';
                echo                '</tr>';
                                }
                echo            '</table>';
                echo            '<br><br><br><br><br>';
                echo            '<br><br>';                
                echo            '<div style ="background-color:lightblue; font:21px/31px Comic Sans MS;color:whitesmoke; border-radius:250px; width:150px; text-align:center; hight=100px"> Friends';
                echo            '</div>';
                echo            '<br><br>';
                echo            '<div style ="background-color:lightblue; font:21px/31px Comic Sans MS;color:whitesmoke; border-radius:250px; width:150px; text-align:center; hight=100px"> Photos';
                echo            '</div>';
                echo            '<br><br>';                
                echo            '<div style ="background-color:lightblue; font:21px/31px Comic Sans MS;color:whitesmoke; border-radius:250px; width:150px; text-align:center; hight=100px"> Videos';
                echo            '</div>';
                echo            '<br><br>';                
                echo            '<div style ="background-color:lightblue; font:21px/31px Comic Sans MS;color:whitesmoke; border-radius:250px; width:150px; text-align:center; hight=100px"> Locations';
                echo            '</div>';                
                echo            '<br><br>';                
                echo            '<div style ="background-color:lightblue; font:21px/31px Comic Sans MS;color:whitesmoke; border-radius:250px; width:150px; text-align:center; hight=100px"> Activities';
                echo            '</div>';
                echo            '<br><br>';                
                echo            '<div style ="background-color:lightblue; font:21px/31px Comic Sans MS;color:whitesmoke; border-radius:250px; width:150px; text-align:center; hight=100px"> Likes';
                echo            '</div>';
                echo        '</body>';
                echo    '</html>';
            }
            else{
                echo "WRONG USERNAME OR PASSWORD";
            }

        }
    ?>