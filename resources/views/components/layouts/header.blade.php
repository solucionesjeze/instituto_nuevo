<header class="bg-header h-header flex flex-row justify-between items-center">

    <img class="h-17 max-h-full px-3" src="{{asset('./images/logo.png')}}" alt="logo">

    <h1 class="text-blue-800 text-6xl">Gestión de instituto</h1>

    <div class="flex flex-row space-x-2 px-2">
        @guest
        <a href="login">
            <button type="submit" class="btn btn-primary">
                Login
            </button>
        </a>
        <a href="register">
            <button type="submit" class="btn btn-primary">
                Register
            </button>
        </a>
        @endguest
        @auth
        <span class="text-xl text-blue-900">{{ auth()->user()->name }}</span>
        <form action="logout" method="POST">
            @csrf
            <input class="btn btn-secondary" type="submit" name="logout">
        </form>
        @role("admin")
        <a href="">
            <button type="submit" class="btn btn-primary">
                Administrar
            </button>
        </a>
        @endrole
        @endauth
    </div>
</header>