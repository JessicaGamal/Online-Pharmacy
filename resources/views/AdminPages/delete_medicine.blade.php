<!DOCTYPE html>
<html>

<head>
  <title>Delete Medicine</title>
  
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
	
	.btn3{
	border:1px solid #fff;
	color:#000;
	padding:3px 10px;
	text-decoration:none;
	transition:0.6s ease;
	}
	
	.btn3:hover{
	background-color:#ff1a1a;
    color:#fff;
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
	      <li><a href='#'>HOME</a></li>
		  <li><a href='#'>SERVICES</a></li>
		  <li><a href='#'>ABOUT</a></li>
		  <li><a href='#'>CONTACT</a></li>
	   </ul>
	 </div>
	 <div class='title'>
	  <h1>DELETE MEDICINE</h1>
     </div>
	 <div class='button1'>
	  <a href='#del' class='btn1' >Delete Medicine</a>
	 <a href="add_medicine.blade.php" class='btn1' >Add Medicines</a>
	 </div>
	 
     
    </header>
	
	
	
	
	
	<section id=del>
	  <div class='container'>
	   <!-- <h3>name of all medicines</h3> -->
	    <table>
		 <caption > name of all medicines</caption>
		 
	       <tr>		   
		    <th>Name Of Medicine</th>
			<th>Price</th>
			<th>Image Of Medicine</th>
            <th>Delete Medicine</th>			
           </tr>
		   
		   @foreach($product as $row)
		   <tr>  
		   <td>{{[$row['Product_name']]}}</td>
		   <td>{{[$row['image']]}}</td>
		   <td>{{[$row['Price']]}}</td>
            <td>
			    <form method="post" class="delete_form" action="{{action('ProductController@destroy',$row['id'])}}" >
				   {{csrf_field()}}
				   <input type="hidden" name="_method" value="DELETE" >
				   <button type="submit" class=btn3 > Delete</button>			   
			    </form>
			</td>			          
		  </tr>

          @endforeach		  
		   

		   
		   
	    </table>
	  </div>	
	</section>
            
 
	
	
	
</body>

</html>