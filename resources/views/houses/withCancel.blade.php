@extends('common.master')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-12">
                    <form method="POST" action="{{ route('houses.store') }}">
                        @csrf
                        <div class="card">
                            <header class="card-header">
                                <p class="card-header-title">
                                    Add a new house
                                </p>
                            </header>

                            <div class="card-content">
                                <div class="content">
                                    <div>
                                        <label class="label"><span style="color: red">*</span> Required fields</label>
                                    </div> <br>
                                    <div class="field">
                                        <div>
                                            <label class="label"> <span style="color: red">*</span> Name</label>
                                        </div>
                                        <div class="control">
                                            <input name="name" class="input @error('name') is-danger @enderror"
                                                   type="text" value="{{ old('name') }}" placeholder="e.g: Gryffindor ">
                                        </div>
                                        @error('name')
                                        <p class="help is-danger">{{ $message }}*</p>
                                        @enderror
                                    </div>

                                    <div class="field">
                                        <div>
                                            <label class="label"> <span style="color: red">*</span> Color</label>
                                        </div>
                                        <div class="control">
                                            <input name="color" class="input @error('color') is-danger @enderror"
                                                   type="text" value="{{ old('color') }}" placeholder="e.g: Red">
                                        </div>
                                        @error('color')
                                        <p class="help is-danger">{{ $message }}*</p>
                                        @enderror
                                    </div>

                                    <div class="field">
                                        <div>
                                            <label class="label"> <span style="color: red">*</span> Points</label>
                                        </div>
                                        <div class="control">
                                            <input name="points" id="points" class="input @error('points') is-danger @enderror"
                                                   type="number" min="0" value="{{ old('points') }}" placeholder="Must be a number, e.g: 124">
                                            @error('points')
                                            <p class="help is-danger">{{ $message }}</p>
                                            @enderror
                                            <p id="points-help" class="help is-danger"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="field is-grouped">
                                    <div class="control">
                                        <button type="submit" class="button is-primary">Save</button>
                                    </div>
                                    <div class="control">
                                        <button type="reset" class="button is-warning" onclick="resetAlert()">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>

    <div id="customAlert" class="alert" style="display: none;">
        <span class="closebtn" onclick="closeAlert()">&times;</span>
        This is a custom alert box.
    </div>

    <script>
        function resetAlert() {
            document.getElementById('customAlert').style.display = 'block';
        }

        function closeAlert() {
            document.getElementById('customAlert').style.display = 'none';
        }
    </script>
@endsection
