<?php
if(isset($partner))
    $mode = 'edit';
else
    $mode = 'create';
$actionText = ($mode == 'edit' ? 'Upravit' : 'Vytvořit').' stránku';
?>

@extends('admin.layout.layout')

@section('title', $actionText)

@section('content')
    <!-- Default box -->
    @if($mode == 'edit')
        <form action="{{ route('admin.partners.update', $partner) }}" method="post" enctype="multipart/form-data">
            @method('patch')
    @else
        <form action="{{ route('admin.partners.store') }}" method="post" enctype="multipart/form-data">
    @endif
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Základní informace</h3>

                            <div class="card-tools">

                            </div>
                        </div>

                        <div class="card-body">

                            <div class="form-group">
                                <label for="inputName">Název partnera</label>
                                <input type="text" id="inputName" class="form-control" name="name" value="{{ old('name', $mode == 'edit' ? $partner->name : null) }}">
                            </div>
                            @if ($errors->has("name"))
                                @foreach ($errors->get("name") as $error)
                                    <div class="errorMessage">
                                        <strong>{{$error}}</strong>
                                    </div>
                                @endforeach
                            @endif

                            <div class="form-group">
                                <label for="inputUrl">URL adresa partnera</label>
                                <input type="text" id="inputUrl" class="form-control" name="url" value="{{ old('url', $mode == 'edit' ? $partner->url : null) }}">
                            </div>
                            @if ($errors->has("url"))
                                @foreach ($errors->get("url") as $error)
                                    <div class="errorMessage">
                                        <strong>{{$error}}</strong>
                                    </div>
                                @endforeach
                            @endif

                            <div class="form-group">
                                <label for="image">Obrázek č.1</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image" name="image">
                                        <label class="custom-file-label" for="image">vyberte soubor</label>
                                    </div>
                                </div>
                            </div>
                            @if ($errors->has("image"))
                                @foreach ($errors->get("image") as $error)
                                    <div class="errorMessage">
                                        <strong>{{$error}}</strong>
                                    </div>
                                @endforeach
                            @endif

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                    <!-- /.card -->
                </div>


            <div class="row">
                <div class="col-12">
                    <a href="#" class="btn btn-secondary">Zrušit</a>
                    <input type="submit" value="{{ $actionText }}" class="btn btn-success float-right">
                </div>
            </div>
        </form>
@endsection
