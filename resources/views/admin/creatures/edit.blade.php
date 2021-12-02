<form action="{{ route('domains.update', $domain) }}" method="POST">
    @csrf
    @method('PUT')
    <h1>Update Domain</h1>
    <label for="">Domain Name</label>
    <input type="text" name="name" value="{{ $domain->name }}">
    <button type="submit">Update</button>
</form>
