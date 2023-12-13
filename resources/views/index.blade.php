<x-layout>
    <main class="bg">
      <section class="container secao">
        index
      </section>

      <button class="open-modal">Abrir Modal</button>

      {{-- MODAL --}}
      <div class="modal__wrapper center active">
        <div class="modal">
          <div class="modal__header border-bottom space-between">
            <p>deletar.exe</p>
            <button class="modal__close">
              <img src="{{ Vite::image('icons/icon-close.svg') }}" alt="Fechar Modal" />
            </button>
          </div>
          <div class="modal__content">
            <p class="modal__message">
              Você tem certeza? Essa ação é irreversível

            </p>
            <form class="modal__form" action="" method="POST">
              {{-- Diretiva que cuida da segurança --}}
              @csrf

              @method ('DELETE')

              <button class="btn btn-pri delete">
                Apagar
              </button>
            </form>
          </div>
        </div>
      </div>

  <x-slot:scripts>
    <script src="{{ Vite::script('modal.js') }}"></script>
  </x-slot:scripts>
    </main>
</x-layout>
