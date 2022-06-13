<html>
<head>
    <link rel="stylesheet" type="text/css" href="../CSS/scholarship.css">
</head>

<body>


<div class="container">
    
    <form action="../PHP/scholar.php" method="post" >
            <h1>Student Scholarship Pridicting System</h1>
            <p>Please fill in this form to predict Student Scholarship.</p>
            <hr>
        <div class="info1">

        <h2>Personal Info</h2>

        <label for="last_name"><b>Last Name</b></label>
        <input type="text" placeholder="Enter Last Name" name="last_name"  required>

        <label for="first_name"><b>First Name</b></label>
        <input type="text" placeholder="Enter First Name" name="first_name"  required>

        <label for="suffix"><b>Suffix</b></label>
        <input type="text" placeholder="Ex.(SR,JR, etc...)" name="suffix"  >

        <label for="middle_name"><b>Middle Name</b></label>
        <input type="text" placeholder="Enter Middle Name" name="middle_name"  required>
        
        <label for="sex"><b>User Type</b></label>
        <select for="sex" class="user_type" name="sex" required>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        </select>

        <label for="age"><b>Age</b></label>
        <select for="age" class="user_type" name="age" required>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        </select>

        <label for="address"><b>Address</b></label>
        <input type="text" placeholder="Enter Address" name="address"  required>
  
        <label for="father"><b>Fathers Highest Educational Attainment</b></label>
        <select for="father" class="user_type" name="father" required>
        <option value="College">College</option>
        <option value="High School">High School</option>
        <option value="Elementary">Elementary</option>
        </select>

        <label for="mother"><b>Mother Highest Educational Attainment</b></label>
        <select for="mother" class="user_type" name="mother" required>
        <option value="College">College</option>
        <option value="High School">High School</option>
        <option value="Elementary">Elementary</option>
        </select>

        
        
        <hr>
        <!-- <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p> -->
        </div>

        <div class="info2">
        <h2>School Information</h2>

        <label for="shs"><b>Senior High Strand</b></label>
        <select for="shs" class="user_type" name="shs" required>
        <option value="STEM">STEM</option>
        <option value="GAS">GAS</option>
        <option value="ABM">ABM</option>
        <option value="HUMSS">HUMSS</option>
        <option value="TVL">TVL</option>
        </select>

        <label for="course"><b>Course</b></label>
        <select for="course" class="user_type" name="course" required>
        <option value="BSA">BS Architecture</option>
        <option value="BSIT">BS Information Technology</option>
        <option value="BSM">BS Mathematics</option>
        <option value="BSE">BS Education</option>
        <option value="ABE">AB English</option>
        <option value="BSCivilE">BS Civil Engineer</option>
        <option value="BSME">BS Mechanical Engineer</option>
        <option value="BSComputerE">BS Computer Engineer</option>
        <option value="BSEE">BS Electrical Engineer</option>
        </select>

        <label for="yrlvl"><b>Year Level</b></label>
        <select for="yrlvl" class="user_type" name="yrlvl" required>
        <option value="1st Year">1st Year</option>
        <option value="2nd Year">2nd Year</option>
        <option value="3rd Year">3rd Year</option>
        <option value="4th Year">4th Year</option>
        <option value="5th Year">5th Year</option>
        </select>


        <label for="sem"><b>Semester</b></label>
        <select for="sem" class="user_type" name="sem" required>
        <option value="First Semester">First Semester</option>
        <option value="Second Semester">Second Semester</option>
      
        </select>
  
        <label for="scholar"><b>Type of Scholarship</b></label>
        <select for="scholar" class="user_type" name="scholar" required>
        <option value="PROVINCIAL">PROVINCIAL</option>
        <option value="DOST">DOST</option>
      
        </select>

        <label for="GPA"><b>GPA</b></label>
        <input type="text" placeholder="Enter GPA" name="GPA"  required>
        <div>
        <input type="submit" name="calculate" value="Calculate" class="registerbtn">
        </div>
        <hr>
        <!-- <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p> -->

        
    </div>
       
    
    
    <!-- <div class="container signin">
        <p>Already have an account? <a href="#">Sign in</a>.</p>
    </div> -->

    </form>
    
</div>
</body>


</html>