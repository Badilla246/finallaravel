@extends('pages.Base')

@section('content')

@if (session('info'))
<div class="success">{{session('info')}}</div>
@endif

<div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
    <a href="{{url('/venues/create')}}" class="btn btn-primary me-md-2" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
        <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1z"/>
      </svg>
    </a>
</div>

<table class="table table-bordered table-striped table-sm">
    <thead>
        <tr>
            <th>VenueName</th>
            <th>Location</th>
            <th>Capacity</th>
            <th>ContactPerson</th>
            <th>OpeningDate</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($venues as $venue):?>
            <tr>
                <td>{{$venue->VenueName}}</td>
                <td>{{$venue->Location}}</td>
                <td>{{$venue->Capacity}}</td>
                <td>{{$venue->ContactPerson}}</td>
                <td>{{$venue->OpeningDate}}</td>
            </tr>
            <?php endforeach;?>
    </tbody>
</table>

@endsection
