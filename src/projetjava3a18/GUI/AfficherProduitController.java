package projetjava3a18.GUI;

import java.io.IOException;
import java.net.URL;
import java.sql.SQLException;
import java.util.List;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.stage.Stage;
import projetjava3a18.entites.Produit;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.scene.Node;
import javafx.scene.control.Alert;
import javafx.scene.control.ButtonType;

import projetjava3a18.services.ProduitCrud;

public class AfficherProduitController implements Initializable {

    @FXML
    private TableView<Produit> tableView;

    @FXML
    private TableColumn<Produit, Integer> idrColumn;

    @FXML
    private TableColumn<Produit, String> idcColumn;

    @FXML
    private TableColumn<Produit, Float> staColumn;

    @FXML
    private TableColumn<Produit, Integer> drColumn;

    @FXML
    private TableColumn<Produit, String> typColumn;
     @FXML
   private TextField idc1;
  
    @FXML
   private Button supp;
    @FXML
    private Button calcul;
     @FXML
   private Button a1;
      @FXML
   private Button m1;
    


    @Override
    public void initialize(URL url, ResourceBundle rb) {
        idrColumn.setCellValueFactory(new PropertyValueFactory<>("id_produit"));
        idcColumn.setCellValueFactory(new PropertyValueFactory<>("nom_produit"));
        staColumn.setCellValueFactory(new PropertyValueFactory<>("prix_produit"));
        drColumn.setCellValueFactory(new PropertyValueFactory<>("quantite"));
        typColumn.setCellValueFactory(new PropertyValueFactory<>("descrption"));        
        ProduitCrud pcd = new ProduitCrud();
        List<Produit>produit=pcd.entitiesList();
        tableView.getItems().addAll(produit);
    }
    @FXML
private void calculateTotalPrice(ActionEvent event) {
    Produit selectedProduit = tableView.getSelectionModel().getSelectedItem();
    if (selectedProduit != null) {
        float totalPrice = selectedProduit.getPrix_produit() * selectedProduit.getQuantite();
        Alert alert = new Alert(Alert.AlertType.INFORMATION);
        alert.setTitle("Total Price");
        alert.setHeaderText(null);
        alert.setContentText("The total price of " + selectedProduit.getNom_produit() + " is " + totalPrice + " DZD.");
        alert.showAndWait();
    } else {
        Alert alert = new Alert(Alert.AlertType.WARNING);
        alert.setTitle("No Selection");
        alert.setHeaderText(null);
        alert.setContentText("Please select a product.");
        alert.showAndWait();
    }
}
       @FXML
    private void supprimer(ActionEvent event) throws SQLException  {
        Alert alert = new Alert(Alert.AlertType.CONFIRMATION);
        alert.setTitle("Confirmation de suppression");
        alert.setHeaderText("Êtes-vous sûr de vouloir supprimer cet élément ?");
        alert.setContentText("Cette action est irréversible.");

        // ajouter des boutons personnalisés à l'alerte
        ButtonType ouiButton = new ButtonType("Oui");
        ButtonType nonButton = new ButtonType("Non");

        alert.getButtonTypes().setAll(ouiButton, nonButton);

        // afficher l'alerte et attendre la réponse de l'utilisateur
        alert.showAndWait().ifPresent(reponse ->{
            if (reponse == ouiButton) {
       int residr = Integer.parseInt(idc1.getText());
    ProduitCrud pcd = new ProduitCrud();
                try {
                    pcd.delete(residr);
                } catch (SQLException ex) {
                    Logger.getLogger(AfficherProduitController.class.getName()).log(Level.SEVERE, null, ex);
                }
    System.out.println("Produit with ID " + residr + " has been deleted.");

    // Reload the current page after deleting the reservation
    try {
        FXMLLoader loader = new FXMLLoader(getClass().getResource("afficherProduit.fxml"));
        Parent root = (Parent) loader.load();
        Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
        stage.setScene(new Scene(root));
        stage.show();
    } catch (IOException e) {
        e.printStackTrace();
    }
  
}
            else if (reponse == nonButton) {
                // l'utilisateur a cliqué sur "Non", ne rien faire
            }
        });}
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
@FXML
private void ajouter(ActionEvent event)  {
    try{
FXMLLoader loader = new FXMLLoader(getClass().getResource("Inscription.fxml"));
   Parent root = loader.load();
        Stage stage = new Stage();
        stage.setScene(new Scene(root));
        stage.show();
} catch (IOException e) {
        Logger.getLogger(AfficherProduitController.class.getName()).log(Level.SEVERE, null, e);
    }
 
    }
    
}
