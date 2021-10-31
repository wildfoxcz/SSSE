<?php
if(isset($page))
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
        <form action="{{ route('admin.pages.update', $page) }}" method="post" enctype="multipart/form-data">
            @method('patch')
    @else
        <form action="{{ route('admin.pages.store') }}" method="post" enctype="multipart/form-data">
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
