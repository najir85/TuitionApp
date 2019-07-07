@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="font-size: 3rem font-color:green"><a>PostNo:{{ $post->id }}</a>

                </div>

                <div class="card-body">
                      <div>
                        <a style="font-size: 20px" href="#">Posted By: {{$post->user->name}} </a>
                      </div>
                     <div >
                      <a style="font-size: 30px">Location: {{$post->address}}</a>
                     </div>
                    <div >
                        <a style="font-size: 30px">Institute: {{$post->institute}}</a>
                    </div>

                    <div >
                        <a style="font-size: 30px">Subjects: {{$post->subject}}</a>
                    </div>
                    <div >
                        <a style="font-size: 30px">Payment: {{$post->payment}}</a>
                    </div>
                   <button class="btn-btn-link"><a href="/post">back to Post</a></button>
                  </div>
                  <strong>Comments:</strong>
                </div>
              </div>

         <!-- show comment -->

             <div class="col-md-8">
              
                
                 <ul class="list-group ">
                    @foreach($post->comment as $comments)
                     <li class="list-group-item">
                        <label><b>{{$comments->user['name']}} :</b></label> 
                        {{$comments->body}}
                      </li>
                    @endforeach
                    
                 </ul>
              </div>

               <!-- add comment -->
              <div class="col-md-8">
                <div class="card">
                  <div class="card-body">
                     <form action="/post/{{$post->id}}/comments">

                      {{csrf_field()}}
                        <div class="form-group">
                          <textarea name="body" class="form-control" placeholder="your comment here" >
                            
                          </textarea>
                        </div>

                        <div class="form-group">
                          <button class="btn-btn-primary">comment</button>
                        </div>

                     </form>  
                    </div>
                  </div>
                </div>

             
                
              
              

        </div>

   </div>  
              
</div>
@endsection
