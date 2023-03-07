/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package projetjava3a18.services;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import projetjava3a18.entites.Panier;
import projetjava3a18.entites.Produit;
import projetjava3a18.interfaces.panierCrud;
import projetjava3a18.utils.MyConnection;



/**
 *
 * @author 21693
 */


  
public class PanierCrud implements panierCrud <Panier>{
       private Connection cnx;
    private String requete;

    ProduitCrud ecd = new ProduitCrud();
    public PanierCrud() {
        cnx = MyConnection.getInstance().getcnx();
    }
   public void insert(Panier p) {
        try {
            String requete = "INSERT INTO panier (id_panier, nb_produit)"
                    + "VALUES (?,?)";
            PreparedStatement Panier = cnx.prepareStatement(requete);

            Panier.setInt(1,p.getId_panier());
            Panier.setInt(2,p.getNb_produit());
            Panier.executeUpdate();
            System.out.println("Done!");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }

   public void delete(int x) throws SQLException {

        try {
            //System.out.println("Entrez l'Id du produit supprimer");
            // Scanner sc5 = new Scanner(System.in);
            // String a = sc5.nextLine();

            String requete4 = "delete from Panier where id_panier=" + x;
            PreparedStatement ste = MyConnection.getInstance().getcnx().prepareStatement(requete4);
            ste.executeUpdate();

            System.out.println("panier supprimé aves succeés");
        } catch (SQLException ex) {
            System.out.println(ex);
        }
    }
   public void ModifierPanier(Panier p, int id_panier ) {
        try {
            String sql = "UPDATE panier SET id_panier=? ,nb_Produit=? WHERE panier.id_panier =" + id_panier;
    
            PreparedStatement ste = MyConnection.getInstance().getcnx().prepareStatement(sql);

//  
            
            
            ste.setInt(1,p.getId_panier());
            ste.setInt(2,p.getNb_produit());
            
            ste.executeUpdate();
            System.out.println("Modification effectuée avec succés !!");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }

    }


    

    public List<Panier> entitiesList() {
        ArrayList<Panier> myList = new ArrayList();

        try {
            String requete = "SELECT * FROM panier";

            Statement Panier = MyConnection.getInstance().getcnx().createStatement();
            ResultSet rs = Panier.executeQuery(requete);

            while (rs.next()) {
                Panier P = new Panier();
                P.setId_panier(rs.getInt("id_panier"));
                P.setNb_produit(rs.getInt("nb_produit"));
                

                myList.add(P);
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        return myList;
    }

    @Override
    public void delete(Panier t) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public void update(Panier t) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public List<Panier> readAll() {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public Panier readById(int id) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }


   public void calculPrixtotal (int id_produit ,Panier p) throws SQLException {
       Produit e= ecd.GetProduit(id_produit);
       
       System.out.println("le prix est"+e.getPrix_produit()*p.getNb_produit());
   }

} 
    

