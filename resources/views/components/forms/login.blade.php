<form id="form-login" action="{{ route('login') }}" method="POST" class="form  flex-column">
  {{-- Diretiva que cuida da segurança --}}
  @csrf
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

  <div class="form__item checkbox form__footer">
    <label class="checkbox">
      <input type="checkbox" name="remember">Lembrar senha
    </label>
    <a href="#">Esqueceu a senha?</a>
  </div>

  <button type="submit" class="btn btn-pri">Login</button>

  <div class="form__footer">
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