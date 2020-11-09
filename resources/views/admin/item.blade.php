@extends('layouts.admin.master')

@section('content')
<div class="main-content-inner">
    <div class="row">
        <div class="col-12 mt-5">
            <div class="card">
              <div class="seo-fact sbg2">
                  <div class="p-4 d-flex justify-content-between align-items-center">
                      <div class="seofct-icon">{{$details->description}}</div>
                      <h2>Test {{ $test }}</h2>
                  </div>
              </div>
            </div>
        </div>
        <!-- basic table start -->
        <div class="col-lg-6 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Cantidad total de personas que contestaron con cada respuesta</h4>
                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table table-hover text-center">
                                <thead class="text-uppercase">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">A veces</th>
                                        <th scope="col">Si</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">{{ $table1[0] }}</th>
                                        <td>{{ $table1[1] }}</td>
                                        <td>{{ $table1[2] }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Total de mujeres que contestaron en cada respuesta</h4>
                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table table-hover text-center">
                                <thead class="text-uppercase">
                                    <tr>
                                      <th scope="col">No</th>
                                      <th scope="col">A veces</th>
                                      <th scope="col">Si</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">{{ $table2[0] }}</th>
                                        <td>{{ $table2[1] }}</td>
                                        <td>{{ $table2[2] }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- basic table end -->
        <!-- basic table start -->
        <div class="col-lg-6 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Total de Hombres que contestaron en cada respuesta</h4>
                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table table-hover text-center">
                                <thead class="text-uppercase">
                                    <tr>
                                      <th scope="col">No</th>
                                      <th scope="col">A veces</th>
                                      <th scope="col">Si</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">{{ $table3[0] }}</th>
                                        <td>{{ $table3[1] }}</td>
                                        <td>{{ $table3[2] }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- basic table end -->
        <!-- basic table start -->
        <div class="col-lg-6 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Total otro contestaron en cada respuesta</h4>
                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table table-hover text-center">
                                <thead class="text-uppercase">
                                    <tr>
                                      <th scope="col">No</th>
                                      <th scope="col">A veces</th>
                                      <th scope="col">Si</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">{{ $table4[0] }}</th>
                                        <td>{{ $table4[1] }}</td>
                                        <td>{{ $table4[2] }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- basic table end -->
    </div>
</div>
@endsection
