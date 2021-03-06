@extends('adminlte::page');

@section('content')
<h1>Odontologo</h1>
<div class="row">
                    <div class="col-md-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb pl-0">
                                <li class="breadcrumb-item"><a href="#"><i class="material-icons"></i> Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Odontologo</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Agregar Odontologo</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-xl-12 col-md-12">
                        <div class="ms-panel">
                            <div class="ms-panel-header ms-panel-custome">
                                <h6>Agregar Odontologo</h6>
                                <a href="#" class="ms-text-primary">Lista de Odontologos</a>
                            </div>
                            <div class="ms-panel-body">
                                <form class="needs-validation" novalidate="">
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom0001">First Name</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="validationCustom0001" placeholder="Enter First Name" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom0002">Last name</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="validationCustom0002" placeholder="Enter Last Name" required="">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom0003">Email Address</label>
                                            <div class="input-group">
                                                <input type="email" class="form-control" id="validationCustom0003" placeholder="Enter Email" required="">

                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="validationCustom0004">Create Password</label>
                                            <div class="input-group">
                                                <input type="password" class="form-control" id="validationCustom0004" placeholder="Enter Password" required="">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom0005">Designation</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="validationCustom0005" placeholder="Enter Designation" required="">

                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="validationCustom6">Department</label>
                                            <div class="input-group">
                                                <select class="form-control" id="validationCustom6" required="">
                                                    <option value="">Neurology</option>
                                                    <option value="">Gynaecology</option>
                                                    <option value="">Microbiology</option>
                                                    <option value="">Pharmacy</option>
                                                    <option value="">Neonatal</option>
                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-2">
                                            <label for="validationCustom007">Address</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="validationCustom007" placeholder="Address" required="">

                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom008">Specialist</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="validationCustom008" placeholder="Specialist" required="">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-2">
                                            <label for="validationCustom009">Mobile</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="validationCustom009" placeholder="Mobile" required="">

                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label>Doctor Image</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="validatedCustomFile">
                                                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12 mb-2">
                                            <label>Short Biography</label>
                                            <div class="input-group">
                                                <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label>Date of Birth</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="validationCustom102" placeholder="Date of Birth" required="">

                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label>G??nero</label>
                                            
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
                                    <button class="btn btn-warning mt-4 d-inline w-20" type="submit">Reset</button>
                                    <button class="btn btn-primary mt-4 d-inline w-20" type="submit">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
@endsection