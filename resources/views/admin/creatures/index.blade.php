<form action="{{ route('creatures.store') }}" method="POST">
    @csrf
    <h1>Creature Generator</h1>
    <label for="kingdom">Kingdom</label>
    <input type="text" name="kingdom">
    <label for="phylum">Phylum</label>
    <input type="text" name="phylum">
    <label for="class">Class</label>
    <input type="text" name="class">
    <label for="order">Order</label>
    <input type="text" name="order">
    <label for="family">Family</label>
    <input type="text" name="family">
    <label for="genus">Genus</label>
    <input type="text" name="genus">
    <label for="species">Species</label>
    <input type="text" name="species">
    <label for="description">Description</label>
    <textarea name="description" id="" cols="30" rows="10"></textarea>
    <label for="price">Price</label>
    <input type="number" name="price">
    <button type="submit">Create</button>
</form>