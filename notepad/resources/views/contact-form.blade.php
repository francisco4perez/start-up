
  <form id="contact-form" method="POST">
    {{ csrf_field() }}
    <div class="page">
        <div class="page__demo">

          <label class="field a-field a-field_a2 page__field">
            <input id="name-input" name="name-input" type="text" class="field__input" placeholder="e.g. Francisco" required>
            <span class="field__label-wrap">
              <span class="field__label">Nombre</span>
            </span>
          </label> 

          <label class="field a-field a-field_a3 page__field">
            <input id="email-input" name="email-input" type="email" class="field__input" placeholder="e.g. aqualert@aqualert.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
            <span class="field__label-wrap">
              <span class="field__label">E-mail</span>
            </span>
          </label>

          <label class="field a-field a-field_a2 page__field">
            <input id="telephone-input" name="telephone-input" type="tel" class="field__input" placeholder="e.g. +56987654321" pattern="^(\+?56)?(\s?)(0?9)(\s?)[98765]\d{7}$" required>
            <span class="field__label-wrap">
              <span class="field__label">Teléfono</span>
            </span>
          </label>

          <label class="field a-field a-field_a3 page__field">
            <input id="theme-input" name="theme-input" type="text" class="field__input" placeholder="e.g. Consejo" pattern="^([a-z0-9]){5,}$" title="El asunto debe ser de al menos 5 letras." required>
            <span class="field__label-wrap">
              <span class="field__label">Asunto</span>
            </span>
          </label>

          <label class="field a-field  page__field">
            
            <textarea id="textarea" name="textarea" class="field__input" rows="10" cols="50" form="usrform" title="Pone algoooooooo" required>Deja Aquí tus comentarios!</textarea>
            <input type="text" id="fake" name="fake" required>
          </label>



        </div>
    </div>

    <div class="button">
      <input class="button" id="contact_btn" type="submit">
    </div>
</form>