/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package projetjava3a18.entites;

/**
 *
 * @author 21693
 */
public class Produit {
    private int id_produit;
    private String nom_produit;
    private float prix_produit;
    private int quantite;
    private String descrption; 

    public Produit() {
    }

    public Produit(int id_produit, String nom_produit, float prix_produit, int quantite, String descrption) {
        this.id_produit = id_produit;
        this.nom_produit = nom_produit;
        this.prix_produit = prix_produit;
        this.quantite = quantite;
        this.descrption = descrption;
    }

    public Produit(String nom_produit, float prix_produit, int quantite, String descrption) {
        this.nom_produit = nom_produit;
        this.prix_produit = prix_produit;
        this.quantite = quantite;
        this.descrption = descrption;
    }

    public int getId_produit() {
        return id_produit;
    }

    public void setId_produit(int id_produit) {
        this.id_produit = id_produit;
    }

    public String getNom_produit() {
        return nom_produit;
    }

    public void setNom_produit(String nom_produit) {
        this.nom_produit = nom_produit;
    }

    public float getPrix_produit() {
        return prix_produit;
    }

    public void setPrix_produit(float prix_produit) {
        this.prix_produit = prix_produit;
    }

    @Override
    public String toString() {
        return "Produit{" + "id_produit=" + id_produit + ", nom_produit=" + nom_produit + ", prix_produit=" + prix_produit + ", quantite=" + quantite + ", descrption=" + descrption + '}';
    }

    public int getQuantite() {
        return quantite;
    }

    public void setQuantite(int quantite) {
        this.quantite = quantite;
    }

    public String getDescrption() {
        return descrption;
    }

    public void setDescrption(String descrption) {
        this.descrption = descrption;
    }

//    //public void setquantite_produit(String string) {
//        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
//    }
//
//   // public void setdescription(String string) {
//        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
//    }
//
//    public String getquantite_produit() {
//        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
//    }
//
//    public String getdescription() {
//        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
//    }
}

    
