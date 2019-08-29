@extends('layouts.default')

@section('content')

    <div class="card mt-4">
        <div class="card-body">
            <form action="/question/create" method="POST">
                @csrf
                <div class="form-group">
                    <label for="question">Ask a Question</label>
                    <input type="text" name="question" class="form-control" id="question" aria-describedby="emailHelp" placeholder="Ask your question" required>

                    @error('question')
                        <p class="text-danger"><small>{{ $message }}</small></p>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>


        </div>
    </div>

    <h1 class="mt-4">Questions</h1>


    <div class="card-columns mt-4">

    @foreach ($questions as $question)
            <div class="card p-3">
                <blockquote class="blockquote mb-0 card-body">
                    <p>{{$question->question}}</p>
                    <footer class="footer">
                        <span class="badge badge-primary">Answers <span class="badge badge-light">9</span></span>
                        <a href="question/{{$question->id}}" class="stretched-link"></a>
                    </footer>
                </blockquote>
            </div>
    @endforeach
    </div>

@stop