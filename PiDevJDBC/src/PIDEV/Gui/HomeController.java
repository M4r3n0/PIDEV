package PIDEV.Gui;

import java.io.IOException;
import java.net.URL;
import java.util.ResourceBundle;

import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.stage.Stage;
import javafx.scene.image.Image;
import javafx.stage.Stage;

public class HomeController implements Initializable {
    

    @FXML
    private Button addButton;

    @FXML
    private Button displayButton;

    @Override
    public void initialize(URL url, ResourceBundle rb) {
        
    }

    @FXML
    private void ouvrirPageAjout() {
        try {
            Parent root = FXMLLoader.load(getClass().getResource("AjoutRestaurant.fxml"));
            Stage stage = new Stage();
            stage.setScene(new Scene(root));
            stage.show();
        } catch (IOException e) {
            e.printStackTrace();
        }
    }

    @FXML
   private void ouvrirPageAffichage() {
        try {
            Parent root = FXMLLoader.load(getClass().getResource("Afficher.fxml"));
            Stage stage = new Stage();
            stage.setScene(new Scene(root));
            stage.show();
        } catch (IOException e) {
            e.printStackTrace();
        }
    }
}