<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Collection</title>
    <link rel="stylesheet" type="text/css" href="bootstrap-4.2.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <form action="connection.php" method="POST">
        
            <h4>Patient Identifying Information</h4>
            <div class="row" style="padding-top: 30px;">
                <div class="col col-md-9">
            <label for="lname">Last Name:</label>
            <input type="text" id="lname" name="lname" placeholder="Last Name" required>

            <label for="fname">First Name:</label>
            <input type="text" id="fname" name="fname" value="" required>

            <label for="minitial">Middle Initial:</label>
            <input type="text" id="minitial" name="minitial" value="" required>
                    </div>
                    <div class="col col-md-3">
            <label for="dob"><b>Date of Birth:</b></label>
            <input type="date" id="dob" name="dob" value="" required>
        </div>
        </div>
            <br>

        <div class="row">
            <div class="col col-md-4">
            <label for="sex">Sex:</label>
            <select id="sex" name="sex" required>
                <option value="blank" selected></option>
                <option value="male">Male</option>
                <option value="female">Female</option>
              </select>
            
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" value="" required>
            </div>

            <div class="col col-md-5">
                <div class="row">
                    <label for="race">Race:</label>
                    <div class="one">
                        <input type="checkbox" name="white"  id="white" value="white" >
                        <label for="white">White</label>
                    </div>

                    <div class="one">
                        <input type="checkbox" name="black"  id="black" value="black">
                        <label for="black">Black</label>
                    </div>
                </div>
                <div class="row">
                    <div class="one">
                        <input type="checkbox" name="aspac"  id="aspac" value="aspac">
                        <label for="aspac">Asian/Pacific Islander</label>
                    </div>

                    <div class="one">
                        <input type="checkbox" name="unknown"  id="unknown" value="unknown">
                        <label for="unknown">Unknown</label>
                    </div>

                    <div class="one">
                        <input type="checkbox" name="other"  id="other" value="other">
                        <label for="other">Other:<input type="text"  id="othervalue" name="other" value=""></label>
                    </div>
                </div>
            </div>

            <div class="col col-md-3">
                <label for="ethnicity"><b>Hispanic or Latino:</b></label>
                <select id="ehnicity" name="ethnicity" required>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                    <option value="unknown">Unknown</option>
                </select>
            </div>
        </div>
            <br><br>
             
            <div class="row">
                <div class="col col-md-6">
            <label for="facility"><b>Facility:</b> (if hospitalized)</label><br><br>
            
                <label for="facilityname">Name:</label>
                <input type="text" class="" id="facilityname" name="facilityname" placeholder="Enter facility name"><br><br>
            
                <label for="fcity">City:</label>
                <input type="text" class="" id="fcity" name="fcity" placeholder="Enter city"><br><br>
                
                <label for="fcounty">County:</label>
                <input type="text" class="" id="fcounty" name="fcounty" placeholder="Enter county"><br><br>
            
                <label for="fstate">State:</label>
                <input type="text" class="" id="fstate" name="fstate" placeholder="Enter state" > 
            
                <label for="phonenumber">Phone Number:</label>
                <input type="tel" class="" id="phonenumber" name="phonenumber" placeholder="Enter phone number" >
                <br><br>
                <label for="record"><b>Medical Record #:</b></label>
                <input type="number" class="" id="record" name="record" placeholder="Enter medical record number" required  style="width: 50%;"><br><br>
            </div>
            <div class="col col-md-6">
                
            
                <label for="personaladdress"><b>Personal Address:</b></label><br><br>

                <label for="facilityname">Facility Name: (if applicable)</label>
                <input type="text" id="facilityname" name="facilityname" value=""><br><br>

                <label for="pstreet">Street:</label>
                <input type="text" id="pstreet" name="pstreet" value="" required><br><br>

                <label for="pcity">City:</label>
                <input type="text" id="pcity" name="pcity" value="" required><br><br>

                <label for="pcounty">County:</label>
                <input type="text" id="pcounty" name="pcounty" value="" required> 

                <label for="pstate">State:</label>
                <input type="text" id="pstate" name="pstate" value="" required><br><br>
            </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

    <?php
    // Include the connection.php file
    require_once("connection.php");
    ?>
</body>
</html>
