/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package projetjava3a18.GUI;

import java.net.URL;
import java.util.ResourceBundle;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.TextField;

/**
 * FXML Controller class
 *
 * @author 21693
 */
public class DetailsController implements Initializable {
@FXML
private TextField resultatid_produit;
@FXML
private TextField resultatnom_produit;
@FXML
private TextField resultatPrix_produit;
@FXML
private TextField resultatquantite;
@FXML
private TextField resultatdescrption;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    

    public TextField getResultatid_produit() {
        return resultatid_produit;
    }

    public void setResultatid_produit(TextField resultatid_produit) {
        this.resultatid_produit = resultatid_produit;
    }

    public TextField getResultatnom_produit() {
        return resultatnom_produit;
    }

    public void setResultatnom_produit(TextField resultatnom_produit) {
        this.resultatnom_produit = resultatnom_produit;
    }

    public TextField getResultatPrix_produit() {
        return resultatPrix_produit;
    }

    public void setResultatPrix_produit(TextField resultatPrix_produit) {
        this.resultatPrix_produit = resultatPrix_produit;
    }

    public TextField getResultatquantite() {
        return resultatquantite;
    }

    public void setResultatquantite(TextField resultatquantite) {
        this.resultatquantite = resultatquantite;
    }

    public TextField getResultatdescrption() {
        return resultatdescrption;
    }

    public void setResultatdescrption(TextField resultatdescrption) {
        this.resultatdescrption = resultatdescrption;
    }

   
}
