<section class="booking-area section-gap relative" id="contact">
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row justify-content-between align-items-center">

        <div class="col-lg-4 col-md-6 booking-right">
            <h4 class="mb-20">Contactame!</h4>
            <form id="contactForm" method="post">
                <input class="form-control" type="text" name="name" placeholder="Nombre" required>
                <input class="form-control" type="email" name="email" placeholder="Email" required>
                <input class="form-control" type="text" name="phone" placeholder="Teléfono">
                <div class="default-select" id="default-select"">
                <select name="service">
                    <option value="" disabled selected hidden>Servicio</option>
                    <option value="Servicio sin definir">Aún no lo decidí</option>
                    <option value="Asesoramiento Integral">Asesoramiento integral</option>
                    <option value="Personal Shopper">Personal shopper</option>
                    <option value="Organización de guardarropas">Organización y maximización de guardarropas</option>
                    <option value="Asesoría para eventos">Asesoría para eventos</option>
                </select>
        </div>
        <textarea class="common-textarea form-control mt-10" name="message" placeholder="Mensaje" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mensaje'"></textarea>
        <div class="mt-20 alert alert-msg" style="text-align: left;"></div>
        <button  class="btn btn-default btn-lg btn-block text-center">Enviar</button>
        </form>
    </div>
      
      <div class="col-lg-5 col-md-6 booking-left">
        <h1 class="text-white">
          Estoy para vos
        </h1>
        <h4 class="text-white">
          Empecemos con algo sencillo
        </h4>
        <p>
          Escribime cualquier inquietud que tengas o comentame eso que querés cambiar y voy a encontrar la forma de ayudarte.
        </p>
      </div>
      
  </div>
  </div>
</section>