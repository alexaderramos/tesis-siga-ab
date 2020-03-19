@extends('layouts.gentelella')
@section('title')  Gestionar notificacones  @endsection
@section('content')
	

<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Gestionar notificaciones</h3>
           <a href="{{ route('notification.add') }}"><button type="button" class="btn btn-success"  >Agregar Notificación</button></a>
        </div>
    <div class="title_right">
    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
    <div class="input-group">
      
    </div>

    </div>
    </div>
</div>

<div class="">
<div class="page-title">
<div class="title_left">

</div>

<div class="clearfix"></div>
</div>
<div class="x_content">
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="x_panel">
<div class="x_title">
<h2>Notifaciones<small></small></h2>
<ul class="nav navbar-right panel_toolbox">
<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
</li>

<li><a class="close-link"><i class="fa fa-close"></i></a>
</li>
</ul>
<div class="clearfix"></div>
</div>
<div class="x_content">

<div id="datatable-responsive_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row">
    <div class="col-sm-6">
     
        
        </div>
    </div>
    <div class="col-sm-6">
</div>
</div>
<div class="row">
<div class="col-sm-12">
           <table id="datatable-responsive" class="table table-striped jambo_table bulk_action" cellspacing="0" width="100%" role="grid" aria-describedby="datatable-responsive_info" style="width: 100%;">
<thead>
<tr role="row">
    
  

     <th class="sorting_asc" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 40px; color:white;" aria-sort="ascending" aria-label="DNI: activate to sort column descending">Nombre</th>
    <th class="sorting_asc" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 50px; color:white;" aria-sort="ascending" aria-label="Nombres: activate to sort column descending">Fecha </th>
    <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 50px; color:white;" aria-label="Apellidos: activate to sort column ascending">Mensaje</th>

  

     <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 10px; color:white;" aria-label="Office: activate to sort column ascending">Acciones</th>
        
</tr>
</thead>
<tbody>

<tr role="row" class="odd">

<td tabindex="0" class="sorting_1">Primer examen entrada</td>

<td>11/05/18</td>



<td>Examen de actitud</td>
<td>
 <button type="button" class="btn btn-success" ><i class="fa fa-cogs"  data-toggle="tooltip" title="Editar" ></i></button><button type="button" class="btn btn-danger" ><i class="fa fa-trash" data-toggle="tooltip" title="Eliminar"></i></button>
</td>


</tr>
</tbody>
</table>


</div>
</div>
</div>
</div>
</div>
</div>
</div>

@endsection