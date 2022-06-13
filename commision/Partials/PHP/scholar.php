<?php
if(isset($_POST['calculate'])){
    // Personal Info
    $age = $_POST['age'];

    // School Info
    $year_level = $_POST['yrlvl'];
    $semester = $_POST['sem'];
    $mother = $_POST['mother'];

    switch($age){
        case "19":
            $age =0.5265;
            break;
        case "20":
            $age =0.4474;
            break;
        case "21":
            $age =0.3710;
            break;
        case "22":
            $age =0.3005;
            break;
        case "23":
            $age =0.2383;
            break;
        default:
            echo "Invalid Age";
        break;
    }
    switch($year_level){
        case "1st Year":
            $year_level =-1.719;
            break;
        case "2nd Year":
            $year_level =1.504;
            break;
        case "3rd Year":
            $year_level =-0.268;
            break;
        case "4th Year":
            $year_level =0.9978;
            break;
        case "5th Year":
            $year_level =0.218;
            break;
        default:
            echo "Invalid Age";
        break;
    }

    switch($semester){
        case "First Semester":
            $semester = 0.665;
            break;
         case "Second Semester":
            $semester = 0.9978;
            break;
        default:
            echo "Invalid sem";
        break;
    }

    switch($mother){
        case "College":
            $mother = 0.9978;
            break;
        case "High School":
            $mother = 0.358;
            break;
        case "Elementary":
            $mother = 0.524;
            break;
        default:
            echo "Invalid mother";
        break;
        
    }
    // Computation
    
    $d1 = exp(6.129)+$age+$year_level+$semester+$mother;
    $d2 = 1 + exp(6.129)+$age+$year_level+$semester+$mother;

    $P=($d1/$d2)*100;
    
    echo $P;
}

?>