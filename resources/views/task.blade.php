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
                <div class="col">
                    <label for="">Tasks</label>
                    <input type="text" id="task" class="form-control" required>
                </div>
                <div class="col">
                    <label for="">Task Option</label>
                    <select class="form-select form-control" id="taskOption" aria-label="Default select example">
                        <option value="option1">Option:1</option>
                        <option value="option2">Option:2</option>
                    </select>
                </div>
                <div class="btn-group mb-5 mt-3">
                    <button type="button" id="submit" class="btn btn-warning">Submit</button>
                </div>

                <div class="row">
                    <div class="col-md-8"></div>
                    <div class="col-md-4">
                        <div class="btn-group mb-5 mt-3">
                            <button type="button" id="btn-primary" class="btn btn-dark">Show Hide:2</button>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="btn-group mb-5 mt-3">
                            <button type="button" id="btn-dark" class="btn btn-dark">Show Hide:1</button>
                        </div>
                    </div>
                </div>

                <div class="row" id="taskList">
                    <div class="col" id="option1Tasks">
                        <h3>Option:1 Tasks</h3>
                        <div id="toogle">

                        </div>
                    </div>
                    <div class="col" id="option2Tasks">
                        <h3>Option:2 Tasks</h3>
                        <div id="toogle2">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $("#submit").on('click', function() {
            var task = $("#task").val();
            var taskOption = $("#taskOption").val();
            if (task && taskOption !== "Select Option") {
                var taskElement = "<h5>Task: " + task + ", Option: " + taskOption + "</h5>";

                if (taskOption === "option1") {
                    $("#toogle").append(taskElement);
                } else if (taskOption === "option2") {
                    $("#toogle2").append(taskElement);
                }

                $("#task").val("");
                $("#taskOption").val("Select Option");
            }
        });
        $("#btn-primary").on('click', function() {
            $("#toogle2").toggle(1000);
        });

        $("#btn-dark").on('click', function() {
            $("#toogle").toggle(1000);
        });
    });
</script>



@endsection

{{-- <script>
    $(document).ready(function() {
        $("#submit").on('click', function() {
            var task = $("#task").val();
            var taskOption = $("#taskOption").val();
            if (task  && taskOption !== "Select Option") {
                var taskElement = "<p>Task: " + task + ", Option: " + taskOption + "</p>";

                if (taskOption === "option1") {
                    $("#option1Tasks").append(taskElement);
                } else if (taskOption === "option2") {
                    $("#option2Tasks").append(taskElement);
                }

                $("#task").val("");
                $("#taskOption").val("Select Option");
            }
        });
    });
</script> --}}