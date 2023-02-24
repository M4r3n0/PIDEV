/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package PIDEV.services;

import PIDEV.Entitiess.Restaurant;
import PIDEV.interfaces.CRUD;
import PIDEV.utils.MyConnection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;

/**
 *
 * @author Admis
 */
public class RestaurantCRUD implements CRUD<Restaurant> {

    public void addEntity(Restaurant r) {
        try {
            String requete = "INSERT INTO restaurants (id,adresse,menu,prog,telephone,nbreP)"
                    + "VALUES('" + r.getId() + "','" + r.getAdresse() + "','" + r.getMenu() + "','" + r.getProg() + "','" + r.getTelephone() + "','" + r.getNbreP() + "',)";
            Statement st = MyConnection.getInstance().getCnx().createStatement();
            st.executeUpdate(requete);
            System.out.println("Restaurant ajouté");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }

    public void Ajouter(Restaurant r) {
        try {
            String requete = "INSERT INTO restaurant (id,adresse,menu,prog,telephone,nbreP)"
                    + "VALUES(?,?,?,?,?,?)";
            PreparedStatement st = MyConnection.getInstance().getCnx().prepareStatement(requete);
            st.setString(1, r.getId());
            st.setString(2, r.getAdresse());
            st.setString(3, r.getMenu());
            st.setString(4, r.getProg());
            st.setInt(5, r.getTelephone());
            st.setInt(6, r.getNbreP());
            st.executeUpdate();
            System.out.println("Restaurant ajouté");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
            
        }
    }
   
    public void Supprimer(String id) {
    try {
        String requete = "DELETE FROM restaurant WHERE id=?";
        PreparedStatement st = MyConnection.getInstance().getCnx().prepareStatement(requete);
        st.setString(1, id);
        st.executeUpdate();
        System.out.println("Restaurant supprimé");
    } catch (SQLException ex) {
        System.out.println(ex.getMessage());
    }
}
   public void modifierAdresse(String id, String nvAdresse) {
    try {
        String requete = "UPDATE restaurant SET adresse = ? WHERE id = ?";
        PreparedStatement st = MyConnection.getInstance().getCnx().prepareStatement(requete);
        st.setString(1, nvAdresse);
        st.setString(2, id);
        st.executeUpdate();
        System.out.println("Adresse modifiée");
    } catch (SQLException ex) {
        System.out.println(ex.getMessage());   
    }
}
    public void modifierMenu(String id, String nvMenu) {
    try {
        String requete = "UPDATE restaurant SET menu = ? WHERE id = ?";
        PreparedStatement st = MyConnection.getInstance().getCnx().prepareStatement(requete);
        st.setString(1, nvMenu);
        st.setString(2, id);
        st.executeUpdate();
        System.out.println("Menu modifié");
    } catch (SQLException ex) {
        System.out.println(ex.getMessage());   
    }
}
    public void modifierProg(String id, String nvProg) {
    try {
        String requete = "UPDATE restaurant SET prog = ? WHERE id = ?";
        PreparedStatement st = MyConnection.getInstance().getCnx().prepareStatement(requete);
        st.setString(1, nvProg);
        st.setString(2, id);
        st.executeUpdate();
        System.out.println("Programme modifié");
    } catch (SQLException ex) {
        System.out.println(ex.getMessage());   
    }
}
    public void modifierTelephone(String id, int nvTelephone) {
    try {
        String requete = "UPDATE restaurant SET telephone = ? WHERE id = ?";
        PreparedStatement st = MyConnection.getInstance().getCnx().prepareStatement(requete);
        st.setInt(1, nvTelephone);
        st.setString(2, id);
        st.executeUpdate();
        System.out.println("Numero de telephone modifié");
    } catch (SQLException ex) {
        System.out.println(ex.getMessage());   
    }
}
public void modifierNbreP(String id, int nvNbreP) {
    try {
        String requete = "UPDATE restaurant SET NbreP = ? WHERE id = ?";
        PreparedStatement st = MyConnection.getInstance().getCnx().prepareStatement(requete);
        st.setInt(1, nvNbreP);
        st.setString(2, id);
        st.executeUpdate();
        System.out.println("Nombre de places modifié");
    } catch (SQLException ex) {
        System.out.println(ex.getMessage());   
    }
}
    public void modifier(Restaurant r) {
    try {
        String req = "UPDATE restaurant SET nom=?, menu=?, adresse=?, programme=?, telephone=?, nbre_places=? WHERE nom=?";
        PreparedStatement st = MyConnection.getInstance().getCnx().prepareStatement(req);
        st.setString(1, r.getId());
        st.setString(2, r.getMenu());
        st.setString(3, r.getAdresse());
        st.setString(4, r.getProg());
        st.setInt(5, r.getTelephone());
        st.setInt(6, r.getNbreP());
        
        st.executeUpdate();
        System.out.println("Modification effectuée avec succès !");
    } catch (SQLException ex) {
        System.out.println(ex.getMessage());
    }
}
    @Override
    public List<Restaurant> entitiesList() {
        ArrayList<Restaurant> myList = new ArrayList();

        try {
            String requete = "SELECT * FROM restaurant";

            Statement st = MyConnection.getInstance().getCnx().createStatement();
            ResultSet rs = st.executeQuery(requete);

            while (rs.next()) {
                Restaurant r = new Restaurant();
                r.setId(rs.getString("id"));
                r.setAdresse(rs.getString("adresse"));
                r.setMenu(rs.getString("menu"));
                r.setProg(rs.getString("prog"));
                r.setTelephone(rs.getInt("telephone"));
                r.setNbreP(rs.getInt("nbreP"));
               
                myList.add(r);
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        return myList;
    }
    public List<Restaurant> Afficher() {
    List<Restaurant> restaurants = new ArrayList<>();
    try {
        String query = "SELECT * FROM restaurant";
        Statement statement = MyConnection.getInstance().getCnx().createStatement();
        ResultSet resultSet = statement.executeQuery(query);
        while (resultSet.next()) {
           
            String id = resultSet.getString("id");
            String menu = resultSet.getString("menu");
            String adresse = resultSet.getString("adresse");
            String prog = resultSet.getString("prog");
            int telephone = resultSet.getInt("telephone");
            int nbreP = resultSet.getInt("nbreP");
            Restaurant restaurant = new Restaurant( id, menu, adresse, prog, telephone, nbreP);
            restaurants.add(restaurant);
        }
    } catch (SQLException ex) {
        System.out.println(ex.getMessage());
    }
    return restaurants;
}

}

