
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		*{
			margin: 0px;
			padding: 0px;
			box-sizing: border-box;
		}
		body{
			width: 100%;
			height: 100vh;
			display: flex;
			justify-content: center;
			align-items: center;
			background: #ff4633;
			font-family: sans-serif;
		}
	    #cal1{
	    	width: 550px;
	    	height: 300px;
	    	border-radius: 20px;
	    	position: absolute;
	    	top: 32%;
	    	left: 30%;
	    	background: #000000;
	    	padding: 5px;
	    	justify-content: center;
	    	/*color: white;*/
	    	align-items: center;
	    	box-shadow: 10px 10px 10px #ffffff;
	    	border-left: 10px solid #00ffcc;
	    	
	    } 
      #cal2{
      	position: relative;
      	top: 45%;
      	left: 20px;
      	color: #00ffcc;
      	font-weight: bolder;
        border-left: 2px solid #00ffcc;
      	
      }
      #cal3{
      	position: relative;
      	top: 5%;
      	left: 60%;
   color: white;
      }
      #ht{
      	margin: 3px;
      	font-size: 20px;
      }
      #num1{
      	width: 190px;
      	height: 30px;
      	margin: 10px;
      	background: transparent;
      	color: white;
      	border: none;
      		align-items: center;
      	outline: none;
      	border-bottom: 2px solid #00ffcc;
      	outline: none;
      	text-align: center;
      }
      #num2{
      	width: 190px;
      	height: 30px;
      	margin: 10px;
      	background: transparent;
      	color: white;
      	border: none;
      	align-items: center;
      	border-bottom: 2px solid #00ffcc;
      	outline: none;
      	text-align: center;
      }
      #btn{
      	width: 70px;
      	height: 30px;
      	background: #00ffcc;
      	margin: 10px;
      	font-weight: bolder;
      	border: none;
      	border-radius: 2px;
      	outline: none;
      	text-align: center;

      }
      #select{
      	width: 190px;
      	height: 30px;
      	margin-left: 10px;
      	margin-top: 5px;
      	margin-bottom: 5px;
      	outline: none;
      }
      #phr{
      	position: relative;
      	 margin-top: 20px;
      	color: white;
      	text-align: center;
      }
	</style>
</head>
<body>
	<form method="POST" id="cal1">
	    
    <div id="cal2"><p id="ht">PHP<br>CALCULATOR</p></div>
    
        <div id="cal3">
        	<input type="text" id="num1" name="num1" placeholder="Enter the first number" ><br>
        	<input type="text" id="num2" name="num2" placeholder="Enter the second number" ><br>
               
               <div class="select-style" >
               	<select id="select" name="operation">
               		<option value="add">ADD</option>
               		<option value="sub">SUB</option>
               		<option value="mult">MULTI</option>
               		<option value="div">DIV</option>
               	</select>
               </div>


        	<input type="submit" id="btn" name="submit">
        	     
        </div>
	
	<p id="phr">
	<?php
 if(isset($_POST['submit'])){
 	 $num1= $_POST['num1'];
 	 $num2= $_POST['num2'];
 	 // echo $num1+$num2;
 	 $operation=$_POST['operation'];
 	 switch ($operation) {
 	 	case 'add':
 	 	      echo"The sum of two number is :".$num1+$num2;
 	 		break;
 	 		case 'sub':
 	 	      echo"The sub of two number is :".$num1-$num2;
 	 		break;
 	 			case 'mult':
 	 	      echo"The mult of two number is :".$num1*$num2;
 	 		break;
 	 			case 'div':
 	 	      echo"The div of two number is :".$num1/$num2;
 	 		break;
 	 	default:
 	 	echo "not valid case";
 	 }
 }
	?>
  </p>  
  </form>
</body>
</html>





<?php

?>