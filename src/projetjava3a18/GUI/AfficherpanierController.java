
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

import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.scene.Node;
import projetjava3a18.entites.Panier;
import projetjava3a18.services.PanierCrud;
public class AfficherpanierController implements Initializable {

    @FXML
    private TableView<Panier> tableView;

    @FXML
    private TableColumn<Panier, Integer> pa1;

    @FXML
    private TableColumn<Panier, Integer> prod1;

    @FXML
    private Button mod;

    @FXML
    private Button supp;

    @FXML
    private TextField idp;

    @Override
    public void initialize(URL url, ResourceBundle rb) {
        pa1.setCellValueFactory(new PropertyValueFactory<>("id_panier"));
        prod1.setCellValueFactory(new PropertyValueFactory<>("nb_produit"));

        PanierCrud pcd = new PanierCrud();
        List<Panier> p = pcd.entitiesList();
        tableView.getItems().addAll(p);
    }
@FXML
private void supprimer(ActionEvent event) throws SQLException {
    try {
        int residr = Integer.parseInt(idp.getText());
        PanierCrud pcd = new PanierCrud();
        pcd.delete(residr);
        System.out.println("Panier with ID " + residr + " has been deleted.");

        // Reload the table view
        tableView.getItems().clear();
        tableView.getItems().addAll(pcd.entitiesList());

        // Reload the current page after deleting the reservation
        FXMLLoader loader = new FXMLLoader(getClass().getResource("afficherpaniert.fxml"));
        Parent root = (Parent) loader.load();
        Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
        stage.setScene(new Scene(root));
        stage.show();
    } catch (IOException e) {
        e.printStackTrace();
    }
}



    @FXML
    private void modifier(ActionEvent event) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("modifierpanier.fxml"));
            Parent root = loader.load();
            Stage stage = new Stage();
            stage.setScene(new Scene(root));
            stage.show();
        } catch (IOException e) {
            Logger.getLogger(AfficherProduitController.class.getName()).log(Level.SEVERE, null, e);
        }

    }
}
