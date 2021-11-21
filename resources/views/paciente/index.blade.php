@extends('adminlte::page');

@section('content')

<div class="ms-content-wrapper">
            <div class="row">
               <div class="col-md-12">
                  <nav aria-label="breadcrumb">
                     <ol class="breadcrumb pl-0">
                        <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Paciente</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Agregar Paciente</li>
                     </ol>
                  </nav>
               </div>
               <div class="col-xl-12 col-md-12">
                  <div class="ms-panel">
                     <div class="ms-panel-header ms-panel-custome">
                        <h6>Agregar Paciente</h6>
                        <a href="patient-list.html" class="ms-text-primary">Lista de Pacientes
                        </a>
                     </div>
                     <div class="ms-panel-body">
                        <form class="needs-validation" novalidate="">
                           <div class="form-row">
                              <div class="col-md-6 mb-3">
                                 <label for="validationCustom001">Tipo de Documento</label>
                                
                                 <div class="input-group">
                                    <select name="" id="" class="form-control">
                                       <option value="">DNI</option>
                                    </select>                                    
                                 </div>
                              </div>
                              <div class="col-md-6 mb-3">
                                 <label for="validationCustom002">Numero de documento</label>
                                 <div class="input-group">
                                    <input type="text" class="form-control" id="validationCustom002" placeholder="Ingresar numero de documento" required="">
                                    <button class="form-control" type="submit">Buscar</button>
                                 </div>
                              </div>
                           </div>
                           <div class="form-row">
                              <div class="col-md-6 mb-2">
                                 <label for="validationCustom004">Nombres</label>
                                 <div class="input-group">
                                    <input type="text" class="form-control" id="validationCustom004" placeholder="" required="">

                                 </div>
                              </div>
                              <div class="col-md-6 mb-2">
                                 <label for="validationCustom003">Apellidos</label>
                                 <div class="input-group">
                                    <input type="text" class="form-control" id="validationCustom003" placeholder="" required="">

                                 </div>
                              </div>
                           </div>
                           <div class="form-row">
                              <div class="col-md-6 mb-3">
                                 <label for="validationCustom005">Email</label>
                                 <div class="input-group">
                                    <input type="email" class="form-control" id="validationCustom005" placeholder="Add Email Id" required="">

                                 </div>
                              </div>  
                              <div class="col-md-6 mb-3">
                                 <label>Ocupaciòn</label>
                                 <div class="input-group">
                                    <input type="text" class="form-control" id="validationCustom180" placeholder="Enter Occupation" required="">

                                 </div>
                              </div>                            
                           </div>                          
                           <div class="form-row">
                              <div class="col-md-6 mb-3">
                                 <label>Imagen</label>
                                 <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="validatedCustomFile">
                                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>

                                 </div>
                              </div>
                              <div class="col-md-6 mb-3">
                                 <label>Fecha de Nacimiento</label>
                                 <div class="input-group">
                                    <input type="text" class="form-control" id="validationCustom190" placeholder="Date of Birth" required="">

                                 </div>
                              </div>
                           </div>
                           <div class="form-row">
                              <div class="col-md-6 mb-2">
                                 <label>Add Address</label>
                                 <div class="input-group">
                                    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>

                                 </div>
                              </div>                              
                           </div>
                           <div class="form-row">
                              <div class="col-md-6 mb-3">
                                 <label>Gènero</label>
                                 
                                    <li class="ms-list-item pl-0">
                                       <label class="ms-checkbox-wrap">
                                       <input type="radio" name="radioExample" value="">
                                       <i class="ms-checkbox-check"></i>
                                       </label>
                                       <span> Male </span>
                                    </li>                                    
                                    <li class="ms-list-item">
                                       <label class="ms-checkbox-wrap">
                                       <input type="radio" name="radioExample" value="" checked="">
                                       <i class="ms-checkbox-check"></i>
                                       </label>
                                       <span> Female </span>
                                    </li>                             
                              </div>
                           </div>
                           <button class="btn btn-warning mt-4 d-inline w-20" type="submit">Cancelar</button>
                           <button class="btn btn-primary mt-4 d-inline w-20" type="submit">Registrar</button>
                        </form>

                     </div>
                  </div>
               </div>
            </div>
         </div>
@endsection