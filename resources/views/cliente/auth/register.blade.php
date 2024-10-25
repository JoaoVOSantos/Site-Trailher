<div class="modal fade" id="modalregister" tabindex="-1" aria-modal="true" role="dialog">
      <div class="modal-dialog modal-fullscreen-md-down modal-md modal-dialog-centered" role="document">
        <div class="modal-content p-4 bg-light">
          <div class="modal-header mx-auto border-0">
            <h2 class="modal-title fs-3 fw-normal">Cadastre-se</h2>
          </div>
          <div class="modal-body">
            <div class="login-detail">
              <div class="login-form p-0">
                <div class="col-lg-12 mx-auto">
                  <form id="login-form" action="{{route('login')}}" method="POST">

                    <label for="floatingInput">Digite seu nome</label>
                    <input type="email" name="name" placeholder="E-mail" class="ps-3 text-input">

                    <label for="floatingInput">Digite seu email</label>
                    <input type="email" name="email" placeholder="E-mail" class="ps-3 text-input">

                    <label for="floatingInput">Digite sua senha</label>
                    <input type="password" name="password" placeholder="Password" class="ps-3 text-input">

                    <label for="floatingInput">Confirme sua senha</label>
                    <input type="password" name="password_confirmation" placeholder="Password" class="ps-3 text-input">

                </div>
                </form>
              </div>
            </div>
            <div class="modal-footer mt-5 d-flex justify-content-center">
              <button type="button" class="btn btn-red hvr-sweep-to-right dark-sweep">Cadastrar</button>
            </div>
          </div>
        </div>
      </div>
    </div>