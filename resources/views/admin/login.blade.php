<x-layout title="Login">
  <main class="bg">

    <section class="login container grid-2 secao">
      <form action="{{ route('login') }}" method="POST" class="form border flex-column">
        {{-- Diretiva que cuida da segurança --}}
        @csrf

        <div class="form__buttons border">
          <a href="#" class="btn btn-pri border">Login</a>
          <a href="#" class="btn btn-sec border">Registrar</a>
        </div>

        <h1 class="h1">Faça Login</h1>
        <h2 class="h2">Descrição do Projeto</h2>
        <div class="form__item">
          <label for="email">Email</label>
          <input required type="email" name="email" id="email" placeholder="email@advbox.com.br">
        </div>

        <div class="form__item">
          <label for="password">Senha</label>
          <input required type="password" name="password" id="password" placeholder="********">
        </div>

        <div class="form__item checkbox">
          <label class="checkbox">
              <input type="checkbox" name="remember">Lembrar senha
          </label>
        </div>

        <button type="submit" class="btn btn-pri">Login</button>

        <div class="grid-2">
          <a href="#">Ainda não tem uma conta?</a>
          <a href="#">css</a>
        </div>

        @if ($errors->any())
          <div class="erro">
            @foreach ($errors->all() as $erro)
            <li>
              {{ $erro }}
            </li>
            @endforeach
          </div>
        @endif
      </form>

      <div class="login__img">

      </div>
    </section>
  </main>
</x-layout>
