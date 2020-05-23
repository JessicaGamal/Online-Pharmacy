<!DOCTYPE html>
<html>

<head>
  <title>Add New Medicine</title>
  
    <style>
	.main{
	max-width:1200px;
	margin:auto;
	}
	
    header{background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)) , url(1.jpg);
	background-size:cover;
	background-position:center;
    height:100vh;	
   	}
	
	ul{
	float:right;
	list-style-type:none;
	margin-top:25px;
	}
	li{
	 display:inline-block;
	 }
	li a {
	text-decoration:none;
	color:#fff;
	padding:5px 20px;
	border :1px solid #000 transparent;
	transition: 0.6s ease;
	}
	li a:hover {background-color:#000;
                color:#55ff;	}
			
	.logo h2{
	float:left;
	width:150px;
	height:auto;
	color:#fff;
	}

   	.title{
	position:absolute;
	top:50%;
	left:50%;
	transform:translate(-50%,-50%);
	} 
    .title h1{
	color:#fff;
	font-size:70px;
	}	
	
	.button1{
	position:absolute;
	top:65%;
	left:50%;
	transform:translate(-50%,-50%);
	}
	
	.button2{
	position:absolute;	
	left:58%;
	transform:translate(-50%,-50%);
	}
	
    .btn1{
	border:1px solid #fff;
	color:#fff;
	padding:10px 30px;
	text-decoration:none;
	transition:0.6s ease;
	}
	
	.btn2{
	border:1px solid #fff;
	color:#000;
	padding:10px 30px;
	text-decoration:none;
	transition:0.6s ease;
	}
	
	.btn1:hover{
	background-color:#000;
    color:#55ff;
	}
	
	.btn2:hover{
	background-color:#000;
    color:#fff;
	}
	
	
	body{
	margin:0;
	padding:0;
	font-family:sans-serif;
	}
	
	.container{
	width:800px;
	margin:50px auto 0;
	display:table;
	box-sizing:border-box;	
	}
	
	.row{
	margin:20px 0;
	}
	
	.column{
	/*background:#000;*/
	display:table-cell;
	padding:7px;
	width:33.3%;
	/*color:#fff;*/
	text-align:center;
	vertical-align:middle;
	border-right:10px solid #fff;
	border-left:10px solid #fff;
	}
	
	
	.picture{
	/*background:#000;*/
	display:table-cell;
	padding:7px;
	width:33.3%;
	/*color:#fff;*/
	text-align:center;
	vertical-align:middle;
	border-right:60px solid #fff;
	border-left:20px solid #fff;
	}
	
	
	table{
	width:700px;
	margin-bottom:50px;
	font-family:arial , sans-serif;
	}
	
	caption{
	text-align:left;
	}
	
	th{
	text-align:left; /*center*/
	background-color:#808080;
	font-weight:bold;
	/*text-transform:uppercase;*/
	}
	
	td{
	text-align:left;/*center*/
	background-color:#D3D3D3;
	}
	
	table,th,td{
	border:1px solid #000;
	border-collapse:collapse;
	}
	
	th,td{
	padding:5px;  //make word have space to boarder
	}
	
	caption{
	padding:6px;
	font-weight:bold;
	text-transform:uppercase;
	
	}
	
  
    </style>
	
	
</head>

<body>
    <header>
	 <div class='main'>
	    <div class='logo'>
		  <h2>PHARMACY<h2>
	    </div>
	   <ul>
	      <li><a href='home1'>HOME</a></li>
		  <li><a href='about'>ABOUT US</a></li>
		  
	   </ul>
	 </div>
	 <div class='title'>
	  <h1>ADD MEDICINE</h1>
     </div>
	 <div class='button1'>
	  <a href='#add' class='btn1' >Add New Medicine</a>
	  <a href='#all' class='btn1' >Show All Medicines</a>
	  <a href="delete_medicine.blade.php" class='btn1' >delete Medicine</a>
	 </div>
	 
     
    </header>
	
	<section id=add>	
	  <div class='container' >
		<form method="post" action="{{url('Product')}}" >
		  <h3>ADD MEDICINE</h3>
		  <div class='row'>		  
		    <div class='column'>
			 <h4>Name Of Medicine</h4>
		    </div>
			
			<div class='column'>
			<h4>Price</h4>
		    </div>
			
			 <div class='column'>
			<h4>Image</h4>
		    </div>
     	   </div>
		   
		   <div class='row'>
		    <div class='column'>
			 <input type="text" name="medicine" placeholder="Enter Medicine Name" >
		    </div>
			
			<div class='column'>
			<input type="number" min="1" name="price" placeholder="Enter Medicine Price" >
		    </div>
			
			 <div class='picture'>
			<input type="file" id="image" name="image" >
		    </div>
     	   </div>

            <div class='row'>
		     <div class='column'>		   
		         <div type='submit' class='button2' >
				 <button class='btn2'>
				     submit
				 </button> 
		     </div>
			</div>
		</form>	
      </div>		
	</section>
	
	
	
	<section id=all>
	  <div class='container'>
	   <!-- <h3>name of all medicines</h3> -->
	    <table>
		 <caption > name of all medicines</caption>
		 
	       <tr>		   
		    <th>Name Of Medicine</th>
			<th>Price</th>
			<th>Image</th>	   
           </tr>
		   
		   @foreach($products as $row) 
		   <tr>  
		   <td>{{$row['medicine']}}</td>
			<td>{{$row['price']}}</td>
			<td>{{$row['image']}}</td>	   
		   </tr>
		   @endforeach
		   	   
		  

		   
	    </table>
	  </div>	
	</section>

	
	
	
</body>

</html>