@extends('categories.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">Category Management</h2>
        </div>
        <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
            <a class="btn btn-success " href="{{ route('categories.create') }}">
                Add Category</a>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    @if(sizeof($Categories) > 0)
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>category Name</th>
                <th width="280px">More</th>
            </tr>
            @foreach ($Categories as $Categories)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $Categories->category_name}}</td>

                    <td>
                        <form action="{{ route('categories.destroy',$Categories->id)}}"
                              method="POST">
                            <a class="btn btn-info"
                               href="{{ route('categories.show',$Categories->id) }}">Show</a>
                            <a class="btn btn-primary"
                               href="{{ route('categories.edit',$Categories->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    @else
        <div class="alert alert-alert">Start Adding to the Database.</div>
    @endif


@endsection

