@extends('index')
@section('t1')	
<table class="table table-dark">
	<tr><td scope="col">date</td><td scope="col">lieu</td><td scope="col">code</td></tr>
	
	
	@foreach ($epreuve as $values) 
   
<tr>
    <td><?php echo $values->numepreuve;?></td>
    <td><?php echo $values->datepreuve;?></td>
    <td><?php echo $values->lieu;?></td>
</tr>
@endforeach

<table>
	@stop