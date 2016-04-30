@if (session('alert'))

    @if (session('alert')['type'] == 'success')
        <div class="alert alert-success fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <span class="glyphicon glyphicon-ok-sign"></span> <strong>{{ session('alert')['title'] }}</strong><br/>
            {{ session('alert')['message'] }}
        </div>
    @endif

    @if (session('alert')['type'] == 'info')
        <div class="alert alert-info fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <span class="glyphicon glyphicon-info-sign"></span> <strong>{{ session('alert')['title'] }}</strong><br/>
            {{ session('alert')['message'] }}
        </div>
    @endif

    @if (session('alert')['type'] == 'warning')
        <div class="alert alert-warning fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <span class="glyphicon glyphicon-warning-sign"></span> <strong>{{ session('alert')['title'] }}</strong><br/>
            {{ session('alert')['message'] }}
        </div>
    @endif

    @if (session('alert')['type'] == 'danger')
        <div class="alert alert-danger fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <span class="glyphicon glyphicon-exclamation-sign"></span> <strong>{{ session('alert')['title'] }}</strong><br/>
            {{ session('alert')['message'] }}
        </div>
    @endif

@endif

<!-- Server side validation error display -->
@if ($errors->any())
    <div class="alert alert-danger fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <span class="glyphicon glyphicon-exclamation-sign"></span> <strong>Whoops! There was a problem...</strong><br/>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif