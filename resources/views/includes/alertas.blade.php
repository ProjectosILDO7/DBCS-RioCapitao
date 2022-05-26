@if(session('alert'))
    <div class="alert alert-success">
        {{ session('alert') }}
    </div>
@elseif(session('error'))
        <div class="alert alert-danger">
            {{ session('alert') }}
        </div>
@endif