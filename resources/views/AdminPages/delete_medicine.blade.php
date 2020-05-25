<!DOCTYPE html>
<html>
<style>
	table.blueTable {
  border: 1px solid #1C6EA4;
  background-color: #EEEEEE;
  width: 100%;
  text-align: left;
  border-collapse: collapse;
}
table.blueTable td, table.blueTable th {
  border: 1px solid #AAAAAA;
  padding: 3px 2px;
}
table.blueTable tbody td {
  font-size: 13px;
}
table.blueTable tr:nth-child(even) {
  background: #D0E4F5;
}
table.blueTable thead {
  background: #1C6EA4;
  background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  background: linear-gradient(to bottom, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  border-bottom: 2px solid #444444;
}
table.blueTable thead th {
  font-size: 15px;
  font-weight: bold;
  color: #FFFFFF;
  border-left: 2px solid #D0E4F5;
}
table.blueTable thead th:first-child {
  border-left: none;
}

table.blueTable tfoot {
  font-size: 14px;
  font-weight: bold;
  color: #FFFFFF;
  background: #D0E4F5;
  background: -moz-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
  background: -webkit-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
  background: linear-gradient(to bottom, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
  border-top: 2px solid #444444;
}
 table.blueTable tfoot td {
  font-size: 14px;
}
  table.blueTable tfoot .links {
  text-align: right;
}
  table.blueTable tfoot .links a{
  display: inline-block;
  background: #1C6EA4;
  color: #FFFFFF;
  padding: 2px 8px;
  border-radius: 5px;
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
	
  .btn1{
	border:1px solid #fff;
	color:#fff;
	padding:10px 30px;
	text-decoration:none;
	transition:0.6s ease;
	}
	
	.btn1:hover{
	background-color:#000;
    color:#55ff;
	}
  
  header{background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)) , url(1.jpg);
	background-size:cover;
	background-position:center;
    height:100vh;	
   	}

  .main{
	max-width:1200px;
	margin:auto;
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
	


</style>


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
    <a href="add_medicine.blade.php" class='btn1' >Add Medicines</a>
    </div>
    
      
     </header>
 
  <section id=del>
<div class='container'>
<table class="blueTable">
<thead>
<tr>
<th>productname</th>
<th>price</th>
<th>image</th>
</tr>
</thead>
<tbody>
   @foreach($delete as $row)
<tr>
<td>{{$row->Product_name}}</td>
<td>{{$row->price}}</td>
<td>{{$row->image}}</td>
<td><a href="/delete/{{$row->id}}"><button class=btn3 >delete</button></a></td>
</tr>
  @endforeach
</tbody>
</table>
</div>
  </section>

</body>
</html>
