<html>
    <head>
        <title>CRUD</title>
        <style>
            #customers {
              font-family: Arial, Helvetica, sans-serif;
              border-collapse: collapse;
              width: 100%;
            }            
            #customers td, #customers th {
              border: 1px solid #ddd;
              padding: 8px;
            }            
            #customers tr:nth-child(even){background-color: #f2f2f2;}            
            #customers tr:hover {background-color: #ddd;}            
            #customers th {
              padding-top: 12px;
              padding-bottom: 12px;
              text-align: left;
              background-color: #04AA6D;
              color: white;
            }
        </style>
    </head>
    <body>
        <a href="todo_create"><h2>Add New Records</h2></a>
        {{ session('mgs') }}
        <br>
        <table id="customers">
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Email</td>
                <td>Created At</td>
                <td>Action</td>
            </tr>
            <?php $i = 1; ?>
            @foreach ($row as $todo)
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $todo->name }}</td>
                <td>{{ $todo->email }}</td>
                <td>{{ $todo->created_at }}</td>
                <td>
                    <a href="todo_delete/{{ $todo->id }}">Delete</a>
                    <a href="todo_edit/{{ $todo->id }}">Edit</a>
                </td>
            </tr>
            <?php $i++; ?>
            @endforeach
        </table>
    </body>
</html>