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
        <a href="{{ route('todo.show') }}"><h2>Show All Records</h2></a>        
        <form action="{{ route('todo.update', [$row->id]) }}" method="POST">
            @csrf
            <table id="customers">
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" required value="{{ $row->name }}"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" required value="{{ $row->email }}"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit"></td>
                </tr>
            </table>
        </form>
    </body>
</html>