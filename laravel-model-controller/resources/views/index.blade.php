<!-- FILE INDEX LEGATO AL CONTROLLER!-->
 <ul>

@foreach ($movies as $movie)
     <li> {{ $movie->title }}</li>
 @endforeach

 </ul>