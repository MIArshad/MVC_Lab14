<?PHP

class Migrate extends CI_Controller{

  public function index()
  {
    //load in the library when we visit the page
    //if this controller contained multiple functions it would be added in the constructor
    $this->load->library('migration');

    if($this->migration->current() === FALSE)
    {
      //A codeigniter function used for displaying the full PHP error on a page
      show_error($this->migration->error_string());
    }
  }
}
?>
