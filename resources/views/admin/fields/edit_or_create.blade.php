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
                            {{ $errors ?? '' }}
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
                                <textarea id="inputDescription" class="ckeditor form-control" rows="10" name="reasons"
                                >{{ old('reasons', $mode == 'edit' ? $field->reasons : null) }}</textarea>
                            </div>
                            @if ($errors->has("reasons"))
                                @foreach ($errors->get("reasons") as $error)
                                    <div class="errorMessage">
                                        <strong>{{$error}}</strong>
                                    </div>
                                @endforeach
                            @endif

                            <div class="form-group">
                                <label for="inputDescription">Základní informace</label>
                                <textarea id="inputDescription" class="ckeditor form-control" rows="10" name="basic_info"
                                >{{ old('basic_info', $mode == 'edit' ? $field->basic_info : null) }}</textarea>
                            </div>

                        </div>
                        <!-- /.card-body -->
                    </div>


                    <!-- /.card -->
                </div>


                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Podrobné informace</h3>

                            <div class="card-tools">
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputDescription">Uplatnění a profil absolventa</label>
                                <textarea id="inputDescription" class="ckeditor form-control" rows="10" name="where_can"
                                >{{ old('where_can', $mode == 'edit' ? $field->where_can : null) }}</textarea>
                            </div>
                            @if ($errors->has("where_can"))
                                @foreach ($errors->get("description") as $error)
                                    <div class="errorMessage">
                                        <strong>{{$error}}</strong>
                                    </div>
                                @endforeach
                            @endif

                            <div class="form-group">
                                <label for="inputDescription">Učební plan</label>
                                <textarea id="inputDescription" class="ckeditor form-control" rows="10" name="learn_plan"
                                >{{ old('learn_plan', $mode == 'edit' ? $field->learn_plan : null) }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="inputDescription">Co budu umět?</label>
                                <textarea id="inputDescription" class="ckeditor form-control" rows="10" name="what_can"
                                >{{ old('what_can', $mode == 'edit' ? $field->what_can : null) }}</textarea>
                            </div>

                        </div>

                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Galerie a odkazy</h3>

                            <div class="card-tools">
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="form-group">
                                <label for="image_1">Obrázek č.1</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image_1" name="image_1">
                                        <label class="custom-file-label" for="exampleInputFile">vyberte soubor</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="image_2">Obrázek č.2</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image_2" name="image_2">
                                        <label class="custom-file-label" for="exampleInputFile">vyberte soubor</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="image_3">Obrázek č.3</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image_3" name="image_3">
                                        <label class="custom-file-label" for="exampleInputFile">vyberte soubor</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputName">Odkaz na přihlášku ke studiu</label>
                                <input type="text" id="inputName" class="form-control" name="join_url" value="{{ old('join_url', $mode == 'edit' ? $field->join_url : null) }}">
                            </div>

                            <div class="form-group">
                                <label for="inputName">Informace o příjmacím řízení</label>
                                <input type="text" id="inputName" class="form-control" name="about_url" value="{{ old('about_url', $mode == 'edit' ? $field->about_url : null) }}">
                            </div>

                            <div class="form-group">
                                <label for="inputName">VŠP</label>
                                <input type="text" id="vsp" class="form-control" name="vsp" value="{{ old('vsp', $mode == 'edit' ? $field->vsp : null) }}">
                            </div>

                        </div>
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
