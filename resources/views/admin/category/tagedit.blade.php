@extends('admin.layout.index')
@section('content1')
<div class="row">
   <div class="col-12 grid-margin stretch-card">
      <div class="card">
         <div class="card-body">
            <h4 class="card-title">{{__('message.Edit_Tags')}}</h4>
            <p class="card-description">
               {{__('message.Edit_Tags')}}
            </p>
            <form class="forms-sample" method="post" action="{{route('tag.update',[$tag->tag_id])}}">
               @method('PUT')
               <div class="form-group">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input type="hidden" name="tagid" value="{{$tag->id}}">
                  <label for="exampleInputName1">{{__('message.Name_Tags')}}</label>
                  <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="{{$tag->name}}" value="{{$tag->name}}">
               </div>
               <button type="submit" class="btn btn-primary mr-2">{{__('message.submit')}}</button>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection