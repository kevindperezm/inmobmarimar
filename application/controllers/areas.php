 <?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once __DIR__ . '/application.php';
require_once __DIR__ . '/properties.php';

class Areas extends ApplicationController {

  public function index() {
    $this->load->helper('areas');

    $data = array(
      'areas' => $this->db->from('areas')->order_by('nombre')->get()->result()
    );

    $this->render('areas/index', $data);
  }

  /**
   * Muestra la lista de propiedades ubicadas en un área.
   *
   * @param  integer  $id     El ID del área
   * @param  integer  $pagina La página de la lista que se quiere ver
   */
  public function show($id, $pagina = 1) {
    $this->load->library('pagination');
    $this->load->library('Picture_repo');

    $area = $this->db->from('areas')->where("id = $id")->limit(1)->get()->result()[0];

    $condiciones = array('area_id' => $area->id);
    $this->init_pagination($condiciones, "areas/$id");

    $propiedades = $this->properties_model->find_all($condiciones,
                                                     self::PER_PAGE,
                                                     self::PER_PAGE * ($pagina - 1));

    $data = array('title'      => 'Propiedades en ' . ucwords($area->nombre),
                  'properties' => $propiedades,
    );

    $this->render('properties/index', $data);
  }

}
