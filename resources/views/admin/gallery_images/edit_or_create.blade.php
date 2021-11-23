<?php
if(isset($post))
    $mode = 'edit';
else
    $mode = 'create';
$actionText = ($mode == 'edit' ? 'Upravit' : 'Vytvořit').' fotku';
?>

@extends('admin.layout.layout')

@section('title', $actionText)

@section('content')
    <!-- Default box -->
    @if($mode == 'edit')
        <form action="{{ route('admin.gallery_images.update', $post) }}" method="post" enctype="multipart/form-data">
            @method('patch')
    @else
        <form action="{{ route('admin.gallery_images.store') }}" method="post" enctype="multipart/form-data">
    @endif
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Základní informace</h3>

                            <div class="card-tools">

                            </div>
                        </div>

                        <div class="card-body">
                            {{ $errors }}
                            <div class="form-group">
                                <label for="image">Obrázek</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image" name="image">
                                        <label class="custom-file-label" for="exampleInputFile">vyberte soubor</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <a href="#" class="btn btn-secondary">Zrušit</a>
                    <input type="submit" value="{{ $actionText }}" class="btn btn-success float-right">
                </div>
            </div>
        </form>
@endsection
