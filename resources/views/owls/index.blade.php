@extends('common.master')

@section('content')
    <section class="hero  is-medium  is-bold is-primary">
        <div class="hero-body">
            <div class="container">
                <p class="title is-2">Owls</p>

            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-full">
                    <div class="content">

                        <div class="has-text-right">
                            <a href="/owls/create" class="button is-primary">Add a new owl...</a>
                        </div>

                        <div class="column is-12">
                            @foreach($owls as $owl)
                                <div class="panel">
                                    <a class="panel-block" href="{{ route('owls.show', $owl) }}">
                                        <article class="media">
                                            <div class="media-content">
                                                <div class="content">
                                                    <p>
                                                        <strong>{{ $owl->name }}</strong>
                                                        <small>{{ $owl->version_nr }}</small>
                                                        <small>{{ $owl->scheduled_at }}</small>
                                                        <small>{{ $owl->published_at }}</small>
                                                        <br>
                                                        {{ $owl->topics }}
                                                    </p>
                                                </div>
                                            </div>
                                        </article>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
    </section>
@endsection

