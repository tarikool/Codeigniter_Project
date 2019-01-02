  <?php
  
  class MultiLanguageLoader
  {
      function initialize() {
          $ci =& get_instance();
          // load language helper
          $ci->load->helper('language');
          $siteLang = $ci->session->userdata('site_lang');
          if ($siteLang) {
              // difine all language files
              $ci->lang->load('form_main',$siteLang);
              $ci->lang->load('homepage',$siteLang);
              $ci->lang->load('projectdetails',$siteLang);
          } else {
              // default language files
              $ci->lang->load('form_main','english');
              $ci->lang->load('homepage','english');
              $ci->lang->load('projectdetails','english');
          }
      }
  }
  ?>