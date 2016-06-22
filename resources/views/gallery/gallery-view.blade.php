@extends('master')
@section('content')
<style type="text/css">
#gallery_images img{
width: 240px;
height:160px;
border: 2px solid #000000;
margin-bottom: 10px;
}
#gallery_images ul{
margin: 0;
padding: 0;

}
#gallery_images li{
margin: 0;
padding: 0;
list-style: none;
float: left;
padding-right: 10px;
}
</style>
    <div class="row">
        <div class="col-md12">
            <h1>{{$gallery->name}}</h1>


        </div
    </div>
        <div class="row">
            <div class="col-md-12">
                <div id="gallery_images">
                   <ul>
                    @foreach($gallery->images as $image)

                    <li>
                        <a herf="{{url($image->file_path)}}" target="_blank">
                            <img src="{{url($image->file_path)}}">
                        </a>
                    </li>

                    @endforeach
                     </ul>
                </div>

            </div>

        </div>
    <div class="row">
        <div class="col-md-12">
            <form action="{{url('image/do-upload')}}"
             class="dropzone" id="addImages">
           <input type="hidden" name="_token" value="{{ csrf_token()}}">
           <input type="hidden" name="gallery_id" value="{{ $gallery->id }}">

            </form>
        </div>
    </div>
    <div class="row">
            <div class="col-md12">
                <a href="{{url('gallery/list')}}" class="btn btn-primary">Back</a>

            </div>
        </div>

@endsection
