<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Maincontroller extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->view('welcome_login');
	}

	public function login(){
		$username = $_POST['correo'];
		$pass = $_POST['password'];

		$url = "http://carloshosting.esy.es/apiABC/index.php/Usuarios/".$username."/".$pass;
		$respuesta = $this->curl_get($url);
		
		if($respuesta['code'] == 200){
			$this->carga_lista_usuarios();
		}else{
			$this->index();
		}
	}

	public function carga_lista_usuarios(){
		$usuarios = $this->curl_get("http://carloshosting.esy.es/apiABC/index.php/Usuarios");
		$data['usuarios'] = $usuarios['response']; 
		$this->load->view('view_lista_usuarios',$data);
	}

	public function anadir()
	{
		# code...
		$this->load->view('view_anadir');
	}

	public function insertar()
	{
		$nombre = $this->input->post('nombre');
		$apellidoPaterno = $this->input->post('aPaterno');
		$apellidoMaterno = $this->input->post('aMaterno');
		$correo = $this->input->post('email');
		$password = $this->input->post('password');
		$edad = $this->input->post('edad');
		$sexo = $this->input->post('sexo');
		$direccion = $this->input->post('direccion');
		$cp = $this->input->post('cp');
		$tipoU = $this->input->post('tipo');
		
		$this->form_validation->set_rules('nombre','Nombre','trim|required|max_length[30]|min_length[3]');
		$this->form_validation->set_rules('aPaterno','Apellido Paterno','trim|required|max_length[30]|min_length[3]');
		$this->form_validation->set_rules('aMaterno','Apellido Materno','trim|required|max_length[30]|min_length[3]');
		$this->form_validation->set_rules('direccion','Direccion','trim|required|max_length[30]|min_length[5]');

		$this->form_validation->set_rules('edad','Edad','required|integer');
		$this->form_validation->set_rules('cp','cp','required|integer');

		$this->form_validation->set_message('required','El campo %s es obligatorio');
		$this->form_validation->set_message('integer','El campo %s debe de ser entero');
		$this->form_validation->set_message('min_length','El campo %s debe tener al menos %s caracteres');
		$this->form_validation->set_message('max_length','El campo %s debe tener a lo mas %s caracteres');

		if (!$this->form_validation->run()) {
					# si no pasamos las validaciones
			$this->anadir();
					//echo "<script></script>";
		} else {
			$data = array(
			    	'nombre' =>$nombre,
			      	'paterno' =>$apellidoPaterno,
					'materno' =>$apellidoMaterno,
					'email' =>$correo,
					'contrasenia' =>$password,
					'edad' =>$edad,		
					'sexo' =>$sexo,
					'direccion' => $direccion,
					'cp' =>$cp,
					'tipousuario'=> $tipoU
				);

			$url = "http://carloshosting.esy.es/apiABC/index.php/Usuarios";
			$respuesta =  $this->conexionApi($url,$data,"POST");
			
			if($respuesta['code'] == 201){
				$this->carga_lista_usuarios();
				echo "<script>alert('El Usuario fue registrado exitosamente');</script>";
			}else{
				$this->carga_lista_usuarios();
				echo "<script>alert('El Usuario no fue registrado, Intentelo mas tarde');</script>";
			}
			
		}
		
	}


	public function eliminar($id)
	{
		# code...
		echo $id."<br>";
		//echo $this->uri->segment(3);
		$url = "http://carloshosting.esy.es/apiABC/index.php/Usuarios/".$id;
		$data = array('id' =>$id );
		$respuesta =  $this->conexionApi($url,$data,"DELETE");
			
		// if($respuesta['code'] == 200){
		// 		$this->carga_lista_usuarios();
		// 		echo "<script>alert('El Usuario fue eliminado exitosamente');</script>";
		// }else{
		// 		$this->carga_lista_usuarios();
		// 		echo "<script>alert('El Usuario no fue eliminado, Intentelo mas tarde');</script>";
		// }


	}

	public function vista_editar()
	{
		# code...
		$this->load->view('view_anadir');
	}

	public function editar()
	{
		$nombre = $this->input->post('nombre');
		$apellidoPaterno = $this->input->post('aPaterno');
		$apellidoMaterno = $this->input->post('aMaterno');
		$correo = $this->input->post('email');
		$password = $this->input->post('password');
		$edad = $this->input->post('edad');
		$sexo = $this->input->post('sexo');
		$direccion = $this->input->post('direccion');
		$cp = $this->input->post('cp');
		$tipoU = $this->input->post('tipo');
		
		$this->form_validation->set_rules('nombre','Nombre','trim|required|max_length[30]|min_length[3]');
		$this->form_validation->set_rules('aPaterno','Apellido Paterno','trim|required|max_length[30]|min_length[3]');
		$this->form_validation->set_rules('aMaterno','Apellido Materno','trim|required|max_length[30]|min_length[3]');
		$this->form_validation->set_rules('direccion','Direccion','trim|required|max_length[30]|min_length[5]');

		$this->form_validation->set_rules('edad','Edad','required|integer');
		$this->form_validation->set_rules('cp','cp','required|integer');

		$this->form_validation->set_message('required','El campo %s es obligatorio');
		$this->form_validation->set_message('integer','El campo %s debe de ser entero');
		$this->form_validation->set_message('min_length','El campo %s debe tener al menos %s caracteres');
		$this->form_validation->set_message('max_length','El campo %s debe tener a lo mas %s caracteres');

		if (!$this->form_validation->run()) {
					# si no pasamos las validaciones
			$this->anadir();
					//echo "<script></script>";
		} else {
			$data = array(
			    	'nombre' =>$nombre,
			      	'paterno' =>$apellidoPaterno,
					'materno' =>$apellidoMaterno,
					'email' =>$correo,
					'contrasenia' =>$password,
					'edad' =>$edad,		
					'sexo' =>$sexo,
					'direccion' => $direccion,
					'cp' =>$cp,
					'tipousuario'=> $tipoU
				);

			// $url = "http://carloshosting.esy.es/apiABC/index.php/Usuarios";
			// $respuesta =  $this->conexionApi($url,$data,"POST");
			
			// if($respuesta['code'] == 201){
			// 	$this->carga_lista_usuarios();
			// 	echo "<script>alert('El Usuario fue registrado exitosamente');</script>";
			// }else{
			// 	$this->carga_lista_usuarios();
			// 	echo "<script>alert('El Usuario no fue registrado, Intentelo mas tarde');</script>";
			// }
			
		}
		
	}


	private function curl_get($url) {

		// inicializar CURL para pedir la informacion
		$request_usuario = curl_init();
		curl_setopt($request_usuario,CURLOPT_URL, $url);

		// esta linea es importante para poder procesar la respuesta json
		curl_setopt($request_usuario, CURLOPT_RETURNTRANSFER, true);

		// ejecutamos
		$respuesta = curl_exec($request_usuario);
		curl_close($request_usuario);

		// convertimos el json de respuesta en un array asociativo
		$json = json_decode($respuesta, true);

		if (count($json['code'] == 200)){
			return $json;
		}else{
			return null;
		}
	}

	/**
*$operacion pueden ser POST, PUT, DELETE
*/
	public function conexionApi($url,$data,$operacion)
	{
		# establcemos la conexion
		$respuesta = curl_init();
		curl_setopt($respuesta,CURLOPT_URL, $url);
		//establecemos el verbo http
		curl_setopt($respuesta,CURLOPT_RETURNTRANSFER,true);
		curl_setopt($respuesta,CURLOPT_CUSTOMREQUEST,$operacion);
		//enviamos los datos
		curl_setopt($respuesta,CURLOPT_POSTFIELDS,http_build_query($data));
		//obtenemos la respuesta
		$response = curl_exec($respuesta);
		curl_close($respuesta);

		$json = json_decode($response, true);
		var_dump($json);
		return $json;
	}


}


?>