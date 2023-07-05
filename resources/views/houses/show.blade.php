@extends('common.master')

@section('content')
    <section class="hero  is-large  is-bold is-primary"  style="background-color: #c8c2cf" >
        <div class="hero-body">
            <div class="container">
                <p class="title is-2">{{$house->name}}</p>
                <p class="subtitle is-3"></p>

            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">

                <div class="column is-12">

                    <div class="content">
                        <p>Points: {{ $house->points }}</p>

                        <p>Status: {{ $house->status() }}</p>

                        {!! $house->color !!}
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection



