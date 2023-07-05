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
                                        <p id="nameErrorMessage" class="help is-danger">* {{ $message }}</p>
                                        @enderror
                                        <p id="name-help" class="help is-danger"></p>
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
                                        <p id="colorErrorMessage" class="help is-danger">* {{ $message }}</p>
                                        @enderror
                                        <p id="color-help" class="help is-danger"></p>
                                    </div>

                                    <div class="field">
                                        <div>
                                            <label class="label"> <span style="color: red">*</span> Points</label>
                                        </div>
                                        <div class="control">
                                            <input name="points" id="points" class="input @error('points') is-danger @enderror"
                                                   type="number" min="0" value="{{ old('points') }}" placeholder="Must be a number, e.g: 124">
                                            @error('points')
                                            <p class="help is-danger">* {{ $message }}</p>
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
                                        <button type="reset" class="button is-warning" onclick="resetAlert(this)">Reset</button>
                                        <div class="alert" style="display: none;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="column is-12">
                <form method="POST" action="{{ route('houses.cancelAlert') }}">
                    @csrf
                    <div>
                        <div class="control">
                            <button type="submit" class="button is-light">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <style>
        .alert {
            display: inline-block;
            background-color: #48c78e;
            color: #FFF;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>

    <script>
        function resetAlert(button) {
            var alertElement = button.nextElementSibling;
            if (alertElement.style.display === 'none') {
                alertElement.innerHTML = '<i class="fas fa-check-circle"></i> Form successfully reset!';
                alertElement.style.display = 'inline-block';
            } else {
                alertElement.style.display = 'none';
            }
        }

        // Add an event listener to the name input field
        var nameInput = document.querySelector('input[name="name"]');
        var nameHelp = document.getElementById('name-help');
        var nameErrorMessage = document.getElementById('nameErrorMessage');

        nameInput.addEventListener('change', function () {
            var value = nameInput.value;
            var containsNumbers = /\d/.test(value);
            var onlyLetters = /^[A-Za-z]+$/.test(value);

            // Change the border color and help message based on the input value
            if (containsNumbers || !onlyLetters) {
                nameInput.classList.add('is-danger');
                nameInput.classList.remove('is-success');
                nameHelp.innerHTML = '* Only letters are allowed';
                nameHelp.style.display = 'block';
                nameErrorMessage.style.display = 'none';
            } else {
                nameInput.classList.remove('is-danger');
                nameInput.classList.add('is-success');
                nameHelp.innerHTML = ' ';
                nameHelp.style.display = 'none';
            }
        });

        // Add an event listener to the color input field
        var colorInput = document.querySelector('input[name="color"]');
        var colorHelp = document.getElementById('color-help');
        var colorErrorMessage = document.getElementById('colorErrorMessage');

        colorInput.addEventListener('change', function () {
            var value = colorInput.value;
            var validColorNames = ['blue', 'yellow', 'red', 'magenta']; // Add more color names if needed

            // Change the border color and help message based on the input value
            if (validColorNames.includes(value.toLowerCase())) {
                colorInput.classList.remove('is-danger');
                colorInput.classList.add('is-success');
                colorHelp.innerHTML = ' ';
                colorHelp.style.display = 'none';
            } else {
                colorInput.classList.add('is-danger');
                colorInput.classList.remove('is-success');
                colorHelp.innerHTML = '* Only valid color names are allowed';
                colorHelp.style.display = 'block';
                colorErrorMessage.style.display = 'none';
            }
        });
    </script>
@endsection
