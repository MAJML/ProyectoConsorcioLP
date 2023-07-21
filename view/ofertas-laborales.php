<div class="contenido_imagen_banner">
    <img src="assets/img/banner_bolsa_trabaj.jpg" width="100%" alt="">
    <div class="caja_formulario_bolsa">
        <form class="form_bolsa container" action="" method="post">
            <div class="mb-1 mt-1 item_txt_form">
                <input type="text" placeholder="¿Qué buscas?" class="form-control">
            </div>
            <div class="mb-1 mt-1 item_txt_form">
                <select name="" class="form-select" id="">
                    <option value="" hidden>Provincia</option>
                    <option value="">Lima</option>
                    <option value="">Callao</option>
                </select>
            </div>
            <div class="mb-1 mt-1 item_txt_form">
                <select name="" class="form-select" id="">
                    <option value="" hidden>Empresas</option>
                    <option value="">Lima</option>
                    <option value="">Callao</option>
                </select>
            </div>
            <div class="mb-1 mt-1 item_btn_form">
                <button type="submit" class=""><i class="fa-solid fa-magnifying-glass"></i> Buscar</button>
            </div>
        </form>
    </div>

</div>

<section class="container mt-5 mb-5">

    <div class="caja_bolsa_trabajo mt-5">
        <div class="item_text_bols_trabajo">
            <p class="titulo_oferta_laboral">SUPERVISORES DE ELECTRODOMÉSTICOS CON EXPERIENCIA PARA PANASONIC</p>
            <p class="lugar_oferta_laboral">Santiago de Surco</p>
            <p class="edtalle_oferta_laboral">Nos encontramos en la búsqueda de un/a supervisar de electrodomésticos</p>
        </div>
        <div class="item_btn_bols_trabajo">
            <img src="assets/img/Logos_sival_azul.png" alt="">
            <p><b>Hoy, 4:12 PM</b></p>
            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Más información</button>
        </div>
    </div>
    <div class="caja_bolsa_trabajo mt-5">
        <div class="item_text_bols_trabajo">
            <p class="titulo_oferta_laboral">SUPERVISOR VOLANTE - PESQUERAS VEGUETA HUACHO</p>
            <p class="lugar_oferta_laboral">Santiago de Surco</p>
            <p class="edtalle_oferta_laboral">Nos encontramos en la búsqueda de un/a supervisar de electrodomésticos</p>
        </div>
        <div class="item_btn_bols_trabajo">
            <img src="assets/img/Logos_Consorcio_LP-10.png" alt="">
            <p><b>Hoy, 4:12 PM</b></p>
            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Más información</button>
        </div>
    </div>
    <div class="caja_bolsa_trabajo mt-5">
        <div class="item_text_bols_trabajo">
            <p class="titulo_oferta_laboral">SUPERVISOR SSMA - LIMA</p>
            <p class="lugar_oferta_laboral">Santiago de Surco</p>
            <p class="edtalle_oferta_laboral">Nos encontramos en la búsqueda de un/a supervisor SSMA</p>
        </div>
        <div class="item_btn_bols_trabajo">
            <img src="assets/img/Logos_Consorcio_LP-11.png" alt="">
            <p><b>Hoy, 4:12 PM</b></p>
            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Más información</button>
        </div>
    </div>

</section>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Ingrese sus Datos</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form class="row g-3 needs-validation w-100" novalidate>
                    <div class="col-md-12 mb-3">
                        <label for="validationCustom01" class="form-label">Nombres y Apellidos</label>
                        <input type="text" class="form-control" id="validationCustom01" required>
                        <div class="invalid-feedback">
                            Es obligatorio que rellene su Nombre y Apellido
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="validationCustom02" class="form-label">Lugar donde Reside</label>
                        <input type="text" class="form-control" id="validationCustom02" required>
                        <div class="invalid-feedback">
                            Es obligatorio que complete su Dirección
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationCustomUsername" class="form-label">DNI</label>
                        <input type="text" class="form-control" id="validationCustom02" required>
                        <div class="invalid-feedback">
                            Es obligatorio que escriba su DNI
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="" class="form-label">Número Celular</label>
                        <input type="text" class="form-control" id="" required>
                        <div class="invalid-feedback">
                            Escriba un Numero de Celular Valido
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="validationCustom03" class="form-label">Correo Electrónico</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                            <input type="text" class="form-control" id="validationCustomUsername"
                                aria-describedby="inputGroupPrepend" required>
                            <div class="invalid-feedback">
                                Escriba su Correo Electronico
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="formFile" class="form-label">Sube tu CV</label>
                        <input class="form-control" type="file" id="formFile">
                        <div class="invalid-feedback">
                            Suba su CV
                        </div>
                    </div>
                </form>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </div>
</div>