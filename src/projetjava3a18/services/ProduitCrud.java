/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package projetjava3a18.services;

import java.sql.Connection;
import projetjava3a18.entites.Produit;
import projetjava3a18.interfaces.EntityCrud;
import projetjava3a18.utils.MyConnection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import projetjava3a18.entites.Panier;


/**
 *
 * @author Admis
 */
public class ProduitCrud implements EntityCrud<Produit> {

    private Connection cnx;
    private String requete;

    public ProduitCrud() {
        cnx = MyConnection.getInstance().getcnx();
    }

    public void insert(Produit t) {
        try {
            String requete = "INSERT INTO Produit (id_produit, nom_produit,prix_produit,quantite,descrption)"
                    + "VALUES (?,?,?,?,?)";
            PreparedStatement Produit = cnx.prepareStatement(requete);

            Produit.setInt(1, t.getId_produit());
            Produit.setString(2, t.getNom_produit());
            Produit.setFloat(3, t.getPrix_produit());
            Produit.setInt(4, t.getQuantite());
            Produit.setString(5, t.getDescrption());
            Produit.executeUpdate();
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

            String requete4 = "delete from Produit where id_produit=" + x;
            PreparedStatement ste = MyConnection.getInstance().getcnx().prepareStatement(requete4);
            ste.executeUpdate();

            System.out.println("Produit supprimé aves succeés");
        } catch (SQLException ex) {
            System.out.println(ex);
        }
    }
   public void ModifierProduit(Produit t, int id_produit ) {
        try {
            String sql = "UPDATE produit SET nom_Produit=? , prix_produit=?, quantite=? , descrption=?  WHERE produit.id_produit=" + id_produit;
            PreparedStatement ste = MyConnection.getInstance().getcnx().prepareStatement(sql);

//  
            
            ste.setString(1, t.getNom_produit());
            ste.setFloat(2, t.getPrix_produit());
            ste.setInt(3, t.getQuantite());
            ste.setString(4, t.getDescrption());
            ste.executeUpdate();
            System.out.println("Modification effectuée avec succés !!");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }

    }


    

    public List<Produit> entitiesList() {
        ArrayList<Produit> myList = new ArrayList();

        try {
            String requete = "SELECT * FROM produit";

            Statement Produit = MyConnection.getInstance().getcnx().createStatement();
            ResultSet rs = Produit.executeQuery(requete);

            while (rs.next()) {
                Produit t = new Produit();
                t.setId_produit(rs.getInt(1));
                t.setNom_produit(rs.getString("nom_Produit"));
                t.setPrix_produit(rs.getFloat("prix_produit"));
                t.setQuantite(rs.getInt("quantite"));
                t.setDescrption(rs.getString("descrption"));

                myList.add(t);
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        return myList;
    }

    @Override
    public void delete(Produit t) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public void update(Produit t) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public List<Produit> readAll() {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public Produit readById(int id) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    public void insert(Panier p4) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

   public Produit GetProduit(int id) throws SQLException {

        try {
            String sql = "SELECT * FROM Evenement where idEvent=" + id;

            ResultSet rs;
            PreparedStatement ste;
            ste = cnx.prepareStatement(sql);
            rs = ste.executeQuery();
            while (rs.next()) {
                Produit e = new Produit();
                e.setId_produit(rs.getInt("id_produit"));
                e.setNom_produit(rs.getString("nom_produit"));
                e.setPrix_produit(rs.getFloat("prix_produit"));
                e.setQuantite(rs.getInt("quantite"));
                e.setDescrption(rs.getString("descrption"));
               

                return e;
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());

        }
        System.out.println("aucun Produit");
        return null;
    }
public static double calculerTotal(double prixProduit, int quantite) {
    return prixProduit * quantite;
}
}
