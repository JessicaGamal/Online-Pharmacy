<!DOCTYPE html>
<html>

   <head>
    
   
     <link href="delete.css" rel="stylesheet">
   
   
  </head>

  <body> 
<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>


               <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        logout                                    </a>
                               
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
    
              </div>
                
            
              <!--<li><a href="register" class="button">Sign Up</a></li>-->
            </ul>
          </nav>
        </header>
  <table class="blueTable">
<thead>
<tr>
<th>Product_name</th>
<th>price</th>
<th>image</th>
</tr>
</thead>
<tbody>
   @foreach($products as $row)
<tr>
<td>{{$row->Product_name}}</td>
<td>{{$row->price}}</td>
<td>{{$row->image}}</td>

<td><a href="/delete/{{$row->id}}"><button>delete</button></a></td>
</tr>
  @endforeach
</tbody>
</table>
</div>

</body>
</html>
