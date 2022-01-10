<form action="{{ route('quiz.store') }}" method="POST">
    @csrf
    <label for="question">Question</label>
    <input type="text" name="question">
    <label for="answer">Answer</label>
    <input type="text" name="answer">
    <label for="point">Point</label>
    <input type="number" name="point">
    <button type="submit">Create</button>
</form>