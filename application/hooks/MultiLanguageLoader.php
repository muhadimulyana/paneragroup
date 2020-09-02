<?php   
  /**
   * @package Contact :  CodeIgniter Multi Language Loader
   *
   * @author TechArise Team
   *
   * @email  info@techarise.com
   *   
   * Description of Multi Language Loader Hook
   */

  class MultiLanguageLoader
  {
      function initialize() {
          $ci =& get_instance();
          // load language helper
          $ci->load->helper('language');
          
          $siteLang = $ci->session->userdata('site_lang');

          if ($siteLang) {
              // difine all language files
              $ci->lang->load('content',$siteLang);
          } else {
              // default browser language
              $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
              $acceptLang = ['id', 'en']; 
              $lang = in_array($lang, $acceptLang) ? $lang : 'en';
              $contentlang = $lang == 'id' ? 'indonesia' : 'english';
              $ci->lang->load('content', $contentlang);
          }
      }
  }
  ?>