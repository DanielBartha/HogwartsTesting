@extends('common.master')

@section('content')
    <section class="hero  is-medium  is-bold is-primary">
        <div class="hero-body">
            <div class="container">
                <p class="title is-2">O.W.L.s</p>
                <p class="subtitle is-3">Manage Ordinary Wizarding Levels</p>

            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-12">
                    <div class="content">
                        <table class="table is-fullwidth">
                            <thead>
                            <tr>
                                <th style="width: 5%">ID</th>
                                <th style="width: 60%">Name</th>
                                <th style="width: 10%">Version</th>
                                <th style="width: 25%">Scheduled</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($owls as $owl)
                                <tr>
                                    <td>{{ $owl->id }}</td>
                                    <td>
                                        <a href="#">
                                        {{ $owl->name }}
                                        </a>
                                    </td>
                                    <td><span class="tag">{{ $owl->version_nr }}</span></td>
                                    <td>{{ $owl->scheduled_at->toDayDateTimeString() }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
