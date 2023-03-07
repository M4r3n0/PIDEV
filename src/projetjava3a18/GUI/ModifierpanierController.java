/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package projetjava3a18.GUI;

import java.io.IOException;
import java.net.URL;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.TextField;
import javafx.stage.Stage;
import projetjava3a18.entites.Panier;
import projetjava3a18.entites.Produit;
import projetjava3a18.services.PanierCrud;
import projetjava3a18.services.ProduitCrud;

/**
 * FXML Controller class
 *
 * @author 21693
 */
public class ModifierpanierController implements Initializable {

    @FXML
    private Label pan2;
    @FXML
    private Label nbpr1;
   
    @FXML
    private TextField respan;
    @FXML
    private TextField resprod;
  
    
     @FXML
    private Button modif;

      
    
    
    
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    
    @FXML
private void updateProduit(ActionEvent event) throws IOException {
  

  
    int idProduit = Integer.valueOf(respan.getText());
     int nbpanier = Integer.valueOf(resprod.getText());
   
  

    PanierCrud pcd = new PanierCrud();
    Panier t = new Panier(idProduit, nbpanier);

    // Appeler la méthode update de ProduitCrud
    pcd.ModifierPanier(t,idProduit);
 
  
    // si tous les champs sont valides, créer l'objet reservation et l'ajouter à la base de données
    // REDIRECTION
    FXMLLoader loader = new FXMLLoader(getClass().getResource("afficherpanier.fxml"));

    Parent root = loader.load();
    Stage stage = new Stage();
    stage.setScene(new Scene(root));
    stage.show();
  

}

}



