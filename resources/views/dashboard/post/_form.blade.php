@csrf
    
<label for="title">Titulo</label>
<input type="text" name="title" id="title" placeholder="Escriba el titulo" value="{{old("title",$post->title) }}">
<label for="slug">Slug</label>
<input type="text" name="slug" id="slug"value="{{old("slug",$post->slug) }}">

<label for="">Categorias</label>
<select name="category_id" id="category_id">
    <option value=""></option>
    @foreach ($categories as $title=>$id)
        <option {{old("category_id","$post->category_id") == $id ? "selected": "" }} value="{{$id}}">{{ $title}}</option>
    @endforeach
</select>

<label for="">Posteado</label>
<select name="posted" id="posted">
    <option {{old("posted",$post->posted) == "not" ? "selected" : "" }} value="not">NO</option>
    <option {{old("posted",$post->posted) == "yes" ? "selected" : "" }} value="yes"> SI</option>       
</select>

<label for="">Contenido</label>
<textarea name="content" id="content">{{old("content",$post->content) }}</textarea>

<label for="">Descripcíon</label>
<textarea name="description" id="description">{{old("description",$post->description) }}</textarea>
@if (isset($task) && $task == "edit")
<label for="">Imagen</label>
<input type="file" name="image" id="image">
    
@endif

<button type="submit">Crear</button>