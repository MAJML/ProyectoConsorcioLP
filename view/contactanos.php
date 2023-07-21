<img src="assets/img/banner_contactanos.png" width="100%" alt="">

<section class="container mt-5">
    <h4 class="titulo_contactanos">Si desea alguna consulta, no dude en completar el siguiente formulario. <br>
        Estaremos gustosos de atenderlo</h4>


    <form class="mt-5 mb-5 row g-3 needs-validation w-75 m-auto" novalidate>
        <div class="col-md-6 mb-3">
            <label for="validationCustom01" class="form-label">Nombres y Apellidos</label>
            <input type="text" class="form-control" id="validationCustom01" required>
            <div class="invalid-feedback">
                Es obligatorio que rellene su Nombre y Apellido
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <label for="validationCustom02" class="form-label">Empresa</label>
            <input type="text" class="form-control" id="validationCustom02" required>
            <div class="invalid-feedback">
                Es obligatorio que complete el nombre de la Empresa
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <label for="validationCustomUsername" class="form-label">Correo Electrónico</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input type="text" class="form-control" id="validationCustomUsername"
                    aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                    Escriba su Correo Electronico
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <label for="validationCustom03" class="form-label">Número Telefónico</label>
            <input type="text" class="form-control" id="validationCustom03" required>
            <div class="invalid-feedback">
                Escriba un Numero de Telefono Valido
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <label for="" class="form-label">Número Celular</label>
            <input type="text" class="form-control" id="" required>
            <div class="invalid-feedback">
            Escriba un Numero de Celular Valido
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <label for="validationCustom05" class="form-label">Servicio</label>
            <input type="text" class="form-control" id="validationCustom05" required>
            <div class="invalid-feedback">
                Escriba el servicio que brinda
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <label for="validationTextarea" class="form-label">Mensaje</label>
            <textarea class="form-control" id="validationTextarea" required></textarea>
            <div class="invalid-feedback">
                Redacte un Mensaje
            </div>

        </div>
        <div class="col-12 m-auto text-center mt-3">
            <button class="btn_enviar_form_buscar_bolsa" type="submit">Enviar</button>
        </div>
    </form>
</section>
<h1 class="titulo_contactanos_ubicanos">Ubícanos</h1>
<iframe class="mt-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3900.7353542777314!2d-77.0189384!3d-12.130251199999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105b7fd9d51cc6b%3A0xdfb0376c0f9864e3!2sAv.%2028%20de%20Julio%201397%2C%20Miraflores%2015047!5e0!3m2!1sen!2spe!4v1689914304900!5m2!1sen!2spe" 
    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>




<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
</script>