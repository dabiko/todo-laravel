<div>
    <!-- @if(session()->has('message'))
    {{$slot}}
    <div class="alert alert-success bg-green-150">{{session()->get('message')}}</div>
    @elseif(session()->has('error'))
    {{$slot}}
    <div class="alert alert-danger bg-red-150">{{session()->get('error')}}</div>
    @endif -->

    @if($errors->any())
    <div class="alert alert-danger bg-red">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @elseif(!$errors->any())
    <div class="alert alert-success bg-green">
        <ul>Todo created successfully</ul>
    </div>
    @endif

</div>