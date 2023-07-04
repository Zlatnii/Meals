<h1>Jela Svijeta</h1>

@foreach($meals as $meal)

<p>Title: {{$meal->title}}</p>
<p>Description: {{$meal->description}}</p>
<p>Status: {{$meal->status}}</p>
<p>Category: {{$meal->category->id}}</p>
<p>Title: {{$meal->category->title}}</p>
<p>Slug: {{$meal->category->slug}}</p>
<p>Tags: {{$meal->tags->id}}</p>
<p>Title: {{$meal->tags->title}}</p>
<p>Slug: {{$meal->tags->slug}}</p>
<p>Ingredients: {{$meal->ingredients->id}}</p>
<p>Title: {{$meal->ingredients->title}}</p>
<p>Slug: {{$meal->ingredients->slug}}</p>

@endforeach

