@extends('common.master')

@section('content')
    <section class="hero is-medium is-bold is-primary">
        <div class="hero-body">
            <div class="container">
                <p class="title is-2">Houses</p>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            @if (session()->has('alert'))
                <div class="notification is-success">
                    <i class="fas fa-check-circle"></i> <!-- Checkmark icon -->
                    {{ session('alert') }}
                </div>
            @endif

            @if (session()->has('alertCancellation'))
                <div class="notification is-info">
                    <i class="fas fa-info-circle"></i> <!-- "i" icon -->
                    {{ session('alertCancellation') }}
                </div>
            @endif

            <div class="columns">
                <div class="column is-full">
                    <div class="content">
                        <div class="has-text-right">
                            <a href="/houses/create" class="button is-primary">Add a new house...</a>
                        </div>

                        <div class="column is-12">
                            @foreach($houses as $house)
                                <div class="panel">
                                    <a class="panel-block" href="{{ route('houses.show', $house) }}">
                                        <article class="media">
                                            <div class="media-content">
                                                <div class="content">
                                                    <p>
                                                        <strong>{{ $house->name }}</strong>
                                                        <small>{{ $house->color }}</small>
                                                        <small>{{ $house->status() }}</small>
                                                        <br>
                                                        {{ $house->points }}
                                                    </p>
                                                </div>
                                            </div>
                                        </article>
                                    </a>
                                </div>
                            @endforeach
                            {{ $houses->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
