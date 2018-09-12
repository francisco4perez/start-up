
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
            <input id="email-input" name="email-input" type="email" class="field__input" placeholder="e.g. aqualert@aqualert.com" required>
            <span class="field__label-wrap">
              <span class="field__label">E-mail</span>
            </span>
          </label>

          <label class="field a-field a-field_a2 page__field">
            <input id="telephone-input" name="telephone-input" type="number" class="field__input" placeholder="e.g. 87654321" required>
            <span class="field__label-wrap">
              <span class="field__label">Teléfono</span>
            </span>
          </label>

          <label class="field a-field a-field_a3 page__field">
            <input id="theme-input" name="theme-input" type="text" class="field__input" placeholder="e.g. Consejo" required>
            <span class="field__label-wrap">
              <span class="field__label">Asunto</span>
            </span>
          </label>

          <label class="field a-field  page__field">
            
            <textarea id="textarea" name="textarea" class="field__input" rows="10" cols="50" form="usrform">Deja Aquí tus comentarios!</textarea>
            <input type="text" id="fake" name="fake">
          </label>



        </div>
    </div>

    <div class="button">
      <input class="button" type="submit">
    </div>
</form>