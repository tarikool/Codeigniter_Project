  <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title><?php echo $this->lang->line('text_title_header'); ?></title>
        <!-- Bootstrap core CSS -->
        <link href="<?php echo HTTP_VENDOR_PATH; ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" rel="stylesheet" media="all" href="<?php echo HTTP_VENDOR_PATH; ?>galleyZoom/fancybox/source/jquery.fancybox.css"/>
        <!-- Custom styles for this template -->
        <link href="<?php echo HTTP_CSS_PATH; ?>style.css" rel="stylesheet">

    </head>

    <body>

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #3B5998;">
        <span>

        <select class="form-control" onchange="javascript:window.location.href='<?php echo base_url(); ?>multilanguageswitcher/switch/'+this.value;">
            <option value="english" <?php if($this->session->userdata('site_lang') == 'english') echo 'selected="selected"'; ?>>English</option>
            <option value="hindi" <?php if($this->session->userdata('site_lang') == 'hindi') echo 'selected="selected"'; ?>>Hindi</option>
            <option value="french" <?php if($this->session->userdata('site_lang') == 'french') echo 'selected="selected"'; ?>>French</option>
            <option value="german" <?php if($this->session->userdata('site_lang') == 'german') echo 'selected="selected"'; ?>>German</option>   
        </select>                        
        </span>
            <div class="container">
                <a class="navbar-brand" href="<?php echo site_url(); ?>"><?php echo $this->lang->line('text_name_header'); ?></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#"><?php echo $this->lang->line('text_menu_home_header'); ?>
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><?php echo $this->lang->line('text_menu_demo_header'); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><?php echo $this->lang->line('text_menu_tutorials_header'); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><?php echo $this->lang->line('text_menu_contact_header'); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">&nbsp;</a>
                        </li>                       
                        
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">    
      <div class="row">
        <div class="col-lg-12">
            <?php echo $this->lang->line('text_content'); ?>
        </div>
      </div>   
    </div>
        <!-- Footer -->
      <footer class="py-2" style="background-color: #3B5998;">
          <div class="container">
              <p class="m-0 text-center text-white"><?php echo $this->lang->line('text_copyright_footer'); ?></p>
          </div>
          <!-- /.container -->
      </footer>

      <script>var url = "<?php echo site_url(); ?>";</script> 
      <!-- Bootstrap core JavaScript -->
      <script src="<?php echo HTTP_VENDOR_PATH; ?>jquery/jquery.min.js"></script>
      <script src="<?php echo HTTP_VENDOR_PATH; ?>popper/popper.min.js"></script>
      <script src="<?php echo HTTP_VENDOR_PATH; ?>bootstrap/js/bootstrap.min.js"></script>
      </body>
      </html>