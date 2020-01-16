<?PHP
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_users extends CI_Migration{

  public function up()
  {
    //create multiple columns through an array
    $this->dbforge->add_field(array(
        'user_id' => array (
          'tyoe' => 'INT',
          'constraint' => 5,
          'auto_increment' => TRUE
        ),
        'username' => array(
          'type' => 'VARCHAR',
          'constraint' => '100',
        ),
        'password' => array(
          'type' => 'TEXT',
          'constraint' => '100',
          'null' => TRUE,
        ),
    ));

    //Assign a primary key to the column
    $this->dbforge->add_key('user_id', TRUE);

    //create the table with the specified column
    $this->dbforge->create_table('users');
  }

  public function down()
  {
    //Delet the table
    $this->dbforge->drop_table('users');
  }
}
?>
