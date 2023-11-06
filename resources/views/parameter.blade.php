@extends('layouts.app')

@section('contents')

<style>
    .col {
        font-weight: bold;
        font-style: italic;
        color: cornflowerblue;
        font-size: 30px;
    }

    .form-control {
        border-radius: 15px;
        height: 45px;
    }

    .btn-warning {
        padding-left: 30px;
        padding-right: 30px;
        border-radius: 13px;
        height: 45px;
        font-weight: bold;
    }
</style>

<div class="container mt-5">
    <div class="row mt-5">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('parameter.edit', ['id' => 1, 'name' => 'AFAQ', 'password' => '1234']) }}" method="GET" id="myForm">
                    @csrf
                    <div class="col">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>

                    <div class="col">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" class="form-control" required>
                    </div>

                    <div class="btn-group mb-5 mt-3">
                        <button type="submit" id="submit" class="btn btn-warning">Submit</button>
                    </div>

                    <div id="message" style="display: none;"></div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
 $(document).ready(function() {
    $("#submit").on('click', function() {
        var id = 1; 
        var name = $('#name').val();
        var password = $('#password').val();

        $.ajax({
            type: 'GET',
            url: "{{ route('parameter.edit', ['id' => 1, 'name' => 'AFAQ', 'password' => '1234']) }}", // Update with the actual values
            data: {
                "_token": "{{ csrf_token() }}",
                "id": id,
                "name": name,
                "password": password,
            },
            success: function(data) {
                console.log(data);
                $('#message').html('<h3>' + data + '</h3>').css('color', 'red').show();

                setTimeout(function() {
                    $('#message').hide();
                }, 1500);
            }
        });
    });
});

</script>

@endsection