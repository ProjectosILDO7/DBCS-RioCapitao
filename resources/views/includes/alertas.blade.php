@if(session('alert'))
    <div class="alert alert-success alert-sm col-12 text-center">
        <b class="font-weight-bold"><i class="fa fa-info-circle"></i>{{ session('alert') }}</b>
    </div>
@elseif(session('error'))
        <div class="alert alert-sm alert-danger col-12 text-center">
            <b class="font-weight-bold"><i class="fa fa-info-circle"></i> {{ session('error') }}</b>
        </div>
@endif