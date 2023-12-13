<x-layout>
    <main class="bg">
      <section class="container secao">
        index
      </section>

      {{-- MODAL --}}
      <div data-modal="container" class="modal__wrapper center">
        <div class="modal">
          <div class="modal__header border-bottom space-between">
            <button data-modal="close" class="modal__close">
              <img src="{{ Vite::image('icons/icon-close.svg') }}" alt="Fechar Modal" />
            </button>
          </div>
          <div class="modal__content">
            <x-forms.login></x-forms.login>
          </div>
        </div>
      </div>
    </main>
</x-layout>
