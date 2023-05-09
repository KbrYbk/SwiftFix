@extends('layouts.app')

@section('content')
<div class="container pt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Добавление нового бренда</div>
                <div class="card-body">
                    <form action="{{ route('brands.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="name">Название бренда</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="img">Изображение бренда</label>
                            <input type="file" name="img" class="form-control-file" required>
                        </div>

                        <button type="submit" class="btn btn-outline-secondary">Добавить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection