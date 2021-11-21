@extends('adminlte::page');

@section('content')
<h1>Citas</h1>
<div class="ms-panel-body">
<button class="btn btn-warning mt-4 d-inline w-20" type="submit">Asignar Cita</button>
    <div class="table-responsive">
        <div id="data-table7_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="dataTables_length" id="data-table7_length">
                        <label>Show 
                        <select name="data-table7_length" aria-controls="data-table7" class="custom-select custom-select-sm form-control form-control-sm">
                            <option value="10">10</option>
                            <option value="25">25</option><option value="50">50</option><option value="100">100</option>
                        </select> </label></div></div><div class="col-sm-12 col-md-6"><div id="data-table7_filter" class="dataTables_filter"><label><input type="search" class="form-control form-control-sm" placeholder="Search Data..." aria-controls="data-table7"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="data-table7" class="table table-striped thead-primary w-100 dataTable no-footer" role="grid" aria-describedby="data-table7_info" style="width: 992px;"><thead><tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="data-table7" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID: activate to sort column descending" style="width: 52px;">Codigo Paciente</th><th class="sorting" tabindex="0" aria-controls="data-table7" rowspan="1" colspan="1" aria-label="Patient Name: activate to sort column ascending" style="width: 92px;">Nombre Cita</th><th class="sorting" tabindex="0" aria-controls="data-table7" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 28px;">Edad</th><th class="sorting" tabindex="0" aria-controls="data-table7" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 28px;">Odontologo</th><th class="sorting" tabindex="0" aria-controls="data-table7" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 28px;">Tratamiento</th><th class="sorting" tabindex="0" aria-controls="data-table7" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 28px;">Fecha</th><th class="sorting" tabindex="0" aria-controls="data-table7" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 28px;">Hora</th><th class="sorting" tabindex="0" aria-controls="data-table7" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 28px;">Acciones</th>
                        <tbody><tr role="row" class="odd"><td class="sorting_1">APT0001</td><td>Denise</td><td>39</td><td>Henry Daniels</td><td>Blanqueamiento</td><td>11 Dec 2021</td><td>10:00am-11:00am</td><td><a href="#"><i class="fas fa-pencil-alt ms-text-primary"></i></a>   <a href="#"><i class="far fa-trash-alt ms-text-danger"></i></a></td></tr><tr role="row" class="even"><td class="sorting_1">APT0002</td><td>Jennifer</td><td>29</td><td>Doris Wilder</td><td>Limpieza</td><td>5 Dec 2021</td><td>11:00am-13:00pm</td><td><a href="#"><i class="fas fa-pencil-alt ms-text-primary"></i></a>   <a href="#"><i class="far fa-trash-alt ms-text-danger"></i></a></td></tr></tbody>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection