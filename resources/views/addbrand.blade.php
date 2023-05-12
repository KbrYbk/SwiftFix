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
                            <label for="formFile" class="form-label">Изображение бренда</label>
                            <input class="form-control" name="img" type="file" id="formFile" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="formFile" class="form-label">Изображение телефона на отдельной странице бренда</label>
                            <input class="form-control" name="img_slogan" type="file" id="formFile" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleColorInput" class="form-label">Выберите цвет фона на отдельной странице бренда:</label>
                            <input type="color" name="color" class="form-control form-control-color" id="exampleColorInput" value="#ffffff" title="Choose your color">
                        </div>

                        <div class="form-group">
                            <label for="exampleColorInput" class="form-label">Выберите цвет текста на отдельной странице бренда:</label>
                            <input type="color" name="text" class="form-control form-control-color" id="exampleColorInput" value="#000000" title="Choose your color">
                        </div>

                        <button type="submit" class="btn btn-outline-secondary">Добавить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection