<html>
    <head>
        <title>BIRRD Hospital</title>
        
        <link rel="stylesheet" href="booking.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            
    </head>
    <body>
    
        <div class="bird1">
            <image height="100px" src="images/Screenshot 2024-01-01 174122.png"></image>
      <div class="location">
             <i class="material-icons" style="font-size:20px">place</i>
       <font size="4"> Location:</font>
             <select style="width: 300px; height: 40px;font-size: large;color: gray;">
                 <option style="font-size: large;color: gray;">Tirupati</option>
             </select>
            </div>
            <div class="Search">
             <i class="material-icons" style="font-size:20px">search</i>
             <font size="4"> Search:</font>
                 <input style="width: 300px; height: 40px; font-size: larger;" type="search" placeholder="Hospital">
             </div>
             
         <div class="returnhome"><a href="home.html"><font size="5">Home</font></a>/<font size="4">BirdsHospital</font></div>
        </div>
       

        <div class="booking1">
            <center>
            <br>
            <br>
            <br>
            <br><br>
            
                <table cellspacing="5px" border="2" align="center" style="height: auto; width: 500px; margin-top: 50px;">
    <form method="POST" action="http://localhost:4040/CSE(DS)21121A3256/reciept.php">
        <tr>
            <th colspan="2" style=" color: #fff; font-size: 54px;">
                <?php echo $_POST['hname']; ?>
            </th>
        </tr>
        <tr>
            <th style=" color: #fff;">Doctor</th>
            <h2><td><?php echo $_POST['Dname']; ?></h2>
                <input type="hidden" name="doctname" value="<?php echo $_POST['Dname']; ?>"></td>
        </tr>
        <tr>
            <th style=" color: #fff;">Specialization</th>
            <td><?php echo $_POST['sname']; ?>
                <input type="hidden" name="doctsp" value="<?php echo $_POST['sname']; ?>"></td>
        </tr>
        <tr>
            <th style=" color: #fff;">Appointment Date</th>
            <td><input type="date" name="date" id="date"></td>
        </tr>
        <tr>
            <th style=" color: #fff;">Appointment Time</th>
            <td><input type="time" name="time" id="time"></td>
        </tr>
        <tr>
            <th style=" color: #fff;">Fee</th>
            <td>$400</td>
        </tr>
        <tr>
            <th style=" color: #fff;">Patient Name</th>
            <td><input type="text" name="pname" id="pname"></td>
        </tr>
         <tr>
            <th style=" color: #fff;">Mobile number</th>
            <td><input type="number" name="pnum" id="pnum"></td>
        </tr>
        <tr>
            <th style=" color: #fff;">Gender</th>
            <td>
                <select name="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </td>
        </tr>
        <tr>
            <th style=" color: #fff;">Age</th>
            <td><input type="number" name="age" id="age"></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" style="background-color: #4caf50; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;"></td>
        </tr>
        <input type="hidden" name='hosn' value='<?php echo $_POST['hname']; ?>' >
    </form>
</table>

                
            </center>
            
        </div>
     
    
    </body>
</html>