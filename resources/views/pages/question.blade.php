@extends('layouts.default')

@section('content')


        <ul class="list-group mt-4">

            <li class="list-group-item">
                <h2 class="card-title">{{$question->question}}</h2>
                <h6 class="card-subtitle mb-2 text-muted">Posted on: {{ $question->created_at->format(' d M Y') }}</h6>

                <form>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Answer</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <button type="button" class="btn btn-primary">Submit</button>
                </form>
            </li>

            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Morbi leo risus</li>
            <li class="list-group-item">Porta ac consectetur ac</li>
            <li class="list-group-item">Vestibulum at eros</li>
        </ul>
    </div>
@stop