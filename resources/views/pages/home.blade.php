@extends('layouts.default')

@section('content')

    <div class="card mt-4">
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label for="InputQuestion">Ask a Question</label>
                    <input type="text" class="form-control" id="InputQuestion" aria-describedby="emailHelp" placeholder="Ask your question">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <div class="card-columns mt-4">
        <div class="card p-3">
            <blockquote class="blockquote mb-0 card-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                <footer class="footer">
                        <span class="badge badge-primary">Answers <span class="badge badge-light">9</span></span>
                </footer>
            </blockquote>
        </div>
    </div>

@stop