
	
@extends('index')
@section('t1')	

<table  class="table table-dark">
	<tr class="thead-dark"><td>code</td><td>libelle</td><td>cofficient</td></tr>
	

	@foreach ($matiere as $values) 
   
<tr>
    <td><?php echo $values->codemat;?></td>
    <td><?php echo $values->libelle;?></td>
    <td><?php echo $values->coef;?></td>
</tr>
@endforeach

<table>

@stop