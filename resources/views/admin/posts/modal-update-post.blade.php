<div class="modal fade" id="modal-update-post-{{$post->id}}">
    <div class="modal-dialog">
        <div class="modal-content bg-default">
            <div class="modal-header">
                <h4 class="modal-title">Actualizar Post</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
            </div>
            <form action="{{ route('admin.posts.update', $post->id) }}" method="POST">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Título</label>
                        <input type="text" name="title" class="form-control" id="post">
                    </div>
                    <div class="form-group">
                        <label for="category-id">Categoría</label>
                        <select class="form-select form-select-lg mb-3 form-control" name="category_id" id="category-id">
                            <option value=""> -- Elegir Categoría --</option>
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}"> {{$category->name}} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="content">Artículos</label>
                        <textarea name="content" class="form-control" id="content" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="author">Autor</label>
                        <input type="text" name="author" class="form-control" id="author">
                    </div>
                    <div class="form-group">
                        <label for="featured">Nueva imagen</label>
                        <input type="file" name="featured" class="form-control input-group" id="featured">
                        <br>
                        <h3 class="text-center">Imagen anterior</h3>
                        <img src="{{ asset($post->featured) }}" alt="{{$post->title}}" class="d-block mx-auto img-fluid img-thumbnail" width="300px">
                    </div>
                </div>

                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-primary">Actualizar</button>
                </div>
            </form>
        </div>
    <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
