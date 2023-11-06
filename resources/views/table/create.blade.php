@extends('layouts.app')

@section('contents')

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
<div class="container mt-5">
    {{-- <h2>Student Table</h2> --}}
    <table class="table table-bordered" id="studentTable">
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Due Date</th> 
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>A</td>
                <td>15</td>
                <td>19/09/2023</td> 
            </tr>
            <tr>
                <td>B</td>
                <td>18</td>
                <td>23/09/2023</td>
            </tr>
            <tr>
                <td>C</td>
                <td>16</td>
                <td>28/09/2023</td> 
            </tr>
            <tr>
                <td>D</td>
                <td>13</td>
                <td>16/09/2023</td> 
            </tr>
            <tr>
                <td>E</td>
                <td>20</td>
                <td>13/09/2023</td> 
            </tr>
            <tr>
                <td>F</td>
                <td>25</td>
                <td>19/09/2023</td> 
            </tr>
            <tr>
                <td>G</td>
                <td>12</td>
                <td>21/09/2023</td> 
            </tr>
            <tr>
                <td>H</td>
                <td>21</td>
                <td>25/09/2023</td> 
            </tr>
            <tr>
                <td>I</td>
                <td>09</td>
                <td>16/09/2023</td> 
            </tr>
            <tr>
                <td>J</td>
                <td>18</td>
                <td>17/09/2023</td> 
            </tr>
            
        </tbody>
    </table>
</div>

<!-- Include jQuery and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
$(document).ready(function () {
    $('#studentTable tbody tr').each(function () {
        var age = parseInt($(this).find('td:eq(1)').text());
        var dueDate = $(this).find('td:eq(2)').text();
        
        var currentDate = new Date().toLocaleDateString('en-GB', {
            day: '2-digit',
            month: '2-digit',
            year: 'numeric',
        });

        if (age > 18 && dueDate === currentDate) {
            $(this).addClass('table-warning');
        } else if (age > 18) {
            $(this).addClass('table-danger');
        } else {
            $(this).addClass('table-success');
        }
    });
});

</script>

</body>
</html>
                

@endsection