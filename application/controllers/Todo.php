<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Todo extends CI_Controller {

	public function __construct() {
		//	Obligatoire
		parent::__construct();
		//$this->template->set('title', 'Todo');
		$this->load->model('todo_model', 'todos');
		
		// Debug
		if($this->config->item('debug') === TRUE) {
			$this->output->enable_profiler(TRUE);
			error_reporting('E_ALL');
		} else {
			$this->output->enable_profiler(FALSE);
			error_reporting(E_ERROR);
		}
		
	}
	
	// Index // page d'accueil
	public function index()	{
		/*
		// Afficher les todos de l'utilisateur connecté ou ceux par défaut
		// Cette fonctionnalité sera ajoutée dès que j'aurrais un système d'Authentification valable sous Codeigniter
        //if (Auth::check()) {
        //    $todos = Todo::where('user_id', '=', Auth::user()->id)->get();
		//	$data['todos'] = $this->todos->get('user_id = Auth:user_id');
        //} else {
        //    $todos = Todo::where('user_id', '=', 0)->get();
		//	$data['todos'] = $this->todos->get('user_id = 0');
        //}
		*/
		$data['todos'] = $this->todos->get('user_id = 0');
	    $this->template->view('todo/index',$data);
	}
	
	// AJAX // Retour Json	
	
	// Add 
	public function ajax_add()	{
		
        $text = $this->input->post('value');
		
		if ($text=='') {
            $d['result'] = 0;
            $d['message'] = "La tâche ne peut pas être vide.";
       } else {
       	 	/*
			// Cette fonctionnalité sera ajoutée dès que j'aurrais un système d'Authentification valable sous Codeigniter
            if (Auth::check()) {
                $todo->user_id = Auth::user()->id;
            } else {
                $todo->user_id = 0;
            }
			*/
			$echappe = array('text' => $text);
            $noechappe=array('user_id'=>0,'status'=>1,'created'=>'NOW()');
			$insert = $this->todos->insert($echappe,$noechappe);
			if($insert) {
				$d['result'] =  1;
	            $d['message'] = "La tâche a été ajoutée.";
				// Pour le refresh
	            $d['url'] = "todo/ajax_refresh";
	            $d['data'] = $insert;
	            $d['div'] = "#todos";
			} else {
                $d['result'] =  0;
                $d['message'] =  "Impossible d'ajouter la tâche.";
			}
        }     
   		header('Content-Type: application/json');
    	echo json_encode( $d );
	}
			
	// Refresh
	// J'ai fais le choix de chercher l'enregistrement ajouté pour l'afficher via un partial à la suite des enregistrements déjà affichés.
	// Il aurrait été plus simple et plus rapide (mais moins joli) de rafraichir l'index los d'un ajout réussi. 
	public function ajax_refresh() {
		$id = intval($this->input->post('value'));
		$data['e'] = $this->todos->get($id);
		print ($this->load->view('todo/_todo',$data, TRUE));
	}
    			
	// MAJ
	public function ajax_maj_status() {
		$id = intval($this->input->post('value'));
        $todo = $this->todos->get($id);
        if ($todo->status==1) {
            $status=0;
            $d['message'] =  "La tâche est à faire.";
        } else {
            $status=1;
            $d['message'] =  "La tâche est finie.";
        }
        $echappe=array();
        $noechappe=array('status'=>$status,'modified'=>'NOW()');
		$this->todos->update($id,$echappe,$noechappe);		
        $d['result'] = $status;
   		header('Content-Type: application/json');
    	echo json_encode( $d );
    }
			
	// DELETE
	public function ajax_delete()	{
		$id = intval($this->input->post('value'));
        if ($this->todos->delete($id)) {
            $d['result'] =  1;
            $d['message'] =  "La tâche a été supprimée.";
        } else {
            $d['result'] =  0;
            $d['message'] = "Impossible de supprimer la tâche.";
        }
   		header('Content-Type: application/json');
    	echo json_encode( $d );
    }
	
}
