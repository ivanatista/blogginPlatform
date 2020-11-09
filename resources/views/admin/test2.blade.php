@extends('layouts.admin.master')

@section('content')
<div class="main-content-inner">
    <div class="row">
        <!-- basic table start -->
        <div class="col-lg-6 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Cantidad por Niveles</h4>
                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table table-hover text-center">
                                <thead class="text-uppercase">
                                    <tr>
                                        <th scope="col">Lvl 1 (0a8)</th>
                                        <th scope="col">Lvl 2 (9a18)</th>
                                        <th scope="col">Lvl 3 (19a34)</th>
                                        <th scope="col">Lvl 4 (35a50)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">{{ $table1[0] }}</th>
                                        <td>{{ $table1[1] }}</td>
                                        <td>{{ $table1[2] }}</td>
                                        <td>{{ $table1[3] }}</td>
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
                    <h4 class="header-title">Total por Genero</h4>
                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table table-hover text-center">
                                <thead class="text-uppercase">
                                    <tr>
                                        <th scope="col">Mujeres</th>
                                        <th scope="col">Hombres</th>
                                        <th scope="col">Otros</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">{{ $table7[0] }}</th>
                                        <td>{{ $table7[1] }}</td>
                                        <td>{{ $table7[2] }}</td>
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
                    <h4 class="header-title">Cantidad Hombres por Niveles</h4>
                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table table-hover text-center">
                                <thead class="text-uppercase">
                                    <tr>
                                        <th scope="col">Lvl 1 (0a8)</th>
                                        <th scope="col">Lvl 2 (9a18)</th>
                                        <th scope="col">Lvl 3 (19a34)</th>
                                        <th scope="col">Lvl 4 (35a50)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">{{ $table2[0] }}</th>
                                        <td>{{ $table2[1] }}</td>
                                        <td>{{ $table2[2] }}</td>
                                        <td>{{ $table2[3] }}</td>
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
                    <h4 class="header-title">Cantidad Mujeres por Niveles</h4>
                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table table-hover text-center">
                                <thead class="text-uppercase">
                                    <tr>
                                        <th scope="col">Lvl 1 (0a8)</th>
                                        <th scope="col">Lvl 2 (9a18)</th>
                                        <th scope="col">Lvl 3 (19a34)</th>
                                        <th scope="col">Lvl 4 (35a50)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">{{ $table3[0] }}</th>
                                        <td>{{ $table3[1] }}</td>
                                        <td>{{ $table3[2] }}</td>
                                        <td>{{ $table3[3] }}</td>
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
                    <h4 class="header-title">Cantidad Otros por Niveles</h4>
                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table table-hover text-center">
                                <thead class="text-uppercase">
                                    <tr>
                                        <th scope="col">Lvl 1 (0a8)</th>
                                        <th scope="col">Lvl 2 (9a18)</th>
                                        <th scope="col">Lvl 3 (19a34)</th>
                                        <th scope="col">Lvl 4 (35a50)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">{{ $table4[0] }}</th>
                                        <td>{{ $table4[1] }}</td>
                                        <td>{{ $table4[2] }}</td>
                                        <td>{{ $table4[3] }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- basic table end -->
        <!-- Progress Table start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Total Mujeres Completados por Edades</h4>
                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table table-hover progress-table text-center">
                                <thead class="text-uppercase">
                                    <tr>
                                        <th scope="col">Menor de Edad</th>
                                        <th scope="col">18-24</th>
                                        <th scope="col">25-29</th>
                                        <th scope="col">30-35</th>
                                        <th scope="col">36-39</th>
                                        <th scope="col">40-44</th>
                                        <th scope="col">45+</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">{{ $table5[0] }}</th>
                                        <td>{{ $table5[1] }}</td>
                                        <td>{{ $table5[2] }}</td>
                                        <td>{{ $table5[3] }}</td>
                                        <td>{{ $table5[4] }}</td>
                                        <td>{{ $table5[5] }}</td>
                                        <td>{{ $table5[6] }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Total Hombres Completados por Edades</h4>
                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table table-hover progress-table text-center">
                                <thead class="text-uppercase">
                                    <tr>
                                        <th scope="col">Menor de Edad</th>
                                        <th scope="col">18-24</th>
                                        <th scope="col">25-29</th>
                                        <th scope="col">30-35</th>
                                        <th scope="col">36-39</th>
                                        <th scope="col">40-44</th>
                                        <th scope="col">45+</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">{{ $table6[0] }}</th>
                                        <td>{{ $table6[1] }}</td>
                                        <td>{{ $table6[2] }}</td>
                                        <td>{{ $table6[3] }}</td>
                                        <td>{{ $table6[4] }}</td>
                                        <td>{{ $table6[5] }}</td>
                                        <td>{{ $table6[6] }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Progress Table end -->
    </div>
</div>
@endsection
