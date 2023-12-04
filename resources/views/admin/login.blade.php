<x-layout title="Login">
  <main class="index">

    <section class="login container">
      <h3>Será que você deveria estar aqui? 🤔</h3>
      <form action="{{ route('login') }}" method="POST" class="form">
        {{-- Diretiva que cuida da segurança --}}
        @csrf
        <div class="form__item">
          <label for="email">Email</label>
          <input required type="email" name="email" id="email" placeholder="email@advbox.com.br">
        </div>

        <div class="form__item">
          <label for="password">Senha</label>
          <input required type="password" name="password" id="password" placeholder="********">
        </div>

        <div class="form__item">
          <label class="checkbox">
              <input type="checkbox" name="remember">Lembrar senha
          </label>
        </div>
        <button type="submit" class="btn btn-pri">Acessar</button>
      </form>

      @if ($errors->any())
        <div class="erro">
          @foreach ($errors->all() as $erro)
          <li>
            {{ $erro }}
          </li>
          @endforeach
        </div>
      @endif
    </section>
  </main>
</x-layout>
