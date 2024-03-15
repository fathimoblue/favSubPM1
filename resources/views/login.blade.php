<x-layout>
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
    <div class="place-content-center h-screen">
    <h1 class="text-pink500 text-5xl text-center font-extrabold">Log In</h1>
    <form action="/login"method="POST">
        @csrf
<div class="my-2">
      <x-input titulo="Email" type="text" nombre="email"/>
    </div>
    <div>
       <x-input titulo="Password" type="password" nombre="password"/>
</div>
    </div>
    <button type="submit" class="border">Log In</button>
    </form>
</x-layout>

