<?php 

 require_once '../lib/constant.php';
 require_once '../lib/db.php';



$link_course = $con->query("SELECT * FROM department"); 
$link_day = $con->query("SELECT * FROM day"); 
$link_level = $con->query("SELECT * FROM level"); 

    


?>

<div class="container-fluid" style="opacity: 0.9">
     <script type="text/javascript">
            
            function toggle(){
                
        var txtDepart = $('#txtDepart').val();
        var txtLevel = $('#txtLevel').val();
                
       $.post('./lib/connect.php?action=select_course',{txtDepart:txtDepart,txtLevel:txtLevel}, function(data, textStatus) {
           $('#selectCourse').html(data);
       });
                
                
            }
            
            
            $(document).ready(function (){
   
   
            
            
   
   
   
    
    $('#submit_course').click(function (){
        var txtDepart = $('#txtDepart').val();
        var txtDay = $('#txtDay').val();
        var txtLevel = $('#txtLevel').val();
        
        var txtCourse = $('#txtCourse').val();
        
           
        var starting_time = $('#starting_time').val();
        var ending_time = $('#ending_time').val();
       $.post('./lib/connect.php?action=create_time_table',{txtDepart:txtDepart, txtDay:txtDay,   txtLevel:txtLevel, txtCourse:txtCourse, starting_time:starting_time, ending_time:ending_time}, function(data, textStatus) {
    if(parseInt(data) === 1){
        
        alert("New record added");
    }else{
        alert(data);
    }
        });
    });
    
    
    
});
            
            </script>
    <div class="col-sm-5" >
        <form action="" method="post" enctype="multipart/form-data" id="form-user-group" class="form-horizontal">
<!--         <input type="hidden" name="id_all" value="<?php echo $select_It_All1['course_id']?>" />-->
         
         
         
         
            
            
         
         
            <div class="form-group ">
<label for="input_course" class="col-sm-5 control-label">Select Department:</label>
             
                <div class="col-sm-7">
                <select name="txtCollege" class="form-control" id="txtDepart" >
                    <option value="0">--Select Department--</option>
                                       
                    <?php
                    while ($row = $link_course->fetch_array()) {                        
                        ?>                        
             <option value="<?php echo $row['depart']; ?>"> <?php echo $row['depart'];?></option>                            
                        <?php
                    }                   
                    
                    ?>
                    
                </select>
                </div>                    
                
                       
          </div>
     
            
            <div class="form-group ">
<label for="txtDay" class="col-sm-5 control-label">Select Day:</label>
             
                <div class="col-sm-7">
                <select name="txtDay" class="form-control" id="txtDay" >
                    <option value="0">--Select Day--</option>
                    <?php
                    while ($row = $link_day->fetch_array()) {                        
                        ?>
                        
             <option value="<?php echo $row['day']; ?>"> <?php echo $row['day'];?></option>        
                    
                        <?php
                    }
                    
                    
                    ?>
                </select>
                </div>                    
                
                       
          </div>
            
            
            
            
            <div class="form-group ">
<label for="input_level" class="col-sm-5 control-label">Select Level:</label>             
                <div class="col-sm-7">
                <select name="txtCollege" class="form-control" id="txtLevel" onchange="toggle()">
                    <option value="0">--Select Level--</option>
                    <?php
                    while ($row = $link_level->fetch_array()) {                        
                        ?>
             <option value="<?php echo $row['level']; ?>"> <?php echo $row['level'];?></option> 
                        <?php
                    }
                    ?>
                </select>
                </div>  
          </div>
        
        <div class="form-group ">
<label for="input_level" class="col-sm-5 control-label">Select Course:</label>
             
<div class="col-sm-7" id="selectCourse">
                
                </div>                    
                
                       
          </div>
            
         
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            <div class="form-group ">
<label for="starting_time" class="col-sm-5 control-label">Starting Time:</label>
            <div class="col-sm-7">
  <input type="text" name="txtCourse" value="" placeholder="Enter Starting Time" id="starting_time" class="form-control" />
                          </div>
          </div>
           <div class="form-group ">
			<label class="col-sm-5 control-label" for="ending_time">Ending Time:</label>
            <div class="col-sm-7"> 
        <input type="text" name="ending_time" value="" placeholder="Enter Ending Time" id="ending_time" class="form-control" />
                          </div>
          </div>
            <center>
		     <div class="form-group ">
           
            <div class="col-sm-10">
		    <br>
                    <button type="button" class="btn btn-success btn-sm" id="submit_course" title="Save"><i class="glyphicon glyphicon-floppy-disk"> Save</i></button>
