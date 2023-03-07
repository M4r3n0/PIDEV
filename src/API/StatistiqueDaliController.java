/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package API;

import java.awt.Desktop;
import java.io.IOException;
import java.net.URL;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.chart.PieChart;
import javafx.scene.control.Hyperlink;
import projetjava3a18.utils.MyConnection;

/**
 * FXML Controller class
 *
 * @author 21693
 */
public class StatistiqueDaliController implements Initializable {

    @FXML
    private PieChart produit;
    @FXML
    private Hyperlink hyperlink;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        try {
            afficher_piechart();
            // TODO
        } catch (SQLException ex) {
            Logger.getLogger(StatistiqueDaliController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
  MyConnection cnx= null ;
  Statement st1 =null;

    private void afficher_piechart() throws SQLException {
       
        st1 =MyConnection.getInstance().getcnx().createStatement();
        ResultSet rs= st1.executeQuery("SELECT nom_produit,quantite FROM produit");
        ObservableList<PieChart.Data> data = FXCollections.observableArrayList();
        
        while (rs.next()) {
            String nom = rs.getString("nom_produit");
            int quant= rs.getInt("quantite");
              data.add(new PieChart.Data(nom, quant));
            
        }
        produit.setData(data);
        
    }

    @FXML
    private void Hyperlink(ActionEvent event) throws IOException {
        Desktop desktop =Desktop.getDesktop();
        desktop.browse(java.net.URI.create("https://www.youtube.com/watch?v=E8B6lnuadlQ/"));
    }
      
      
    
}
