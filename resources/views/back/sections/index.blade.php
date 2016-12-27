@extends('back.template')

@section('head')

    <style type="text/css">
        .table { margin-bottom: 0; }
        .panel-heading { padding: 0 15px; }
        .border-red {
            border-style: solid;
            border-width: 5px;
            border-color: red !important;
        }
    </style>

@endsection

@section('main')

  @include('back.partials.entete', ['title' => trans('back/sections.dashboard'), 'icon' => 'envelope', 'fil' => trans('back/sections.sections')])

    <div class="row col-lg-12">
        @foreach ($sections as $sect)

                    <table class="table">
                        <thead>
                            <tr>
                                <th class="col-lg-3">{{ trans('back/sections.name') }}</th>
                                <th class="col-lg-3">{{ trans('back/sections.date') }}</th>                          
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{ $sect->name }}</td>
                            <td>{{ $sect->created_at }}</td>
                        </tr>
                    </tbody>
                    </table>    

        @endforeach
    </div>
    <div class="row col-lg-12">
        <div class="pull-right">{!! $sections->links() !!}</div>
    </div>
@endsection