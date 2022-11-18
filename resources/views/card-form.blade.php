<section class="pay-modal">
    <div class="pay-modal__top-container">
      <div class="pay-modal__top-container__title-close">
        <div class="pay-modal__top-container__title-close__title">
          Ingrese información de tarjeta
        </div>
        <a class="pay-modal__top-container__title-close__close">
          <i class="fa-solid fa-xmark"></i>
        </a>
      </div>
      <div class="pay-modal__top-container__line"></div>
    </div>
    <div class="pay-modal__body-container">
      <form action="#" method="post" class="pay-modal__body-container__form-container">
        <div class="pay-modal__body-container__form-container__label-input">
          <label for="numberCard" class="pay-modal__body-container__form-container__label-input__label">Numero de tarjeta</label>
          <input type="text" name="numberCard" id="numberCard" class="pay-modal__body-container__form-container__label-input__input --input" placeholder="0000 0000 0000 0000" style="width: 94%;">
        </div>
        <div class="pay-modal__body-container__form-container__middle-group">
          <div class="pay-modal__body-container__form-container__middle-group__label-input">
            <label for="date" class="pay-modal__body-container__form-container__label-input__label">Fecha de expiracion</label>
            <input type="month" name="date" id="date" class="pay-modal__body-container__form-container__label-input__input --input">
          </div>
          <div class="pay-modal__body-container__form-container__middle-group__label-input">
            <label for="code" class="pay-modal__body-container__form-container__middle-group__label-input__label">CVV</label>
            <input type="text" name="code" id="code" class="pay-modal__body-container__form-container__middle-group__label-input__input --input" placeholder="999">
          </div>
        </div>
        <div class="pay-modal__body-container__form-container__middle-group__label-input">
          <label for="cardHolder" class="pay-modal__body-container__form-container__middle-group__label-input__label">Nombre del titular</label>
          <input type="text" name="cardHolder" id="cardHolder" class="pay-modal__body-container__form-container__middle-group__label-input__input --input" placeholder="Nombre completo" style="width: 94%;">
        </div>
        <button type="submit" class="pay-modal__body-container__form-container__button --login-btn" style="width: 100%; margin: 1%;">
          Pagar
        </button>
      </form>
    </div>
  </section>
