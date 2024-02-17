<script>
        const base_url = "<?= base_url(); ?>";
    </script>
    <!-- Essential javascripts for application to work-->
    <script src="<?= media(); ?>/js/jquery-3.3.1.min.js"></script>
    <script src="<?= media(); ?>/js/popper.min.js"></script>
    <script src="<?= media(); ?>/js/bootstrap.min.js"></script>
    <script src="<?= media(); ?>/js/main.js"></script>
    <script src="<?= media();?>/js/fontawesome.js"></script>
    <script src="<?= media(); ?>/js/functions_admin.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="<?= media(); ?>/js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    
    <!-- jQuery desde CDN -->
    

    <!-- Data table plugin-->
    <script type="text/javascript" src="<?= media(); ?>/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?= media(); ?>/js/plugins/dataTables.bootstrap.min.js"></script>
    <script src="<?= media(); ?>/js/bootstrap-toggle.js"></script>
    <script src="<?= media(); ?>/js/bootstrap-toggle.min.js"></script>
    <script src="<?= media(); ?>/js/bootstrap2-toggle.js"></script>
    <script src="<?= media(); ?>/js/bootstrap2-toggle.min.js"></script>
    <?php if($data['page_name'] == "rol_usuario") {  ?>
    <script src="<?= media(); ?>/js/functions_roles.js"></script>
    <?php } ?>
    <?php if($data['page_name'] == "rol_usuario") {  ?>
    <script src="<?= media(); ?>/js/functions_usuarios.js"></script>
    <?php } ?>

  </body>
</html>