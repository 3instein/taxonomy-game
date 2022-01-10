@extends('admin.index')

@section('container')
    <div class="d-flex flex-column flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 fw-bold">Buat Pertanyaan</h1>
        <form class="d-flex flex-column" action="{{ route('quiz.update', $quiz) }}" method="POST" style="width: 600px">
            @csrf
            @method('put')
            <label for="question">Question</label>
            <input class="mb-3" type="text" value="{{ $quiz->question }}" name="question" style="width: 100%">
            <label for="answer">Answer</label>
            <input class="mb-3" type="text" value="{{ $quiz->answer }}" name="answer" style="width: 100%">
            <label for="point">Point</label>
            <input type="number" name="point" value="{{ $quiz->point }}" style="width: 100%">
            <button class="btn btn-primary mt-3" type="submit">Update</button>
        </form>
    </div>
@endsection

{{-- <form action="{{ route('quiz.update', $quiz) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="question">Question</label>
    <input type="text" name="question" value="{{ $quiz->question }}">
    <label for="answer">Answer</label>
    <input type="text" name="answer" value="{{ $quiz->answer }}">
    <label for="point">Point</label>
    <input type="number" name="point" value="{{ $quiz->point }}">
    <button type="submit">Create</button>
</form> --}}
