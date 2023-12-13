const $modal = document.querySelector('[data-modal="container"]');
const $openModal = document.querySelector('[data-modal="open"]');
const $closeModal = $modal.querySelector('[data-modal="close"]');

if($modal && $closeModal && $openModal){
  function toggleModal(event){
    event.preventDefault();
    $modal.classList.toggle('active');
  }

  function clickOut(event){
    if(event.target === this){
      toggleModal(event);
    }
  }

  $openModal.addEventListener('click', toggleModal);
  $closeModal.addEventListener('click', toggleModal)
  $modal.addEventListener('click', clickOut);
}
