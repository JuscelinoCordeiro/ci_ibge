<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_regiao extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_ibge');
	}

	public function index()
	{

		$info['titulo'] = "Tela Regiões";

		//			$dados['regioes'] = $this->m_ibge->pegarTodasRegioes();
		//			$dados['minhaRegiao'] = $this->m_ibge->pegarRegiaoPorId('3')->row()->NM_REGIAO_IBGE;

		//			$dados['titulo'] = "teste de view";
		//			if ($dados == ''){
		//			$dados['titulo'] = "teste de view";
		//			}

		//			if(isset ($_POST['reglist'])){
		//				$dados['muniRegiao'] = $_POST['reglist'];
		//			}

		if (($this->input->post('valor') !== null) && !empty($this->input->post('valor'))) {
			$idRegiao = (int)strip_tags($this->input->post('id'));
			if (isset($idRegiao) && !empty($idRegiao)) {
				$dados['muniRegiao'] = $this->m_ibge->buscarMunicipiosPorRegiao($idRegiao);
			}
		}


		$this->load->view('header', $info);
		$this->load->view('v_inicio', $dados);
		$this->load->view('footer');
	}

	//		public function buscarMunicipiosPorRegiao($id) {
	//			$idRegiao = (int)strip_tags($this->input->post($id));
	//			if (isset($idRegiao) && !empty($idRegiao)) {
	//				$dados['muniRegiao'] = $this->m_ibge->buscarMunicipiosPorRegiao($id);
	//			}
	//			$this->load->view('v_inicio', $dados);
	//		}
	/**
	 * @return object
	 */
}