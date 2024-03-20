@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-header">
                Edit Event
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('events.update', $event->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Event Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $event->title }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Event Description (Optional)</label>
                        <textarea class="form-control" id="description" name="description" rows="3">{{ $event->description }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="start_time" class="form-label">Start Time</label>
                        <input type="datetime-local" class="form-control" id="start_time" name="start_time" value="{{ $event->start_time->format('Y-m-d\TH:i') }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="end_time" class="form-label">End Time</label>
                        <input type="datetime-local" class="form-control" id="end_time" name="end_time" value="{{ $event->end_time->format('Y-m-d\TH:i') }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Event</button>
                    <a href="{{ route('events.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
