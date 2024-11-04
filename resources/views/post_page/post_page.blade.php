<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table,tr,td{
            border: 1px solid black;
            border-collapse: collapse;
        }

        tr,td{
            background: rgb(175, 170, 170);
            text-align: center;
        }
    </style>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <x-app-layout>
        <div style="padding-left:15%;padding-top:30px;">
            <table style="width:80%">
                <tr>
                    <th>Post Description</th>
                    <th>Image</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
                @foreach ($post as $post)

                <tr>
                    <td>{{ $post->description }}</td>

                    <td><img height="400px" width="400px" src="post/{{ $post->image }}"</td>

                    <td><a href="{{ url('update_post',$post->id) }}" class="btn btn-primary">Update</a></td>

                    <td><a onclick="return confirm('Are you sure to delete this')" href="{{ url('delete_post',$post->id) }}" class="btn btn-danger">Delete</a></td>
                </tr>
                @endforeach
            </table><br><br><br>
            <form action="{{ url('/dashboard') }}" method="get">
                @csrf
                <div style="padding-left:65vh">
                    <input type="submit" value="Add post"
                        style="background-color: navy; padding:8px; width:120px; cursor:pointer; color:white; border-radius:8px; ">
                </div>
            </form>
        </div>
    </x-app-layout>

</body>
</html>
