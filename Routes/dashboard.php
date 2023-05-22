<?php
session_start();
if(!isset($_SESSION['userdata'])){
    header("location:../Routes/dashboard.php");
}


$userdata=$_SESSION['userdata'];
$groupsdata= $_SESSION['groupsdata'];

if($_SESSION['userdata']['status']==0){
    $status='<b style="color:red">Not Voted </b>';
}

else{
    $status='<b style="color:red">Voted </b>';
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-voteing dashboard</title>
    <link rel="stylesheet" href="../style/style2.css">
</head>

<body>

    <style>
        #backbtn {
            color: rgb(241, 241, 241);
            cursor: pointer;
            outline: none;
            margin: 10px 10px;
            padding: 10px 21px;
            border: 2px solid rgb(243, 242, 242);
            border-radius: 10px;
            font-size: 18px;
            background: none;
            font-weight: bold;
            float: right;
        }

        #backbtn:hover {
            color: rgb(252, 246, 246);
            border: 3px solid rgb(3, 3, 3);
            background-color: rgb(97, 198, 124);

        }

        #logoutbtn {

            color: rgb(247, 246, 246);
            cursor: pointer;
            outline: none;
            margin: 12px 10px;
            padding: 10px 21px;
            border: 2px solid rgb(253, 253, 253);
            border-radius: 10px;
            font-size: 18px;
            background: none;
            font-weight: bold;
            float: right;
        }

        #logoutbtn:hover {
            color: rgb(255, 255, 255);
            border: 2px solid rgb(0, 0, 0);
            background-color: rgb(97, 198, 124);


        }

        #profile {
            background-color: rgb(99, 180, 90);
            width: 30%;
            padding: 25px;
            float: left;

        }

        #group {
            background-color: rgb(99, 180, 90);
            width: 30%;
            width: 60%;
            padding: 25px;
            float: right;
        }

        #headerSection {
            background-color: rgb(128, 34, 34);
        }

        #votebtn {
            color: rgb(255, 255, 255);
            cursor: pointer;
            outline: none;
            margin: 12px 0;
            padding: 10px 21px;
            border: 3px solid rgb(249, 249, 249);
            border-radius: 10px;
            font-size: 20px;
            background: none;
            font-weight: bold;
            float: inline-end;
        }

        #votebtn:hover {
            color: rgb(255, 255, 255);
            border: 2px solid rgb(0, 0, 0);
            background-color: rgb(185, 27, 27);
        }

        #mp {
            padding: 10px;
        }

        #voted{
            padding: 5px;
            font-size: 15px;
            background-color: green;
            color:white;
            border-radius: 5px;
        }
        
    </style>

    <div id="mainSection">
       
            <nav id="navbar">
        <div id="logo">
            <img src="../image/img.png" alt="E-voteing">
        </div>
        <ul>
          <center>  <li class="item"><h2>Online Voting System</h2></li>   </center>
            <!-- <li> <a href="../Routes/into.php">  <button id="backbtn"></a> back</button></a>  </li> -->
            <li> <a href="../Routes/index.html"> <button id="logoutbtn"> logout</button>  </a> </li> 
              
               

           
        </ul>
    </nav>
        </center>
        <hr>

        <div class="mp">
            <div id="profile">
                <center> <img src="../uploads/<?php echo $userdata['photo'] ?> " height="200" weight="200" alt="photo">
                </center> <br> <br>
                <b>Name:</b>
                <?php echo $userdata['name'] ?> <br> <br>
                <b>Mobile:</b>
                <?php echo $userdata['mobile']?> <br> <br>
                <b>Address:</b>
                <?php echo $userdata['address']?> <br> <br>
                 <b>Status:</b>
                <?php echo $status?> <br> <br>
            </div>

            <div id="group">
                <?php
                    if($_SESSION['groupsdata']){
                               for($i=0;$i<count($groupsdata);$i++){
                                  ?>

                <div>
                    <img style="float: right;" src="../uploads/<?php echo $groupsdata[$i]['photo']?>" height="100"
                        width="100"></img>
                    <b>Group Name:
                        <?php echo $groupsdata[$i]['name']?>
                    </b> <br> <br>
                    <b>Votes:
                        <?php echo $groupsdata[$i]['votes']?>
                    </b> <br> <br> <br>

                    <form action="../api/vote.php" method="post">
                        <input type="hidden" name="gvotes" value="<?php echo $groupsdata[$i] ['votes'] ?>">
                        <input type="hidden" name="gid" value="<?php echo $groupsdata[$i] ['id'] ?>">
                        <?php
                        if($_SESSION['userdata']['status']==0){
                            ?>
                                 <input type="submit" name="votebtn" id="votebtn">
                                 <?php
                        }  
                        else{
                            ?>
                           <button disabled type="button" name="votebtn" id="voted" >voted </button>
                            <?php
                        }
                        ?>
                       
                    
                    </form>

                </div>
                    <hr>
                <?php
                         }
                         
                 }
                 else{
             
                 }
                 ?>
            </div>
        </div>

        



</body>

</html>