<form action="{{ route('quiz.update', $quiz) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="question">Question</label>
    <input type="text" name="question" value="{{ $quiz->question }}">
    <label for="answer">Answer</label>
    <input type="text" name="answer" value="{{ $quiz->answer }}">
    <label for="point">Point</label>
    <input type="number" name="point" value="{{ $quiz->point }}">
    <button type="submit">Create</button>
</form>