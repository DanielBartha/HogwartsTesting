@extends('common.master')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-12"> {{-- These divs are needed for proper layout --}}
                    <form method="POST" action="{{ route('houses.update', $house) }}">
                        @csrf
                        @method('PUT')
                        <div class="card"> {{-- The form is placed inside a Bulma Card component --}}
                            <header class="card-header">
                                <p class="card-header-title"> {{-- The Card header content --}}
                                    Edit your House
                                </p>
                            </header>

                            <div class="card-content">
                                <div class="content">

                                    {{-- Here are all the form fields --}}
                                    <div class="field">
                                        <label class="label">Name</label>
                                        <div class="control">
                                            <input name="name" class="input @error('name') is-danger @enderror"
                                                   type="text" value="{{ $house->name }}" placeholder="Your house name here...">
                                        </div>
                                        @error('name')
                                        <p class="help is-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="field">
                                        <label class="label">Color</label>
                                        <div class="control">
                                            <textarea name="color"
                                                      class="textarea @error('color') is-danger @enderror"
                                                      type="text" placeholder="A short summary...">{{ $house->color }}</textarea>
                                        </div>
                                        @error('color')
                                        <p class="help is-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="field">
                                        <label class="label">Points</label>
                                        <div class="control">
                                            <textarea name="points"
                                                      class="textarea @error('points') is-danger @enderror"
                                                      type="text" placeholder="Your points...">{{ $house->points }}</textarea>
                                        </div>
                                        @error('color')
                                        <p class="help is-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                </div>
                                <div class="field is-grouped">
                                    {{-- Here are the form buttons: save, reset and cancel --}}
                                    <div class="control">
                                        <button type="submit" class="button is-primary">Save</button>
                                    </div>
                                    <div class="control">
                                        <button type="reset" class="button is-warning">Reset</button>
                                    </div>
                                    <div class="control">
                                        <a type="button" href="/houses" class="button is-light">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                    <form method='POST' action="{{ route('houses.destroy', $house) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="button is-primary">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection


