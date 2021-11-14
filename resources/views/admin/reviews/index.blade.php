@extends('admin.layout.layout')

@section('title', 'Partneři')

@section('content')
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Seznam recenzí</h3>

            <div class="card-tools">
                <a class="btn btn-primary btn-sm" href="{{ route('admin.reviews.create') }}">
                    Přidat recenzi
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
                        Jméno
                    </th>
                    <th style="width:10%">
                        Podnadpis
                    </th>
                    <th style="width:10%">
                        Vytvořeno
                    </th>
                    <th style="width: 20%">
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($reviews as $review)
                    <tr>
                        <td>
                            #{{ $review->id }}
                        </td>
                        <td>
                            {{ $review->name }}
                        </td>
                        <td>
                            {{ $review->subtitle }}
                        </td>
                        <td>
                            {{ \Carbon\Carbon::parse($review->created_at)->format('d.m.Y h:m') }}
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-info btn-sm" href="{{ route('admin.reviews.edit', $review) }}">
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
