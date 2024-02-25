@extends('layouts.admin')
@section(' content')
    <div class="content-header">
        <div class="container-fluid">
            <div class=" row mb—2">
                <div class="col-sm-6">
                    <hl class="m-0">Services</h1>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Listado de Servicios</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="content">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body">
                          <table class="table table-bordered" id="user_table">
                              <thead>
                                  <tr>
                                      <th>Nombre del servicio</th>
                                      <th>Fecha de inicio</th>
                                      <th>Fecha finalizacion</th>
                                      <th>Descuento</th>
                                      <th>Tipo de servicio</th>
                                      <th>Fecha de iniciodel Descuento</th>
                                      <th>Fecha finalizacion del descuento</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  @foreach ($services as $service)
                                  <tr>
                                      <td>{{$service->name_service}}</td>
                                      <td>{{$service->start_service}}</td>
                                      <td>{{$service->deadline_service}}</td>
                                      <td>{{$service->discount}}</td>
                                      <td>{{$service->type_service}}</td>
                                  </tr>
                                  @endforeach
                              </tbody>
                          </table>

                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
