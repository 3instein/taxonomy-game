@extends('admin.index')

@section('container')
    <div class="d-flex flex-column flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 fw-bold">Buat Pertanyaan</h1>
        <form class="d-flex flex-column" action="{{ route('quiz.store') }}" method="POST" style="width: 600px">
            @csrf
            <label for="question">Question</label>
            <input class="mb-3" type="text" name="question" style="width: 100%">
            <label for="answer">Answer</label>
            <input class="mb-3" type="text" name="answer" style="width: 100%">
            <label for="point">Point</label>
            <input type="number" name="point" style="width: 100%">
            <button class="btn btn-primary mt-3" type="submit">Create</button>
        </form>
    </div>
@endsection