<button type="reset" class="btn btn-default btn-sm" title="Reset"><i class="glyphicon glyphicon-remove"> Reset</i></button>
                          </div>
          </div>
			</center>
        
        </form>
    </div>
    <?php 
//$num_rec_per_page=1;
//mysql_connect('localhost','root','');
//mysql_select_db('ses');
//
//if (isset($_GET["page"])) {
//    $page  = $_GET["page"]; 
//    
//} else {
//    $page=1; 
//    
//}; 
//
//$start_from = ($page-1) * $num_rec_per_page; 
//$sql = "SELECT * FROM mp_course LIMIT $start_from, $num_rec_per_page"; 
//$rs_result = mysql_query ($sql); //run the query

?>
    <div class="col-sm-7">
       
        
        <div class="panel panel-default">
				  <div class="panel-heading">
        <h3 class="panel-title "><i class="glyphicon glyphicon-th-list"></i> Details</h3>
      </div>
				    <div class="panel-body">
                                        <div class="loading-div"><img src="pagination/ajax-loader.gif" ></div>
<div id="results"><!-- content will be loaded here --></div>
                                        
                                        
<!--                                        <table  style="font-size: 10px;">
                                            <tr>
						    
			 <th class="info">#</th>
			 <th class="info">Acronyms</th>
			 <th class="info">Course Name</th>
			 <th class="info">Modify</th>
						   
						    </tr>
						    <tbody>-->
					<?php 
//                                        $con = mysqli_connect(DB_HOST, DB_HOST_USERNAME, DB_HOST_PASSWORD, DB_DATABASE); //Records per page
//$per_page=5;
//
//if (isset($_GET['page'])) {
//
//$page = $_GET['page'];
//
//}
//
//else {
//
//$page=1;
//
//}
//
//// Page will start from 0 and Multiple by Per Page
//$start_from = ($page-1) * $per_page;
//
////Selecting the data from table but with limit
//$query ="SELECT * FROM ".TABLE_COURSE." LIMIT $start_from, $per_page";
//$result = mysqli_query ($con, $query);
//
//       // $res=$dbcon->query("SELECT * FROM ".TABLE_COURSE." LIMIT  $num_rec_per_page");
//                                        $i = 0; 
//while($row = mysqli_fetch_assoc($result))
//{
//					
//					
//							$i++;
//						?>
							    <!--<tr class="active">-->
				    <td><?php //echo $i;?></td>
				<td><?php //echo $row['course_acronym']?></td>
				<td><?php //echo $row['course_name']?></td>
                               <!--<td><a href="#" class="btn btn-success btn-sm" style="border-radius:4em"><i class="glyphicon glyphicon-edit"></i></a><a href="<?php //echo URL ?>center/DeleteCollege/<?php //echo $value['id']?>" class="btn btn-danger btn-sm" style="border-radius:4em"><i class="glyphicon glyphicon-remove"</a></td>-->
							    <!--</tr>-->
							    
							    <?php
							
//}
							  ?>  
<!--						    </tbody>
                                                    <tfoot>
                                                    <td>
                                                       <div>-->
<?php

//Now select all from table
//$query = "select * from ".TABLE_COURSE;
//$result = mysqli_query($con, $query);
//
//// Count the total records
//$total_records = mysqli_num_rows($result);
//
////Using ceil function to divide the total records on per page
//$total_pages = ceil($total_records / $per_page);
//
////Going to first page
//echo "<center><a href='administration.php?page=".easy_crypt(1)."'>".'First Page'."</a>";
//
//for ($i=1; $i<=$total_pages; $i++) {
//
//echo "<a href='administration.php/reg_course.php?page=".$i."'>".$i."</a>";
//};
//// Going to last page
//echo "<a href='administration.php/reg_course.php?page=$total_pages'>".'Last Page'."</a></center>";
?>

<!--</div>
                                                    </td>
                                                    </tfoot>
					    </table>    -->
				    </div>
				    
				    
				    
			    </div>
        
        
    </div>
</div>