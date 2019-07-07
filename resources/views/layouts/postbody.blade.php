<div class="col-md-6">
  <div class="card flex-md-row mb-4 box-shadow h-md-250">
    <div class="card-body d-flex flex-column ">
      <strong class="d-inline-block mb-2 text-primary">Post No:{{$post->id}}</strong>
      
      <h3 class="mb-0">
        <a class="text-dark" href="#">Location:{{$post->address}}</a>
      </h3>
    
      
        
        <ul>
          <li style="color: cornflowerblue"><b>Posted By : {{$post->user['name']}} on</b></li>
          <li>Posted at:{{$post->created_at->toDayDateTimeString()}}</li>
          <li>Tutor institute:{{$post->institute}}</li>
          <li>class:{{$post->class}}</li>
        </ul>
      <a href="/post/{{$post->id}}">See Full Post....</a>
    </div>
  </div>
</div>
