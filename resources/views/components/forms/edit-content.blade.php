
<form method="POST" action="{{ route('data.update', $id) }}">
    @csrf
    @method('PATCH')
    <input type="text" class="form-control" name="newName" value="{{ $name }}">

    <textarea name="newContent" id="create-content">{{ $content }}</textarea>
    <button class="btn btn-primary" type="submit">Update</button>
</form>
