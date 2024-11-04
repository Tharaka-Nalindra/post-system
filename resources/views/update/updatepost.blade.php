<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <x-app-layout>

    <div style="padding-left: 42%; padding-top: 5%">
        <form action="{{ url('confirm_update',$data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="">Post Description</label>
                <input type="text" name="description" value="{{ $data->description }}">
            </div><br><br>
            <div>
                <label for="">current Image</label>
                <img src="/post/{{ $data->image }}" alt="" width="300px" height="300px">
            </div><br><br>
            <div>
                <label for="">Change Image</label>
                <input type="file" name="image">
            </div><br><br>
            <div style="padding-left:110px">
                <input type="submit" name="Update Post" value="Update Post" style="background-color: navy; padding:8px; width:120px; cursor:pointer; color:white; border-radius:8px; ">
            </div><br><br><br>
        </form>

        <form action="{{ url('view_post') }}" method="get">
            @csrf
            <div style="padding-left:110px">
                <input type="submit" value="View My Post"
                    style="background-color: navy; padding:8px; width:120px; cursor:pointer; color:white; border-radius:8px; ">
            </div>
        </form>
    </div>
</x-app-layout>
</body>

</html>
