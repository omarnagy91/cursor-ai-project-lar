@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Events List</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('events.create') }}"> Create New Event</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Description</th>
            <th>Start Time</th>
            <th>End Time</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($events as $event)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $event->title }}</td>
            <td>{{ $event->description }}</td>
            <td>{{ $event->start_time }}</td>
            <td>{{ $event->end_time }}</td>
            <td>
                <form action="{{ route('events.destroy',$event->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('events.show',$event->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('events.edit',$event->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $events->links() !!}
@endsection
