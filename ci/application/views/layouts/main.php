<?php 

$home = "";
$projects = "";
$register = "";

if( $this->uri->segment(1) == 'projects') {
  $projects = 'active';
} elseif ( $this->uri->segment(2) == 'register') {
  $register = 'active';
}else {
  $home = 'active';
}


 ?>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <?php if($this->session->userdata('logged_in')): ?>

        <li><a class="navbar-brand" href="<?php echo base_url(); ?>">Ci App</a></li>

      <?php endif; ?>
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="<?php echo $home; ?>"><a href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a></li>

    <?php if( $this->session->userdata('logged_in')): ?>

        <li class="<?php echo $projects; ?>"><a href="<?php echo base_url(); ?>projects/index">Projects <span class="sr-only">(current)</span></a></li>
     <?php endif; ?>  

        <?php if($this->session->userdata('logged_in') == false): ?>

        <li class="<?php echo $register; ?>"><a href="<?php echo base_url(); ?>users/register">Register <span class="sr-only">(current)</span></a></li>

      <?php endif; ?> 
       
          </ul>
        </li>
      </ul>

      <ul class="nav navbar-nav navbar-right">

      <?php if($this->session->userdata('logged_in')): ?>

        <li><a href="<?php echo base_url(); ?>users/logout"><?php echo lang('btn_logout'); ?></a></li>

      <?php endif; ?>

      <li>
         <span>
             <select class="form-control" onchange="javascript:window.location.href='<?php echo base_url(); ?>multilanguageswitcher/switch/'+this.value;">
                  <option value="english" <?php if($this->session->userdata('site_lang') == 'english') echo 'selected="selected"'; ?>>English</option>
                  <option value="french" <?php if($this->session->userdata('site_lang') == 'french') echo 'selected="selected"'; ?>>Français</option>
                  <option value="german" <?php if($this->session->userdata('site_lang') == 'german') echo 'selected="selected"'; ?>>Deutsch</option>   
                  <option value="bengali" <?php if($this->session->userdata('site_lang') == 'bengali') echo 'selected="selected"'; ?>>বাংলা</option>
              </select>  
       </span>

    </li>

          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>  

<p class="m-0 text-center text-white"><?php echo $this->lang->line('text_copyright_footer'); ?></p>

<div class="container">

    
  <div class="col-xs-3">

  <?php if ( $this->uri->segment(2) !== 'register'): ?>
  
  <?php $this->load->view('users/login_view'); ?> 

  <?php endif; ?>

  </div>


  <div class="col-xs-9">
    
  <?php $this->load->view($main_view); ?>  

  </div>  


</div>
  
</body>
</html>
