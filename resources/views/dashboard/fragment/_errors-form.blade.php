

<div class="row">
     
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body";>
             
             @if ($errors->any())
               @foreach ($errors->all() as $e)
               <div class="alert alert-danger" role="alert">
                {{$e}}
               </div>
                @endforeach
              @endif
        </div>
      </div>
    </div>
</div>

