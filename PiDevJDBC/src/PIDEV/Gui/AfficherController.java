package PIDEV.Gui;

import PIDEV.Entitiess.Restaurant;
import PIDEV.services.RestaurantCRUD;
import java.io.IOException;
import java.net.URL;
import java.util.List;
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
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.stage.Stage;
import PIDEV.services.RestaurantCRUD;
import javafx.scene.control.Label;
public class AfficherController implements Initializable {
    
    @FXML
    private TableView<Restaurant> tableView;
    
    @FXML
    private TableColumn<Restaurant, String> idCol;
    
    @FXML
    private TableColumn<Restaurant, String> menuCol;
    
    @FXML
    private TableColumn<Restaurant, String> adresseCol;
    
    @FXML
    private TableColumn<Restaurant, String> progCol;
    
    @FXML
    private TableColumn<Restaurant, Integer> telCol;
    
    @FXML
    private TableColumn<Restaurant, Integer> nbrePCol;
    
    @FXML
    private Button deleteBtn;
    
  
    
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        idCol.setCellValueFactory(new PropertyValueFactory<>("id"));
        menuCol.setCellValueFactory(new PropertyValueFactory<>("menu"));
        adresseCol.setCellValueFactory(new PropertyValueFactory<>("adresse"));
        progCol.setCellValueFactory(new PropertyValueFactory<>("prog"));
        telCol.setCellValueFactory(new PropertyValueFactory<>("telephone"));
        nbrePCol.setCellValueFactory(new PropertyValueFactory<>("nbreP"));
        
        RestaurantCRUD pcd = new RestaurantCRUD();
        List<Restaurant> restaurants = pcd.Afficher();
        tableView.getItems().addAll(restaurants);
    }
    
    @FXML
    private void rafraichirTable(ActionEvent event) {
        tableView.getItems().clear();
        RestaurantCRUD pcd = new RestaurantCRUD();
        List<Restaurant> restaurants = pcd.Afficher();
        tableView.getItems().addAll(restaurants);
    }
    
    @FXML
    private void supprimer() {
        Restaurant restaurant = tableView.getSelectionModel().getSelectedItem();
        if (restaurant != null) {
            RestaurantCRUD pcd = new RestaurantCRUD();
            pcd.Supprimer(restaurant.getId());
            tableView.getItems().remove(restaurant);
        }
        
    }

}