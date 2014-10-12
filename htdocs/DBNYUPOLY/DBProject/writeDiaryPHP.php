 <?php                    
        
             if(isset($_POST['postIt'])){
                 
                $connection = mysql_connect('localhost', 'root','') or die('Could not connect: ' . mysql_error());
                mysql_select_db('v2adventures') or die('Could not select database');
                
                $username = ob_start(); include 'signUpPHP_HTML.php'; ob_end_clean(); $username;

                $did = rand(1,50);          
                $dtitle = $_POST['dtitle'];
                $ddt = NULL;                  
                
                $vid = rand(151,200);
                $vurl = $_POST['vurl'];
                $vdt = NULL;
                
                $phid = rand(101,150);
                $phurl = $_POST['phurl'];
                $phdt = NULL;                                
                
                $cid = rand(51,100);
                $ct = $_POST['ct'];
                $cdt = NULL;   
                
                $pid = rand(201,251);                                                
                
                
                $insertIntoDiariesQ = 'INSERT INTO diaries (did, dtitle)
                                       VALUES ("'.$did.'", "'.$dtitle.'")';
                $insertIntoDiariesQResult = mysql_query($insertIntoDiariesQ, $connection) or die(' $insertIntoDiariesQ: ' . mysql_error());
                
                
                $insertIntoVideosQ = 'INSERT INTO videos (vid, vurl)
                                      VALUES ("'.$vid.'", "'.$vurl.'")';
                $insertIntoVideosQResult = mysql_query($insertIntoVideosQ, $connection) or die(' $insertIntoVideosQ: ' . mysql_error());
                
                
                $insertIntoPhotosQ = 'INSERT INTO photos (phid, phurl)
                                      VALUES ("'.$phid.'", "'.$phurl.'")';
                $insertIntoPhotosQResult = mysql_query($insertIntoPhotosQ, $connection) or die(' $insertIntoPhotosQ: ' . mysql_error());
                
                
                $insertIntoCommentsQ = 'INSERT INTO comments (cid, ct)
                                      VALUES ("'.$cid.'", "'.$ct.'")';
                $insertIntoCommentsQResult = mysql_query($insertIntoCommentsQ, $connection) or die(' $insertIntoCommentsQ: ' . mysql_error());
                                                                
                
             }
             
             else{
                print("Post It is not clicking!");
            }
            
?>