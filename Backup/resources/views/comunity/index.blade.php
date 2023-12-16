
@extends('layouts.usersidebar')

@section('content')
  <div class="container mt-5">
        <h2>EnergyCommunities</h2>
        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Map Location</th>
                    <th>Availability</th>
                    <th>Saving</th>
                    <th>Status</th>
                    <th>Credit Score</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach($forms as $form)
                    <tr>
                        <td>{{ $form->title }}</td>
                        <td>{{ $form->map_location }}</td>
                        <td>{{ $form->availability }}</td>
                        <td>${{ number_format($form->saving, 2) }}</td>
                        <td>
                            <span class="badge badge-{{ $form->status == 'active' ? 'success' : 'danger' }}">
                                {{ $form->status }}
                            </span>
                        </td>
                        <td>{{ $form->credit_score }}</td>
                        <td>{{ $form->description }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


@endsection