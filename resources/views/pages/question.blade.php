@extends('layouts.default')

@section('content')


        <ul class="list-group mt-4">

            <li class="list-group-item">
                <h2 class="card-title">{{$question->question}}</h2>
                <h6 class="card-subtitle mb-2 text-muted">Posted on: {{ $question->created_at->format(' d M Y') }}</h6>

                <form action="/answer/create/{{$question->id}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="answer">Answer</label>
                        <textarea class="form-control" name="answer" id="answer" rows="3"></textarea>

                        @error('answer')
                            <p class="text-danger"><small>{{ $message }}</small></p>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </li>


            @if($answers->isEmpty())
                <li class="list-group-item text-danger">No answers yet... Why don't you cook some tofu while you're waiting?</li>
            @else
                @foreach ($answers as $answer)
                    <li class="list-group-item">{{$answer->answer}}</li>
                @endforeach
            @endif
        </ul>
    </div>
@stop