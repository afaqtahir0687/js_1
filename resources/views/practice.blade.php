@extends('layouts.app')

@section('contents')
  <style>
    .completed {
      text-decoration: line-through;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row mt-5">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <input type="text" id="taskInput" class="form-control" placeholder="Add a new task">
            <button id="addTask" class="btn btn-primary mt-4">Add</button>
            <ul id="taskList">
            </ul>
        </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      $("#addTask").on("click", function() {
        var taskText = $("#taskInput").val();
        if (taskText) {
          $("#taskList").append("<li>" + taskText + " <button class='delete'>Delete</button> <button class='complete'>Mark as Completed</button></li>");
          $("#taskInput").val("");
        }
      });

      $("#taskList").on("click", ".delete", function() {
        $(this).parent().remove();
      });

      $("#taskList").on("click", ".complete", function() {
        $(this).parent().toggleClass("completed");
      });

      $("#clearCompleted").on("click", function() {
        $(".completed").remove();
      });
    });
  </script>

@endsection
