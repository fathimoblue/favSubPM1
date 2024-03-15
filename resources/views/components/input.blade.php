@props(['titulo', 'type', 'nombre' ])

<label for="">{{$titulo}}</label>
<input type={{$type}} name={{ $nombre }} class="border rounded-lg px-2 py-1">
@error($nombre)
       <p>{{$message}}</p>
       @enderror
