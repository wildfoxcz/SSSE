<?php
if(isset($field))
    $mode = 'edit';
else
    $mode = 'create';
$actionText = ($mode == 'edit' ? 'Upravit' : 'Vytvořit').' obor';
?>

@extends('admin.layout.layout')

@section('title', $actionText)

@section('content')
    <!-- Default box -->
    @if($mode == 'edit')
        <form action="{{ route('admin.fields.update', $field) }}" method="post" enctype="multipart/form-data">
            @method('patch')
    @else
        <form action="{{ route('admin.fields.store') }}" method="post" enctype="multipart/form-data">
    @endif
            @csrf
            <div class="row">
                <div class="col-md-6">

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Základní informace</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>

                        <div class="card-body">

                            <div class="form-group">
                                <label for="inputName">Název oboru</label>
                                <input type="text" id="inputName" class="form-control" name="name" value="{{ old('name', $mode == 'edit' ? $field->name : null) }}">
                            </div>
                            @if ($errors->has("name"))
                                @foreach ($errors->get("name") as $error)
                                    <div class="errorMessage"> <!-- @todo find class for errors in adminLTE -->
                                        <strong>{{$error}}</strong>
                                    </div>
                                @endforeach
                            @endif
                            <div class="form-group">
                                <label for="inputDescription">Popis oboru</label>
                                <textarea id="inputDescription" class="ckeditor form-control" rows="10" name="description"
                                >{{ old('description', $mode == 'edit' ? $field->description : null) }}</textarea>
                            </div>
                            @if ($errors->has("description"))
                                @foreach ($errors->get("description") as $error)
                                    <div class="errorMessage">
                                        <strong>{{$error}}</strong>
                                    </div>
                                @endforeach
                            @endif

                            <div class="form-group">
                                <label for="inputDescription">Proč studovat?</label>
                                <textarea id="inputDescription" class="ckeditor form-control" rows="10" name="description"
                                >{{ old('description', $mode == 'edit' ? $field->description : null) }}</textarea>
                            </div>
                            @if ($errors->has("description"))
                                @foreach ($errors->get("description") as $error)
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
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Základní informace</h3>

                            <div class="card-tools">

                            </div>
                        </div>

                        <div class="card-body">

                            <div class="form-group">
                                <label for="inputName">Název stránky</label>
                                <input type="text" id="inputName" class="form-control" name="name" value="{{ old('name', $mode == 'edit' ? $page->name : null) }}">
                            </div>
                            @if ($errors->has("name"))
                                @foreach ($errors->get("name") as $error)
                                    <div class="errorMessage"> <!-- @todo find class for errors in adminLTE -->
                                        <strong>{{$error}}</strong>
                                    </div>
                                @endforeach
                            @endif
                            <div class="form-group">
                                <label for="inputDescription">Obsah stránky</label>
                                <textarea id="inputDescription" class="ckeditor form-control" rows="10" name="content"
                                >{{ old('content', $mode == 'edit' ? $page->content : null) }}</textarea>

                                <script type="text/javascript">
                                    CKEDITOR.replace('content', {
                                        filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
                                        filebrowserUploadMethod: 'form'
                                    });
                                </script>

                            </div>
                            @if ($errors->has("description"))
                                @foreach ($errors->get("description") as $error)
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
