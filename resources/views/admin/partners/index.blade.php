@extends('admin.layout.layout')

@section('title', 'Partneři')

@section('content')
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Seznam partnerů</h3>

            <div class="card-tools">
                <a class="btn btn-primary btn-sm" href="{{ route('admin.partners.create') }}">
                    Přidat partnera
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
                        Název partnera
                    </th>
                    <th style="width:10%">
                        Vytvořeno
                    </th>
                    <th style="width: 20%">
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($partners as $partner)
                    <tr>
                        <td>
                            #{{ $partner->id }}
                        </td>
                        <td>
                            {{ $partner->name }}
                        </td>
                        <td>
                            {{ \Carbon\Carbon::parse($partner->created_at)->format('d.m.Y h:m') }}
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-info btn-sm" href="{{ route('admin.partners.edit', $partner) }}">
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
