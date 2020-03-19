@extends('layouts.gentelella')	
@section('title')Crear tipo de periodo @endsection

@section('content')
<div class="clearfix"></div> 
  <div class="page-title">
        


    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                   <h2>Crear tipo de periodo <small></small></h2>
                 
      
                    <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                    </ul>
        <div class="clearfix"></div>
            </div>

 <div class="">
<form class="form-horizontal form-label-left" novalidate=""  action="{{ route('period.add') }}">



{{ csrf_field()  }}

<span class="section">Datos del nuevo tipo de periodo</span>

<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombreaño">Nombre del Periodo: <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
    <input value="{{ old('nombreaperiodo') }}" id="nombreaño" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="nombreaperiodo" placeholder="BIMESTRE" required="required" type="text"  >
    </div>
</div>    



<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Descripción: <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
   <textarea value="{{ old('descripcion') }}" type="date" id="año" name="descripcion" required="required" class="form-control col-md-7 col-xs-12" placeholder="Ingrese descripción" > </textarea>
</div>   
</div> 
<div class="ln_solid"></div>
<div class="form-group">
<div class="col-md-6 col-md-offset-3">
<a href="{{ route('period.add') }}"><button type="submit" class="btn btn-primary">Cancelar</button></a>
<a href="{{ route('period.add') }}"><button id="send" type="submit" class="btn btn-success">Registrar</button></a>
</div>
 </div>
</form>
</div>

<div class="">

<div class="x_title">
<h2>Lista de periodos<small></small></h2>

<div class="clearfix"></div>
</div>
<div class="">

<div id="datatable-responsive_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row">

        <div id="datatable-responsive_filter" class="dataTables_filter">
        <label>Buscar:<input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable-responsive"></label>
    </div>
</div></div>
<div class="row">
    <div class="col-sm-12">
           <table id="datatable-responsive" class="table table-striped jambo_table bulk_action" cellspacing="0" width="100%" role="grid" aria-describedby="datatable-responsive_info" style="width: 100%;">
<thead>
<tr role="row">
    
        
    <th class="sorting_asc" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 50px; color:white;" aria-sort="ascending" aria-label="Nombres: activate to sort column descending">Nombre</th>
    <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 50px; color:white;" aria-label="Apellidos: activate to sort column ascending">Duración</th>
    <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width:10px; color:white;" aria-label="Position: activate to sort column ascending">Fecha inicio</th>
    <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 10px; color:white;" aria-label="Office: activate to sort column ascending">Fecha fin</th>
 
     <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 10px; color:white;" aria-label="Office: activate to sort column ascending">Acciones</th>
        
</tr>
</thead>
<tbody>

<tr role="row" class="odd">



<td>1º BIMESTRE</td>
<td>36 semanas</td>
<td>11/05/2019</td>
<td>15/07/2019</td>


<td><button type="button" class="btn btn-success" ><i class="fa fa-cogs"  data-toggle="tooltip" title="Editar" ></i></button><button type="button" class="btn btn-danger" ><i class="fa fa-trash" data-toggle="tooltip" title="Eliminar"></i></button></td>

<tr role="row" class="odd">


<td>2º BIMESTRE</td>
<td>36 semanas</td>
<td>19/07/2019</td>
<td>15/09/2019</td>
<td><button type="button" class="btn btn-success" ><i class="fa fa-cogs"  data-toggle="tooltip" title="Editar" ></i></button><button type="button" class="btn btn-danger" ><i class="fa fa-trash" data-toggle="tooltip" title="Eliminar"></i></button></td>

</tr>
</tbody>
</table>
</div>
</div>
<div class="row"><div class="col-sm-5">

    
</div>

</div>
</div>
</div>

</div>
</div>




<div class="clearfix"></div>
</div>

</div>
</div>



@endsection