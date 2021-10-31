@extends('admin.layout.layout')

@section('title', 'Obory')

@section('content')
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Seznam oborů</h3>

            <div class="card-tools">
                <a class="btn btn-primary btn-sm" href="{{ route('admin.fields.create') }}">
                    Přidat stránku
                </a>
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                <tr>
                    <th style="width: 1%">
                        #
                    </th>
                    <th style="width: 20%">
                        Název stránky
                    </th>
                    <th style="width:10%">
                        Vytvořeno
                    </th>
                    <th style="width: 20%">
                        Slug
                    </th>
                    <th style="width: 20%">
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($fields as $field)
                    <tr>
                        <td>
                            #{{ $field->id }}
                        </td>
                        <td>
                            {{ $field->name }}
                        </td>
                        <td>
                            {{ \Carbon\Carbon::parse($field->created_at)->format('d.m.Y h:m') }}
                        </td>
                        <td>
                            {{ $field->slug }}
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-info btn-sm" href="{{ route('admin.fields.edit', $field) }}">
                                Upravit
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
@endsection
