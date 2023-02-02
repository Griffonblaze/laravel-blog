@if($message = Session::get('success'))
    <div class="container alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <strong> {{$message}} </strong>
    </div>
@endif 


@if($message = Session::get('warning'))
    <div class="container alert alert-warning alert-block">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <strong> {{$message}} </strong>
    </div>
@endif 