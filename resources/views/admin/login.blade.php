<x-layout title="Acesso">
  <main class="bg">
    <section class="login container grid-2 secao">
      <div class="login__form border flex-column" data-form="login">
        <div class="form__buttons border">
          <a href="#form-login" class="btn-login btn border">Login</a>
          <a href="#form-cadastro" class="btn-cadastro btn border">Registrar</a>
        </div>

        <x-forms.login></x-forms.login>

        <x-forms.cadastro></x-forms.cadastro>

      </div>

      <div class="login__img">
        <h3 class="h3 color-highlight txt-75">Simplifique as contratações no seu escritório</h3>
        <img src="{{ Vite::image('ilustracao.svg') }}" alt="Imagem de Destaque">
      </div>
    </section>
  </main>
</x-layout>
