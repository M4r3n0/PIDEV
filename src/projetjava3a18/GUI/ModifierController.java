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
import javafx.scene.control.ButtonType;
import javafx.scene.control.Label;
import javafx.scene.control.TextField;
import javafx.stage.Stage;
import projetjava3a18.entites.Produit;
import projetjava3a18.services.ProduitCrud;

/**
 * FXML Controller class
 *
 * @author 21693
 */
public class ModifierController implements Initializable {

    @FXML
    private Label idproduit;
    @FXML
    private Label nomproduit;
    @FXML
    private Label prixproduit;
    @FXML
    private Label quantite;
    @FXML
    private Label descrption;
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
    private Button mod;
      @FXML
    private Button annuler;
      
    
    
    
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    
    @FXML
private void updateProduit(ActionEvent event) throws IOException {
    {  Alert alert = new Alert(Alert.AlertType.CONFIRMATION);
        alert.setTitle("Confirmation de modifier");
        alert.setHeaderText("Êtes-vous sûr de vouloir modifier cet élément ?");
        alert.setContentText("Cette action est irréversible.");
        ButtonType ouiButton = new ButtonType("Oui");
        ButtonType nonButton = new ButtonType("Non");
           alert.getButtonTypes().setAll(ouiButton, nonButton);

        // afficher l'alerte et attendre la réponse de l'utilisateur
        alert.showAndWait().ifPresent(reponse -> {
            if (reponse == ouiButton){
  

           // Vérifier que tous les champs sont remplis
    if(tfid_produit.getText().isEmpty() || tfnom_produit.getText().isEmpty() ||
       tfprix_produit.getText().isEmpty() || tfquantite.getText().isEmpty() || tfdescrption.getText().isEmpty()){
        System.out.println("Veuillez remplir tous les champs");
        return;
    }

    int idProduit = Integer.valueOf(tfid_produit.getText());
    String NomProduit = tfnom_produit.getText();
    float prixProduit;
    try{
        prixProduit = Float.valueOf(tfprix_produit.getText());
    }catch(NumberFormatException e){
        System.out.println("Le prix doit être un nombre décimal");
        return;
    }
    int Qunatite;
    try{
        Qunatite = Integer.valueOf(tfquantite.getText());
    }catch(NumberFormatException e){
        System.out.println("La quantité doit être un nombre entier");
        return;
    }
    String Descrption  = tfdescrption.getText();

    ProduitCrud pcd = new ProduitCrud();
    Produit t = new Produit(idProduit, NomProduit, prixProduit, Qunatite, Descrption);

    // Appeler la méthode update de ProduitCrud
    pcd.ModifierProduit(t,idProduit);
 
  
    // si tous les champs sont valides, créer l'objet reservation et l'ajouter à la base de données
    // REDIRECTION
    FXMLLoader loader = new FXMLLoader(getClass().getResource("afficherProduit.fxml"));

    Parent root = null;
                try {
                    root = loader.load();
                } catch (IOException ex) {
                    Logger.getLogger(ModifierController.class.getName()).log(Level.SEVERE, null, ex);
                }
    Stage stage = new Stage();
    stage.setScene(new Scene(root));
    stage.show();
  

}
else if (reponse == nonButton) {
           }
        });
       
            }
}
}


