<?php
class medicament
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function  addproduit($data)
    {
        $this->db->query('INSERT INTO  products(Nom,Image,Prix,quantite,discription) VALUES (:Nom,:Image,:Prix,:quantite,:discription)');

        $this->db->bind(':Nom', $data['name']);
        $this->db->bind(':Image', $data['image']);
        $this->db->bind(':Prix', $data['price']);
        $this->db->bind(':quantite', $data['quantite']);
        $this->db->bind(':discription', $data['discription']);
  
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    
    public function getProduit()
    {
        $this->db->query('SELECT * FROM `products`;');
        $results = $this->db->resultSet();
        return $results;
    }
    public function getproduitPaginated($offset, $produitPerPage){
        $this->db->query('SELECT * FROM `products` ORDER BY Id LIMIT :produitPerPage OFFSET :offset');
        $this->db->bind(':offset', $offset);
        $this->db->bind(':produitPerPage', $produitPerPage);
        $results = $this->db->resultSet();
        return $results;
    }
    public function getproduitPaginatedcroi($offset, $produitPerPage,$sort)
    {  
         $query = 'SELECT * FROM `products` ORDER BY ' . $sort . ' LIMIT :produitPerPage OFFSET :offset;';
        $this->db->query($query);
        $this->db->bind(':offset', $offset);
        $this->db->bind(':produitPerPage', $produitPerPage);
        $results = $this->db->resultSet();
        return $results;
    }
    public function getproduitPaginateddecroi($offset, $produitPerPage,$sort)
    {  
         $query = 'SELECT * FROM `products` ORDER BY ' . $sort . ' DESC LIMIT :produitPerPage OFFSET :offset;';
        $this->db->query($query);
        $this->db->bind(':offset', $offset);
        $this->db->bind(':produitPerPage', $produitPerPage);
        $results = $this->db->resultSet();
        return $results;
    }

    public function getProduitById($Id)
    {
        $this->db->query('SELECT * FROM `products` WHERE `Id`=:Id;');
        $this->db->bind(':Id', $Id);
        $row = $this->db->single();
        return $row;
    }
    public function getProduitsByname($name_produit){
        $this->db->query("SELECT * FROM `products` WHERE `Nom` LIKE '%$name_produit%'");
        $results = $this->db->resultSet();
        return $results;
    }
    public function Updatproduit($data){
        $this->db->query('UPDATE `products` SET `Nom` = :name, `Image` = :image, `Prix` = :price,`quantite` = :quantite, `discription` =:discription WHERE `Id`= :Id'); 
        $this->db->bind(':Id', $data['Id']);
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':image', $data['image']);
        $this->db->bind(':price', $data['price']);
        $this->db->bind(':quantite', $data['quantite']);
        $this->db->bind(':discription', $data['discription']);

        //   execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function deleteproduit($Id)
    {
        $this->db->query('DELETE FROM `products` WHERE `Id`=:Id');
        $this->db->bind(':Id', $Id);
        //   execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function numberproduit(){
        $this->db->query('SELECT COUNT(`Id`) AS cnt FROM products;');
       $row =$this->db->single();
       return $row;
   }
   public function maximum(){
    $this->db->query('SELECT MAX(Prix) AS cnt FROM `products`');
   $row =$this->db->single();
   return $row;
}
}
