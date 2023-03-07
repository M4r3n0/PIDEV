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
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.TextField;
import javafx.scene.control.TextFormatter;
import javafx.stage.Stage;
import projetjava3a18.entites.Produit;
import projetjava3a18.services.ProduitCrud;

/**
 * FXML Controller class
 *
 * @author 21693
 */
public class InscriptionController implements Initializable {
    @FXML
    private TextField tfid_produit;
     @FXML
    private TextField tfnom_produit;
     @FXML
    private TextField tfprix_produit;
     @FXML
    private TextField tfquantite;
@FXML
    private TextField tfdescrption;
@FXML
private Button btn;
@FXML
private Button btn1;
@FXML
private Button btn2;
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        checkInt(tfid_produit);
        checkInt(tfprix_produit);
        // TODO
    }    
    
    public void checkInt(TextField test) {
        test.setTextFormatter(new TextFormatter<Object>(change -> {
            if (!change.getText().chars().allMatch(Character::isDigit)) {
                change.setText("");
            }
            return change;
        }));
    }
  @FXML
private void savePersonne(ActionEvent event) {
    try {
        // Vérifier que tous les champs sont remplis
        if (tfid_produit.getText().isEmpty() || tfnom_produit.getText().isEmpty() ||
                tfprix_produit.getText().isEmpty() || tfquantite.getText().isEmpty() || tfdescrption.getText().isEmpty()) {
            System.out.println("Veuillez remplir tous les champs");
            return;
        }

        int idProduit = Integer.parseInt(tfid_produit.getText());
        String nomProduit = tfnom_produit.getText();
        float prixProduit;
        try {
            prixProduit = Float.parseFloat(tfprix_produit.getText());
        } catch (NumberFormatException e) {
            System.out.println("Le prix doit être un nombre décimal");
            return;
        }
        int quantite;
        try {
            quantite = Integer.parseInt(tfquantite.getText());
        } catch (NumberFormatException e) {
            System.out.println("La quantité doit être un nombre entier");
            return;
        }
        String descrption = tfdescrption.getText();

        ProduitCrud pcd = new ProduitCrud();
        Produit t = new Produit(idProduit, nomProduit, prixProduit, quantite, descrption);
        
        pcd.insert(t);
        System.out.println("done !");
        
        
        
        tfid_produit.clear();
        tfprix_produit.clear();
        tfnom_produit.clear();
        tfquantite.clear();
        tfdescrption.clear();
        
        
        
        
        // REDIRECTION
        FXMLLoader loader = new FXMLLoader(getClass().getResource("afficherProduit.fxml"));

        Parent root = loader.load();
        Stage stage = new Stage();
        stage.setScene(new Scene(root));
        stage.show();
    } catch (IOException e) {
        Logger.getLogger(AfficherProduitController.class.getName()).log(Level.SEVERE, null, e);
    }
}

  @FXML
private void modifier(ActionEvent event)  {
    try{
FXMLLoader loader = new FXMLLoader(getClass().getResource("modifier.fxml"));
   Parent root = loader.load();
        Stage stage = new Stage();
        stage.setScene(new Scene(root));
        stage.show();
} catch (IOException e) {
        Logger.getLogger(AfficherProduitController.class.getName()).log(Level.SEVERE, null, e);
    }
 
    }
}

