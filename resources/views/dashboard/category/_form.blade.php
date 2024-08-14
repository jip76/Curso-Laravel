@csrf
    
<label for="title">Titulo</label>
<input type="text" name="title" id="title" placeholder="Escriba categoria" value="{{old("title",$category->title) }}">
<label for="slug">Slug</label>
<input type="text" name="slug" id="slug"value="{{old("slug",$category->slug) }}">

<button type="submit">Crear</button>