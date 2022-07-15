@props(['recipe'])
<div class="card recipe-card">
    <img src="{{asset('images/no_image.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{$recipe->title}}</h5>
        <p class="card-text">{{$recipe->description}}</p>
        <a href="/recipes/{{$recipe->id}}" class="btn btn-primary">View Recipe</a>
    </div>
</div>

<br>