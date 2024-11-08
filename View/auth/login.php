<?php view('static/header') ?>
<div class="login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html">LOG<b>IN</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg"><?= lang('Lütfen Giriş Yapınız!'); ?></p>

      <form action="<?= URL.'tr/login'; ?>" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" name ="eposta" placeholder="<?= lang('E-Posta'); ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name ="sifre" placeholder="<?= lang('Şifre'); ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">

          <!-- /.col -->
          <div class="col-12">
            <button type="submit" name="submit" value="1" class="btn btn-primary btn-block w-100"><?= lang('Giriş Yap'); ?></button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
</div>

<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?= assets('plugins/jquery/jquery.min.js')?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= assets('plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?= assets('js/adminlte.min.js')?>"></script>
</body>
</html>
