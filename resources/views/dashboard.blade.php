<x-app-layout>
    <div style="padding-left: 42%; padding-top: 5%">
        <label for="" style="padding-left: 120px; font-size:20px; font-weight:bold">Add a post</label><br><br>

        <form action="{{ url('upload_post') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="">Description</label>
                <input type="text" name="description">
            </div><br><br>
            <div>
                <label for="">Image</label>
                <input type="file" name="image">
            </div><br><br>
            <div>
                <input type="submit"
                    style="background-color: navy; padding:8px; width:90px; cursor:pointer; color:white; border-radius:8px">
            </div><br><br><br>
        </form>

        <form action="{{ url('view_post') }}" method="get">
            @csrf
            <div style="padding-left:100px">
                <input type="submit" value="View My Post"
                    style="background-color: navy; padding:8px; width:120px; cursor:pointer; color:white; border-radius:8px; ">
            </div>
        </form>
    </div>
</x-app-layout>
