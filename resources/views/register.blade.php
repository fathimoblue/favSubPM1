<x-layout>
<div>
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
    <h1> Sign Up</h1>
    <form action="/register" method="POST">
        @csrf
<div>

    <x-input titulo="name" type="text" name="nombre"/>
</div>
<div>

    <x-input titulo="email" type="text" name="Email"/>
</div>
<div>

    <x-input titulo="password" type="password" name="password"/>
</div>
<div>
    
    <x-input titulo="birthday" type="date" name="birthday"/>
</div>

<button type="submit">Submit</button>


    </form>
</div>
</x-layout>
