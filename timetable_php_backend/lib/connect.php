<?php
require_once './constant.php';
require_once './db.php';
switch ($_GET['action']) {
    case 'create_college':
        create_college($con);
        break;
    case 'create_course':
        create_course($con);
        break;
    case 'create_day':
        create_day($con);
        break;
    case 'create_department':
        create_department($con);
        break;
    case 'create_level':
        create_level($con);
        break;
    
    case 'create_time_table':
        create_time_table($con);
        break;
    case 'select_course':
        select_course($con);
        break;
    
    default:
        break;
}

function create_college($con){
    
    
    $insert = $con->query("INSERT INTO college VALUES('".$_POST['input_college']."',  '".$_POST['input_accr']."')");
    
    if ($insert === TRUE) {
echo "<script type= 'text/javascript'>alert('New record created successfully');    
    </script>";

} else {
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');
     </script>";
} 
    
}
function create_course($con){
        
    $insert = $con->query("INSERT INTO course VALUES('null', '".$_POST['txtDepart']."', '".$_POST['txtLevel']."', '".$_POST['input_course']."', '".$_POST['input_accr']."')");
    
    if ($insert === TRUE) {
        echo 1;
    }else{
        echo $con->error;
    }
}



function create_day($con){
    $insert = $con->query("INSERT INTO day VALUES('null', '".$_POST['input_day']."')");
    
    if ($insert === TRUE) {
        echo 1;
    }else{
        echo $con->error;
    }
}
function create_department($con){
    
            
            $insert = $con->query("INSERT INTO department VALUES('null', '".$_POST['txtCollege']."',  '".$_POST['input_depart']."')");
    
    if ($insert === TRUE) {
        echo 1;
    }else{
        echo $con->error;
    }
            
}
function create_level($con){
    
    $insert = $con->query("INSERT INTO level VALUES('null', '".$_POST['input_level']."')");
    
    if ($insert === TRUE) {
        echo 1;
    }else{
        echo $con->error;
    }
}

function create_time_table($con){
    
    $insert = $con->query("INSERT INTO time_table VALUES('null', '".$_POST['txtDepart']."', '".$_POST['txtDay']."', '".$_POST['txtLevel']."', '".$_POST['txtCourse']."', '".$_POST['starting_time']."', '".$_POST['ending_time']."')");
    
    if ($insert === TRUE) {
        echo 1;
    }else{
        echo $con->error;
    }
    
    
  
}

function select_course($con){
    
    $link_level = $con->query("SELECT * FROM course WHERE depart='".$_POST['txtDepart']."' AND level = '".$_POST['txtLevel']."' "); 
            
            
    ?>
    
            
            <select name="txtCourse" class="form-control" id="txtCourse" >
                    <option value="0">--Select College--</option>
                    
                    <?php
                    while($results=$link_level->fetch_array()){
                        ?>
                    <option value="<?php echo $results['course_acr']; ?>"> <?php echo $results['course_acr'];  ?></option>
                    
                    <?php
                    }
                    
                    ?>
                </select>
    <?php
    
}