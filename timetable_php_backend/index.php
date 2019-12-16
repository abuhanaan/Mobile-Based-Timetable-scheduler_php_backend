<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 
// require_once 'lib/constant.php';
// require_once 'lib/db.php';

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Generate Time Table</title>
        
        <script src="public/js/vendor/jquery-1.11.2.js" type="text/javascript"></script>
        <link rel="stylesheet" href="public/css/bootstrap.min.css">
        <link href="public/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="public/css/party.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="public/css/bootstrap-theme.min.css">
        <!--<link rel="stylesheet" href="public_admin/css/main.css">-->
        <link href="public/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="public/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <script src="js/mainJS.js" type="text/javascript"></script>
        <script>
        $(document).ready(function (){
           
           
           
           $('#create_college').click(function (){
               $('#rowResult').html('');
               $('#rowResult').load('./admin/create_college.php');
               
               
           });
           
           $('#create_depart').click(function (){
               $('#rowResult').html('');
               $('#rowResult').load('./admin/create_department.php');
               
               
           });
                     
                      
           $('#create_level').click(function (){
               $('#rowResult').html('');
               $('#rowResult').load('./admin/create_level.php');
              
           });
           $('#crerate_day').click(function (){
               $('#rowResult').html('');
               $('#rowResult').load('./admin/create_day.php');
               
               
           });
           $('#create_course').click(function (){
               $('#rowResult').html('');
               $('#rowResult').load('./admin/create_course.php');
               
               
           });
           $('#gen_time_table').click(function (){
               $('#rowResult').html('');
               $('#rowResult').load('./admin/create_time_table.php');
               
               
           });
           
           
           
           
           
           
           
           
           
           
           
        });
        
        
        </script>
        
        
        
        
    </head>
    <body>
        
        <?php
        require_once './admin/cabinet.php';
        ?>
    </body>
</html>
