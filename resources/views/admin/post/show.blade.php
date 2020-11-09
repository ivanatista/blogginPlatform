@extends('layouts.admin.master')

@section('content')
<div class="main-content-inner">
    <div class="row">
        <!-- Progress Table start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Publicaciones</h4>
                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table table-hover progress-table text-center">
                                <thead class="text-uppercase">
                                    <tr>
                                        <th scope="col">Titulo</th>
                                        <th scope="col">Tema</th>
                                        <th scope="col">Estado</th>
                                        <th scope="col">Creado</th>
                                        <th scope="col">Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $post)
                                        <tr>
                                            <td> {{ $post->title }} </td>
                                            <td> {{ $post->category }} </td>
                                            <td>
                                                @if ($post->active === 1)
                                                    <span class="status-p bg-primary">Activa</span>
                                                @else
                                                    <span class="status-p bg-warning">Desactivada</span>
                                                @endif
                                            </td>
                                            <td> {{ $post->created_at }} </td>
                                            <td>
                                                <ul class="d-flex justify-content-center">
                                                    <li class="mr-3"><a href="/admin/post/{{ $post->id }}/edit" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                                    @if ($post->active)
                                                        <li>
                                                            <a href="/admin/post/{{ $post->id }}/toggle" class="text-danger">
                                                                <i class="ti-trash"></i>
                                                            </a>
                                                        </li>
                                                    @else
                                                        <li>
                                                            <a href="/admin/post/{{ $post->id }}/toggle" class="text-danger">
                                                                <i class="ti-plus"></i>
                                                            </a>
                                                        </li>
                                                    @endif
                                                    
                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach
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
