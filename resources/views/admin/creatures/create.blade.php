<form action="{{ route('domains.store') }}" method="POST">
    @csrf
    <h1>Create Domain</h1>
    <label for="">Domain Name</label>
    <input type="text" name="name">
    <button type="submit">Create</button>
</form>
