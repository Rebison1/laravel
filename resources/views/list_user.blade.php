<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <h2> users list</h2>
    <style>
        table,th,td {
            border: 2px solid blanchedalmond;
        }
    </style>
    <table>

        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>mobile</th>
        <th>address</th>

    </table>
</head>
<tbody>
   @foreach ($users as $user)
   <tr>
    <td>{{$user->id}}</td>
    <td>{{$user->name}}</td>
    <td>{{$user->age}}</td>
    <td>{{$user->email}}</td>
    <td>{{$user->mobile}}</td>
    <td>{{$user->address}}</td>
   </tr>
   @endforeach
</tbody>
</html>
