<?php
class Novosti extends Controller
{
	public function index()
    {
		$novosti = $this->model->getAllNovosti();
		
		require APP . 'view/_templates/header.php';
		require APP . 'view/novosti/index.php';
        require APP . 'view/_templates/footer.php';
	}
	public function create()
    {		
		$autor = isset($_POST['autor']) ? $_POST['autor'] : '';
		$novost = isset($_POST['novost']) ? $_POST['novost'] : '';
		
		if($autor && $novost) {			
			$this->model->addNovost($autor, $novost);			
			 header('location: ' . URL . 'novosti/index');			
		}
		
		require APP . 'view/_templates/header.php';
		require APP . 'view/novosti/create.php';
        require APP . 'view/_templates/footer.php';
		
	}
	public function read()
    {
		
	}
	public function update()
    {
		
	}
	public function delete()
    {
		
	}
}
?>