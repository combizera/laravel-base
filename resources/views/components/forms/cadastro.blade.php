<form id="form-cadastro" action="{{ route('login') }}" method="POST" class="form flex-column">
  {{-- Diretiva que cuida da segurança --}}
  @csrf

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
