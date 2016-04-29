@if (session('alert'))

    @if (session('alert')['type'] == 'info')
        <div class="alert alert-info fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <span class="glyphicon glyphicon-info-sign"></span> <strong>{{ session('alert')['title'] }}</strong><br/>
            {{ session('alert')['message'] }}
        </div>
    @endif

@endif