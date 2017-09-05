@if(count($errors->all()) > 0)
    <div class="alert alert-danger">
        @foreach($errors->all() as $message)
            <ul>
                {{$message}}
            </ul>
        @endforeach
    </div>
@endif
