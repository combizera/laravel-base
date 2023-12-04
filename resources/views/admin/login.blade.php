<x-layout title="Login">
  <main class="bg">

    <section class="login container grid-2 secao">
      <div class="login__form">
        <form id="form-login" action="{{ route('login') }}" method="POST" class="form border flex-column active">
          {{-- Diretiva que cuida da segurança --}}
          @csrf

          <div class="form__buttons border">
            <a href="#" class="btn-login btn btn-pri border">Login</a>
            <a href="#" class="btn-cadastro btn btn-sec border">Registrar</a>
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

        <form id="form-cadastro" action="{{ route('login') }}" method="POST" class="form border flex-column">
          {{-- Diretiva que cuida da segurança --}}
          @csrf

          <div class="form__buttons border">
            <a href="#" class="btn-login btn btn-sec border">Login</a>
            <a href="#" class="btn-cadastro btn btn-pri border">Registrar</a>
          </div>

          <h1 class="h1">Faça o cadastro</h1>
          <h2 class="h2">Seu login será aprovado por um administrador antes de acessar 😉</h2>
          <div class="form__item">
            <label for="email">Nome de usuário</label>
            <input required type="text" name="text" id="text" placeholder="Digite seu nome">
          </div>

          <div class="form__item">
            <label for="email">Email</label>
            <input required type="email" name="email" id="email" placeholder="email@advbox.com.br">
          </div>

          <div class="form__item">
            <label for="password">Senha</label>
            <input required type="password" name="password" id="password" placeholder="Digite sua senha">
          </div>

          <div class="form__item">
            <label for="password">Senha</label>
            <input required type="password" name="password" id="password" placeholder="Repita a senha digitada">
          </div>

          <button type="submit" class="btn btn-pri">Registrar conta</button>

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
      </div>

      <div class="login__img">

      </div>

    </section>
  </main>
</x-layout>
