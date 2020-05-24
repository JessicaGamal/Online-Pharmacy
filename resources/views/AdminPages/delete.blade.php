
  @extends('layouts.app')

@section('content')
<head><head>
    <link href="delete.css" rel="stylesheet">

</head>
  </head>

<title>Add/Delete medicine</title>

  
  <body>     
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
@endsection