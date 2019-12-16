<?php 

 require_once '../lib/constant.php';
 require_once '../lib/db.php';



$link_course = $con->query("SELECT * FROM college"); 
    


?>

<div class="container-fluid" style="opacity: 0.7">
    <script type="text/javascript">
            
            $(document).ready(function (){
   
    
    $('#submit_depart').click(function (){
         var txtCollege = $('#txtCollege').val();
        var input_depart = $('#input_depart').val();
        
        $.post('./lib/connect.php?action=create_department',{txtCollege:txtCollege, input_depart:input_depart}, function(data, textStatus) {
            
        if(parseInt(data) == 1){
        
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
            <!--<input type="hidden" name="id_all" id="show_drop" value="<?php echo $select_It_All1['department_id']?>" />-->
       
            
            <div class="form-group ">
<label for="input_course" class="col-sm-5 control-label">Select College:</label>
             
                <div class="col-sm-7">
                <select name="txtCollege" class="form-control" id="txtCollege" >
                    <option value="0">--Select College--</option>
                    
                    <?php
                    while ($row = $link_course->fetch_array()) {
                        
                        ?>
                        
             <option value="<?php echo $row['college']; ?>"> <?php echo $row['college'];?></option>        
                    
                        <?php
                    }               
                    
                    ?>                    
                </select>
                </div>                    
                
                       
          </div>
            
            <div  >
            <div class="form-group ">
<label for="input-depart" class="col-sm-5 control-label">Depart. Name:</label>
            <div class="col-sm-7">
  <input type="text" name="txtDepart" value="" placeholder="Enter Depart. Name" id="input_depart" class="form-control" />
                          </div>
          </div>
         
            <center>
		     <div class="form-group ">
           
            <div class="col-sm-10">
		    <br>
                    <button type="button" class="btn btn-success btn-sm" id="submit_depart" title="Save"><i class="glyphicon glyphicon-floppy-disk"> Save</i></button>
<button type="reset" class="btn btn-default btn-sm" title="Reset"><i class="glyphicon glyphicon-remove"> Reset</i></button>
                          </div>
          </div>
			</center>
            </div>
        
        </form>
    </div>
    <div class="col-sm-7">
       
        
        <div class="panel panel-default">
				  <div class="panel-heading">
        <h3 class="panel-title "><i class="glyphicon glyphicon-th-list"></i> Details</h3>
      </div>
				    <div class="panel-body">
                                        <div class="loading-div"><img src="pagination_department/ajax-loader.gif" ></div>
<div id="results_depart"><!-- content will be loaded here --></div>
                                        
                                        
                                        
                                        
                                        
                                          
				    </div>
				    
				    
				    
			    </div>
        
        
    </div>
</div>