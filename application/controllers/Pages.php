<?php

/** Um controlador é simplesmente uma classe que ajuda a delegar trabalho. 
* É a cola do seu aplicativo da web. */

/** Classe Pages com método vies */


/** O controlador é o que se tornará o centro de todas as solicitações */


/** $page - nome da página a ser carregada */
class Pages extends CI_Controller{
	public function view($page = 'home'){

	/** verifica se a página solicitada realmente existe */
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
		// Opa, não temos uma página para isso!
		//função interna do CodeIgniter que renderiza a página de erro padrão
                show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize a primeira letra

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
	}
}
?>
