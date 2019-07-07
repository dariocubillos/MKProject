@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mi informacion</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif



<?php // $users = Auth::user()->get(); ?>
<?php  //echo $users ?>


<form method="POST" action="{{route('RegisterUser.store')}}">


                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>
                              <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>
                                @error('nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Apellido Paterno') }}</label>
                              <div class="col-md-6">
                                <input id="apellido_paterno" type="text" class="form-control @error('apellido_paterno') is-invalid @enderror" name="apellido_paterno" value="{{ old('apellido_paterno') }}" required autocomplete="apellido_paterno" autofocus>
                                @error('apellido_paterno')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Apellido Materno') }}</label>
                              <div class="col-md-6">
                                <input id="apellido_materno" type="text" class="form-control @error('apellido_materno') is-invalid @enderror" name="apellido_materno" value="{{ old('apellido_materno') }}" required autocomplete="apellido_materno" autofocus>
                                @error('apellido_materno')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                          </div>

                        <div class="form-group row">
                            <label for="nino_adult" class="col-md-4 col-form-label text-md-right">{{ __('Niño o Adulto') }}</label>
                            <div class="col-md-6">
                              <select class="form-control" id="nino_adult" name="nino_adult">
                                   <option>Niño</option>
                                   <option>Adulto</option>
                                 </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Grado actual') }}</label>
                            <div class="col-md-6">
                              <input id="grado_actual" type="text" class="form-control @error('grado_actual') is-invalid @enderror" name="grado_actual" value="{{ old('grado_actual') }}" required autocomplete="grado_actual" autofocus>
                              @error('grado_actual')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Grado a subir') }}</label>
                            <div class="col-md-6">
                              <input id="grado_subir" type="text" class="form-control @error('grado_subir') is-invalid @enderror" name="grado_subir" value="{{ old('grado_subir') }}" required autocomplete="grado_subir" autofocus>
                              @error('grado_subir')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de nacimiento') }}</label>
                            <div class="col-md-6">
                              <input id="fecha_nacimiento" type="date" class="form-control @error('fecha_nacimiento') is-invalid @enderror" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}" required autocomplete="fecha_nacimiento" autofocus>
                              @error('fecha_nacimiento')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Edad') }}</label>
                            <div class="col-md-6">
                              <input id="edad" type="number" class="form-control @error('edad') is-invalid @enderror" name="edad" value="{{ old('edad') }}" required autocomplete="edad" autofocus>
                              @error('edad')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Direccion') }}</label>
                            <div class="col-md-6">
                              <input id="direccion" type="text" class="form-control @error('direccion') is-invalid @enderror" name="direccion" value="{{ old('direccion') }}" required autocomplete="direccion" autofocus>
                              @error('edad')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Telefono') }}</label>
                            <div class="col-md-6">
                              <input id="telefono" type="number" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ old('telefono') }}" required autocomplete="telefono" autofocus>
                              @error('telefono')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="edo_civil" class="col-md-4 col-form-label text-md-right">{{ __('Estado Civil') }}</label>
                            <div class="col-md-6">
                              <select class="form-control" id="edo_civil" name="edo_civil">
                                   <option>Soltero</option>
                                   <option>Casado</option>
                                 </select>
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="ocupacion_prof" class="col-md-4 col-form-label text-md-right">{{ __('Ocupacion/Profesion') }}</label>
                            <div class="col-md-6">
                              <input id="ocupacion_prof" type="text" class="form-control @error('ocupacion_prof') is-invalid @enderror" name="ocupacion_prof" value="{{ old('ocupacion_prof') }}" required autocomplete="ocupacion_prof" autofocus>
                              @error('ocupacion_prof')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                            </div>
                        </div>






                        <div class="form-group row">
                            <label for="fecha_examen_anterior" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de examen anterior') }}</label>
                            <div class="col-md-6">
                              <input id="fecha_examen_anterior" type="date" class="form-control @error('fecha_examen_anterior') is-invalid @enderror" name="fecha_examen_anterior" value="{{ old('fecha_examen_anterior') }}" required autocomplete="fecha_examen_anterior" autofocus>
                              @error('fecha_examen_anterior')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="fecha_ingreso" class="col-md-4 col-form-label text-md-right">{{ __('Fecha Ingreso') }}</label>
                            <div class="col-md-6">
                              <input id="fecha_ingreso" type="date" class="form-control @error('fecha_ingreso') is-invalid @enderror" name="fecha_ingreso" value="{{ old('fecha_ingreso') }}" required autocomplete="fecha_ingreso" autofocus>
                              @error('fecha_ingreso')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="practicando" class="col-md-4 col-form-label text-md-right">{{ __('Practicando') }}</label>
                            <div class="col-md-6">
                              <select class="form-control" id="practicando" name="practicando">
                                   <option value="1">Si</option>
                                   <option value="0">No</option>
                                 </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Doyang donde pertenece') }}</label>
                            <div class="col-md-6">
                              <input id="doyang_que_pertenece" type="text" class="form-control @error('doyang_que_pertenece') is-invalid @enderror" name="doyang_que_pertenece" value="{{ old('doyang_que_pertenece') }}" required autocomplete="doyang_que_pertenece" autofocus>
                              @error('doyang_que_pertenece')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Nombre Profesor') }}</label>
                            <div class="col-md-6">
                              <input id="nombre_profesor" type="text" class="form-control @error('nombre_profesor') is-invalid @enderror" name="nombre_profesor" value="{{ old('nombre_profesor') }}" required autocomplete="nombre_profesor" autofocus>
                              @error('nombre_profesor')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                            </div>
                        </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar Usuario') }}
                                </button>
                            </div>
                        </div>
                </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
