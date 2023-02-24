/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package PIDEV.Gui;

import PIDEV.Entitiess.Restaurant;
import PIDEV.services.RestaurantCRUD;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.TextField;
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
import javafx.scene.control.Button;
import javafx.scene.control.TextField;
import javafx.stage.Stage;

import javafx.fxml.FXML;
import javafx.scene.control.Label;
import javafx.scene.control.TextField;


/**
 * FXML Controller class
 *
 * @author Admis
 */
public class AjoutRestaurantController implements Initializable {

    
    @FXML
    private TextField TfNom;
    @FXML
    private TextField TfMenu;
    @FXML
    private TextField TfAdresse;
    @FXML
    private TextField TfProg;
    @FXML
    private TextField TfNbreP;
    @FXML
    private TextField TfTelephone;
    @FXML
    private Button AddBtn;
   @FXML
    private Label Labelll;
   @FXML
    private Label LabelNom;
   @FXML
    private Label LabelMenu;
   @FXML
    private Label LabelAdresse;
   @FXML
    private Label LabelProg;
   @FXML
    private Label LabelNbre;
   
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    
    
    @FXML
   private void Ajouter(ActionEvent event) {
  
        String resNom = TfNom.getText();
        if(TfNom.getText().isEmpty()){
        LabelNom.setText("Tous les champs sont obligatoires");
}   
        String resMenu = TfMenu.getText();
        if(TfMenu.getText().isEmpty()){
        LabelMenu.setText("Tous les champs sont obligatoires");
}   
        String resAdresse = TfAdresse.getText();
        if(TfAdresse.getText().isEmpty()){
        LabelAdresse.setText("Tous les champs sont obligatoires");
}   
        String resProg = TfProg.getText();
        if(TfProg.getText().isEmpty()){
        LabelProg.setText("Tous les champs sont obligatoires");
}   
        
        
  
        
     String textValue = TfTelephone.getText();
if(TfTelephone.getText().isEmpty()){
Labelll.setText("Tous les champs sont obligatoires");
}   
else {
    try {
        int tel= Integer.parseInt(TfTelephone.getText());
    }
    catch(NumberFormatException e){
    Labelll.setText("Le telephone doit etre un numero de 8 chiffres");
    }
    }

     int resTel = Integer.parseInt(textValue);
        String textValue2 = TfNbreP.getText();
        int resNbreP = Integer.parseInt(textValue2);
        if(TfNbreP.getText().isEmpty()){
LabelNbre.setText("Tous les champs sont obligatoires");
}   
else {
    try {
        int tel= Integer.parseInt(TfNbreP.getText());
    }
    catch(NumberFormatException e){
    LabelNbre.setText("Le nombre de places doit etre un entier");
    }
    }
        

        
        RestaurantCRUD pcd = new RestaurantCRUD() ;
        Restaurant r = new Restaurant(resNom, resMenu, resAdresse, resProg, resTel,resNbreP);
        pcd.Ajouter(r);
        
        System.out.println("DONE!!");
        TfNom.clear();
    TfMenu.clear();
    TfAdresse.clear();
    TfProg.clear();
    TfTelephone.clear();
    TfNbreP.clear();
     
   }
   
    
  
@FXML
private Label errorLabel; //

        @FXML
private void Afficher(ActionEvent event) {
    RestaurantCRUD pcd = new RestaurantCRUD() ;
    List<Restaurant> restaurants = pcd.Afficher();
    for (Restaurant restaurant : restaurants) {
        System.out.println(restaurant);
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
    

    

