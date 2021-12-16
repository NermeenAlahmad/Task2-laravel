<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <table border="1">
        <tr>
            <th> # </th>
            <th> Product Name </th>
            <th> Product Price </th>
        </tr>
        @foreach ( $products as $value )
        <tr>
            <td> {{$value['id']}} </td>
            <td> {{$value['name']}} </td>
            <td> {{$value['price']}} </td>
        </tr>
        @endforeach
    </table>


</body>
</html>
