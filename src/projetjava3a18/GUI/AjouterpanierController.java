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
import javafx.scene.control.TextField;
import javafx.stage.Stage;
import projetjava3a18.entites.Panier;
import projetjava3a18.services.PanierCrud;

public class AjouterpanierController implements Initializable {
    
    @FXML
    private Button vd;
    
    @FXML
    private TextField resultatid_panier;
    
    @FXML
    private TextField resultatnb_produit;
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    

    @FXML
    public void ajouterAuPanier(ActionEvent event) throws IOException  {
        // Récupérer les données entrées par l'utilisateur
       
        
       
    
       
 int id_panier = Integer.parseInt(resultatid_panier.getText());
         int nb_produit = Integer.parseInt(resultatnb_produit.getText());
       

        PanierCrud pcd = new PanierCrud();
        Panier t = new Panier(id_panier, nb_produit);
        
        pcd.insert(t);
        System.out.println("done !");
        
        
        
        // REDIRECTION
        FXMLLoader loader = new FXMLLoader(getClass().getResource("afficherpanier.fxml"));

        Parent root = loader.load();
        Stage stage = new Stage();
        stage.setScene(new Scene(root));
        stage.show();
   
    }
    


  
}
