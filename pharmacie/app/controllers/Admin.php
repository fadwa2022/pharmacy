<?php
class Admin extends Controller
{
    private $medicamentModel;

    public function __construct()
    {
        if (!isLoggdIn()) {
            redirect('Users/login');
        }
        $this->medicamentModel = $this->model('medicament');
    }

    public function dashbord()
    {        
        $numbreproduits = $this->medicamentModel->numberproduit(); 
        $maximum = $this->medicamentModel->maximum(); 


        $data = [
            'numbreproduits' => $numbreproduits,
            'maximum' =>  $maximum
        ];
        $this->view('Admin/dashbord', $data);
    }

    public function tables($page = "", $tmp = 'Prix')
    {
        if ($page == "") $page = 1;
        $produitPerPage = 4;
        $offset = $produitPerPage * ($page - 1);

        if ($tmp == 'Prix' || $tmp == 'date') {
           
            $produit   = $this->medicamentModel->getproduitPaginatedcroi($offset, $produitPerPage, $tmp);
            $data = [
                'produit' => $produit,

            ];

            $this->view('Admin/tables', $data);
        } elseif ($tmp == 'Prixdec' || $tmp == 'datedec') {

            if ($tmp == 'Prixdec') {
                $tmp = 'Prix';
            } else {
                $tmp = 'date';
            }
            $produit   = $this->medicamentModel->getproduitPaginateddecroi($offset, $produitPerPage, $tmp);
            $data = [
                'produit' => $produit,

            ];

            $this->view('Admin/tables', $data);
        } else {

            $produit   = $this->medicamentModel->getproduitPaginated($offset, $produitPerPage, $tmp);
            $data = [
                'produit' => $produit,

            ];

            $this->view('Admin/tables', $data);
        }
    }

    public function Addproduit()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            for ($i = 0; $i < count($_POST["name"]); $i++) {
                $data = [
                    'name' => trim($_POST['name'][$i]),
                    'quantite' => trim($_POST['quantite'][$i]),
                    'price' => trim($_POST['price'][$i]),
                    'discription' => trim($_POST['discription'][$i]),
                    'image' => trim($_POST['image'][$i]),
                ];
                if (!empty($data['name']) && !empty($data['quantite']) && !empty($data['price']) && !empty($data['discription']) && !empty($data['image'])) {
                    if ($this->medicamentModel->addproduit($data)) {
                        flash('message', 'product Added');
                        redirect('Admin/tables');
                    } else {
                        die('wrong');
                    }
                } else {
                    $this->view('Admin/Addproduit', $data);
                }
            }
        } else {
            $data = [
                'name' => '',
                'quantite' => '',
                'price' => '',
                'discription' => '',
                'image' => '',
            ];

            $this->view('Admin/Addproduit', $data);
        }
    }

    public function Updateproduit($Id)
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'Id' => $Id,
                'name' => trim($_POST['name']),
                'quantite' => trim($_POST['quantite']),
                'price' => trim($_POST['price']),
                'discription' => trim($_POST['discription']),
                'image' => trim($_POST['image']),
            ];

            if (!empty($data['name']) && !empty($data['quantite']) && !empty($data['price']) && !empty($data['discription']) && !empty($data['image'])) {
                if ($this->medicamentModel->Updatproduit($data)) {
                    flash('message', 'product Updated');
                    redirect('Admin/tables');
                } else {
                    die('wrong');
                }
            } else {
                $this->view('Admin/Updateproduit', $data);
            }
        } else {
            $data = [
                'Id' => $Id,
                'name' => '',
                'quantite' => '',
                'price' => '',
                'discription' => '',
                'image' => '',
            ];
            $this->view('Admin/Updateproduit', $data);
        }
    }

    public function deleteproduit($Id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if ($this->medicamentModel->deleteproduit($Id)) {
                flash('message', 'medicament Removed ');
                redirect('Admin/tables');
            } else {
                flash('message', 'Somthing went wrong');
                redirect('Admin/tables');
            }
        } else {
            if ($this->medicamentModel->deleteproduit($Id)) {
                flash('message', 'medicament Removed ');
                redirect('Admin/tables');
            } else {
                flash('message', 'Somthing went wrong');
                redirect('Admin/tables');
            }
        }
    }
    public function filter() {
    if((isset($_POST['produit']))&&($_POST['produit'] !== "")){

        $name_produit=$_POST['produit'];
            $produit = $this->medicamentModel->getProduitsByname($name_produit);
         $data = [
             'produit' => $produit,
         ];
         $this->view('Admin/tables', $data);
     }
       else{
        $this-> tables('1', 'Prix');
    }
     }
}
