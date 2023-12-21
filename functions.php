<?php

// variaveis
define('ROOT_DIR', get_theme_file_path());
define('STYLES_DIR', get_template_directory_uri() . '/assets/css');
define('INCLUDES_DIR', ROOT_DIR . '/includes');
define('IMAGES_DIR', get_template_directory_uri()  . '/assets/images');
define('SCRIPTS_DIR', get_template_directory_uri() . '/assets/js');



//Função para css/js
function theme_in_load_scripts()
{   //Enfileirando reset.css
    wp_enqueue_style('reset', get_template_directory_uri() . '/styles/reset.css', [], '1.1', 'all');
    
     //Enfileirando base.css
     wp_enqueue_style('base-css', get_template_directory_uri() . '/styles/abstract/_base.css', [], '1.1', 'all');
    

    
    //Enfileirando Style.css
    wp_enqueue_style('theme-in-base-style', get_stylesheet_uri(), [], '1.1', 'all');

    //Enfileirando style/style.css
    //wp_enqueue_style('theme-in-style', get_template_directory_uri() . '/styles/style.css', ['sss'], '1.1', false);
    
     //Enfileirando style/swiper-bundle.css
     wp_enqueue_style('swiper-bundle', get_stylesheet_uri() . '/styles/swiper-bundle.css', [], '1.1', 'all');
     //Enfileirando _cargos.css
     wp_enqueue_style('_cargos-css', get_template_directory_uri() . '/styles/components/_cargos.css', [], '1.1', 'all');
     //Enfileirando _clientes..css
     wp_enqueue_style('_clientes-css', get_template_directory_uri() . '/styles/components/_clientes.css', [], '1.1', 'all');
     //Enfileirando _contato-cliente..css
     wp_enqueue_style('_contato-cliente-css', get_template_directory_uri() . '/styles/components/_contato-cliente.css', [], '1.1', 'all');
     //Enfileirando _contato-ps.css
     wp_enqueue_style('_contato-ps-css', get_template_directory_uri() . '/styles/components/_contato-ps.css', [], '1.1', 'all');
     //Enfileirando _depoimentos.css
     wp_enqueue_style('_depoimentos-css', get_template_directory_uri() . '/styles/components/_depoimentos.css', [], '1.1', 'all');
     //Enfileirando _destaque.css
     wp_enqueue_style('_destaque-css', get_template_directory_uri() . '/styles/components/_destaque.css', [], '1.1', 'all');
     //Enfileirando _etapas.css
     wp_enqueue_style('_etapas-css', get_template_directory_uri() . '/styles/components/_etapas.css', [], '1.1', 'all');
     //Enfileirando _footer.css
     wp_enqueue_style('_footer-css', get_template_directory_uri() . '/styles/components/_footer.css', [], '1.1', 'all');
     //Enfileirando _header.css
     wp_enqueue_style('_header-css', get_template_directory_uri() . '/styles/components/_header.css', [], '1.1', 'all');
     //Enfileirando _mej.css
     wp_enqueue_style('_mej-css', get_template_directory_uri() . '/styles/components/_mej.css', [], '1.1', 'all');
     //Enfileirando _orcamento.css
     wp_enqueue_style('_orcamento-css', get_template_directory_uri() . '/styles/components/_orcamento.css', [], '1.1', 'all');
     //Enfileirando _parcerias.css
     wp_enqueue_style('_parcerias-css', get_template_directory_uri() . '/styles/components/_parcerias.css', [], '1.1', 'all');
     //Enfileirando _participacao-eventos.css
     wp_enqueue_style('_participacao-eventos-css', get_template_directory_uri() . '/styles/components/_participacao-eventos.css', [], '1.1', 'all');
     //Enfileirando _processo-seletivo.css
     wp_enqueue_style('_processo-seletivo-css', get_template_directory_uri() . '/styles/components/_processo-seletivo.css', [], '1.1', 'all');
     //Enfileirando .css
     wp_enqueue_style('_resultado-css', get_template_directory_uri() . '/styles/components/_resultado.css', [], '1.1', 'all');
     //Enfileirando _sobre-in-junior.css
     wp_enqueue_style('_sobre-in-junior-css', get_template_directory_uri() . '/styles/components/_sobre-in-junior.css', [], '1.1', 'all');
     //Enfileirando _solucoes.css
     wp_enqueue_style('_solucoes-css', get_template_directory_uri() . '/styles/components/_solucoes.css', [], '1.1', 'all');


    

    
    //Enfileirando Swiper
    wp_enqueue_script( 'scripts-swiper-js', get_template_directory_uri() . '/scripts/swiper-bundle.min.js', array(), 1.1, false);

    //Enfileirando JS
    wp_enqueue_script( 'scripts-base', get_template_directory_uri() . '/scripts/script.js', array(), 1.1, false);
}
add_action('wp_enqueue_scripts', 'theme_in_load_scripts');

?>