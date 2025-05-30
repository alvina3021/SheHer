<form method="POST" action="{{ route('register') }}">
    @csrf
    <input type="text" name="name" placeholder="Nama">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Daftar</button>
</form>
