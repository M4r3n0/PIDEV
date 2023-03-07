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
public class Panier {
    private int id_panier;
    private int nb_produit;

    public int getId_panier() {
        return id_panier;
    }

    public void setId_panier(int id_panier) {
        this.id_panier = id_panier;
    }

    public int getNb_produit() {
        return nb_produit;
    }

    public void setNb_produit(int nb_produit) {
        this.nb_produit = nb_produit;
    }

    public Panier() {
    }

    public Panier(int nb_produit) {
        this.nb_produit = nb_produit;
    }

    public Panier(int id_panier, int nb_produit) {
        this.id_panier = id_panier;
        this.nb_produit = nb_produit;
    }

    @Override
    public String toString() {
        return "Panier{" + "id_panier=" + id_panier + ", nb_produit=" + nb_produit + '}';
    }
   
    
}
