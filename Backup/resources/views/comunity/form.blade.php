@extends('layouts.usersidebar')

@section('content')
<div class="container mt-4">
    <form action="{{ route('form.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" class="form-control" name="title" required>
        </div>
        
        <div class="mb-3">
            <label for="map_location" class="form-label">Map Location:</label>
            <input type="text" class="form-control" name="map_location" required>
        </div>
        
        <div class="mb-3">
            <label for="availability" class="form-label">Availability:</label>
            <input type="text" class="form-control" name="availability" required>
        </div>
        
        <div class="mb-3">
            <label for="saving" class="form-label">Saving:</label>
            <input type="number" class="form-control" name="saving" step="0.01" required>
        </div>
        
        <div class="mb-3">
            <label for="status" class="form-label">Status:</label>
            <input type="text" class="form-control" name="status" required>
        </div>
        
        <div class="mb-3">
            <label for="credit_score" class="form-label">Credit Score:</label>
            <input type="number" class="form-control" name="credit_score" required>
        </div>
        
        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <textarea class="form-control" name="description" required></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
