@extends('layouts.gentelella')
@section('title') Gestionar año lectivo @endsection

@section('content')
	
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Gestionar año lectivo</h3>
             <a href="{{ route('year.add') }}"><button type="button" class="btn btn-success"  >Crear Año</button></a>
        </div>
    <div class="title_right">
    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Buscar ...">
        <span class="input-group-btn">
        <button class="btn btn-default" type="button">Buscar!</button>
        </span>
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
<h2>Lista de años<small></small></h2>
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
        <div class="dataTables_length" id="datatable-responsive_length">
            <label>Mostrar <select name="datatable-responsive_length" aria-controls="datatable-responsive" class="form-control input-sm">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select> años</label>
        </div>
    </div>
    <div class="col-sm-6">
    	<div id="datatable-responsive_filter" class="dataTables_filter">
        <label>Buscar:<input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable-responsive"></label>
    </div>
</div></div>
<div class="row">
    <div class="col-sm-12">
           <table id="datatable-responsive" class="table table-striped jambo_table bulk_action" cellspacing="0" width="100%" role="grid" aria-describedby="datatable-responsive_info" style="width: 100%;">
<thead>
<tr role="row">
	
        
 
    <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width:10px; color:white;" aria-label="Position: activate to sort column ascending">Año</th>
    <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 50px; color:white;" aria-label="Apellidos: activate to sort column ascending">Duración</th>
    <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 10px; color:white;" aria-label="Office: activate to sort column ascending">Descripción</th>
 
     <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 10px; color:white;" aria-label="Office: activate to sort column ascending">Acciones</th>
        
</tr>
</thead>
<tbody>
@foreach($years as $year)
<tr role="row" class="odd">




<td>{{ $year->Year }}</td>
<td>{{ $year->Weeks }}</td>
<td>{{ $year->Description }}</td>

<td><button type="button" class="btn btn-success" ><i class="fa fa-cogs"  data-toggle="tooltip" title="Editar" ></i></button><button type="button" class="btn btn-danger" ><i class="fa fa-trash" data-toggle="tooltip" title="Eliminar"></i></button></td>



</tr>
@endforeach
</tbody>
</table></div></div>
<div class="row"><div class="col-sm-5">
    <div class="dataTables_info" id="datatable-responsive_info" role="status" aria-live="polite">Mostrando 10 de 50 </div>
</div>
<div class="col-sm-7">
    <div class="dataTables_paginate paging_simple_numbers" id="datatable-responsive_paginate">
        <ul class="pagination">
            <li class="paginate_button previous disabled" id="datatable-responsive_previous">
                <a href="#" aria-controls="datatable-responsive" data-dt-idx="0" tabindex="0">Anterior</a></li>
                <li class="paginate_button active"><a href="#" aria-controls="datatable-responsive" data-dt-idx="1" tabindex="0">1</a></li>
                <li class="paginate_button "><a href="#" aria-controls="datatable-responsive" data-dt-idx="2" tabindex="0">2</a></li>
                <li class="paginate_button "><a href="#" aria-controls="datatable-responsive" data-dt-idx="3" tabindex="0">3</a></li>
                <li class="paginate_button "><a href="#" aria-controls="datatable-responsive" data-dt-idx="4" tabindex="0">4</a></li>
                <li class="paginate_button "><a href="#" aria-controls="datatable-responsive" data-dt-idx="5" tabindex="0">5</a></li>
                <li class="paginate_button "><a href="#" aria-controls="datatable-responsive" data-dt-idx="6" tabindex="0">6</a></li>
                <li class="paginate_button next" id="datatable-responsive_next"><a href="#" aria-controls="datatable-responsive" data-dt-idx="7" tabindex="0">Siguiente</a></li></ul>
            </div>
        </div>
    
</div>

</div>
</div>
</div>
</div>
@endsection