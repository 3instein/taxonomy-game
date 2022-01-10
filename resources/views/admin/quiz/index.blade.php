@extends('admin.index')

@section('container')
    <div class="d-flex flex-column flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert" style="width: 100%">
                {{ session('success') }}
            </div>
        @endif
        <h1 class="h2 fw-bold">Pertanyaan</h1>
        <a class="btn btn-primary" href="{{ route('quiz.create') }}">Buat Pertanyaan</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Pertanyaan</th>
                    <th scope="col">Jawaban</th>
                    <th scope="col">Point</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($quizzes as $quiz)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $quiz->question }}</td>
                        <td>{{ $quiz->answer }}</td>
                        <td>{{ $quiz->point }}</td>
                        <td class="d-flex">
                            <a class="btn btn-warning me-3" href="{{ route('quiz.edit', $quiz) }}">Edit</a>
                            <form action="{{ route('quiz.destroy', $quiz) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
