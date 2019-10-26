
<form method="POST" action="{{ route('data.update', $page->id) }}">
    @csrf
    @method('PATCH')
    <input type="text" class="form-control" name="newName" value="{{ $page->name }}">

    <textarea name="newContent" id="create-content">{{ $page->content }}</textarea>
    <button class="btn btn-primary" type="submit">Update</button>
</form>
