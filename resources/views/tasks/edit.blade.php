<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>STUDENT TABLE</title>
<style>
    table {
        width: 49%;
        border-collapse:
    }
    th, td {
        border: 1px solid #ddd;
        padding: 20px;
        text-align: left;
         
    }
    th {
        background-color: #f2f2f2;
    }


   
</style>
</head>
<body>

<table>
    <thead>
        <tr>
            <th style="width: 265px;text-align:center;">STUDENT NAME</th>
            <th style="text-align:center;">ROLL</th>
            <!-- <th>Edit</th>
            <th>Delete</th> -->
        </tr>
    </thead>
</table>

</body>
</html>


<form id="updateForm" action="{{ route('tasks.update', $task->id) }}" method="POST">
    @csrf
    @method('PUT')
    
    <textarea name="name" rows="" cols="39" style="text-align:center;">  {{ $task->name}}</textarea>
    <textarea name="description" rows="" cols="53" style="text-align:center;">  {{ $task->description }}</textarea>
    <button type="submit" style="border: 1px solid #ccc; padding: 1px 10px; background-color: black; color: white; font-size: 18px; cursor: pointer;">Update Task</button>
</form>
<script>
document.addEventListener('DOMContentLoaded', function() {
    
    var form = document.getElementById('updateForm');

   
    document.addEventListener('keypress', function(event) {
        if (event.key === 'Enter') {
            
            form.submit();
        }
    });
});
</script>