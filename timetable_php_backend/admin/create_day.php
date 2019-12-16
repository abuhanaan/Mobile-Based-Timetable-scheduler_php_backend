<div class="container-fluid" style="opacity: 0.9">
    <script type="text/javascript">
            
            $(document).ready(function (){
   
    
    $('#submit_day').click(function (){
        var input_day = $('#input_day').val();
       
        $.post('./lib/connect.php?action=create_day',{input_day:input_day}, function(data, textStatus) {
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
        <form action="connect_all.php?load=college" method="post" enctype="multipart/form-data" id="form-user-group" class="form-horizontal">
<!--            <input type="hidden" name="id_all" value="<?php echo $select_It_All1['college_id']?>" />-->
        <div class="form-group ">
<label for="input_day" class="col-sm-5 control-label">Day:</label>
            <div class="col-sm-7">
  <input type="text" name="txtCollege" value="" placeholder="Enter Day Name" id="input_day" class="form-control" />
                          </div>
          </div>
           
            <center>
		     <div class="form-group ">
           
            <div class="col-sm-10">
		    <br>
                    <button type="button" class="btn btn-success btn-sm" id="submit_day" title="Save"><i class="glyphicon glyphicon-floppy-disk"> Save</i></button>
<button type="reset" class="btn btn-default btn-sm" title="Reset"><i class="glyphicon glyphicon-remove"> Reset</i></button>
                          </div>
          </div>
			</center>
        
        </form>
    </div>
    <div class="col-sm-7">
       
        
        <div class="panel panel-default">
				  <div class="panel-heading">
        <h3 class="panel-title "><i class="glyphicon glyphicon-th-list"></i> Details</h3>
      </div>
				    <div class="panel-body">
                                         <div class="loading-div"><img src="pagination/ajax-loader.gif" ></div>
<div id="results_college"><!-- content will be loaded here --></div>

<!--                                        <table class="table table-striped" style="font-size: 11px;">
						    <thead >
						    
			 <th class="info">#</th>
			 <th class="info">Acronyms</th>
			 <th class="info">College Name</th>
			 <th class="info">Modify</th>
						   
						    </thead>
						    
					    </table>    -->
				    </div>
				    
				    
				    
			    </div>
        
        
    </div>
</div>