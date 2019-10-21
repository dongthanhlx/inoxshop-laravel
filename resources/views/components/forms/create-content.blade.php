<form method="POST" action="{{ route('data.store') }}">
    @csrf
    <input type="text" class="form-control" name="name" placeholder="Điền tên sản phẩm ">

    <textarea name="content" id="create-content"></textarea>
    <button class="btn btn-primary" type="submit">Create</button>
</form>
