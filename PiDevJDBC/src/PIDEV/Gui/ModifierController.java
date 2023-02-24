package PIDEV.Gui;

import PIDEV.Entitiess.Restaurant;
import PIDEV.services.RestaurantCRUD;
import PIDEV.utils.MyConnection;
import java.net.URL;
import java.sql.PreparedStatement;
import java.sql.SQLException;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.TextField;

/**
 * FXML Controller class
 *
 * @author Admis
 */
public class ModifierController implements Initializable {

    private Restaurant selectedRestaurant;

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
    private Button updateBtn;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }
public void modifier(Restaurant r) {
    try {
        String req = "UPDATE restaurant SET nom=?, menu=?, adresse=?, programme=?, telephone=?, nbre_places=? WHERE nom=?";
        PreparedStatement st = MyConnection.getInstance().getCnx().prepareStatement(req);
        st.setString(1, r.getId());
        st.setString(2, r.getMenu());
        st.setString(3, r.getAdresse());
        st.setString(4, r.getProg());
        st.setInt(5, r.getTelephone());
        st.setInt(6, r.getNbreP());
        
        st.executeUpdate();
        System.out.println("Modification effectuée avec succès !");
    } catch (SQLException ex) {
        System.out.println(ex.getMessage());
    }
}
    public void setSelectedRestaurant(Restaurant restaurant) {
        this.selectedRestaurant = restaurant;
        TfNom.setText(selectedRestaurant.getId());
        TfMenu.setText(selectedRestaurant.getMenu());
        TfAdresse.setText(selectedRestaurant.getAdresse());
        TfProg.setText(selectedRestaurant.getProg());
        TfNbreP.setText(String.valueOf(selectedRestaurant.getNbreP()));
        TfTelephone.setText(String.valueOf(selectedRestaurant.getTelephone()));
    }

    @FXML
    private void modifier(ActionEvent event) {
        String resNom = TfNom.getText();
        String resMenu = TfMenu.getText();
        String resAdresse = TfAdresse.getText();
        String resProg = TfProg.getText();
        String textValue = TfTelephone.getText();
        int resTel = Integer.parseInt(textValue);
        String textValue2 = TfNbreP.getText();
        int resNbreP = Integer.parseInt(textValue2);
        selectedRestaurant.setId(resNom);
        selectedRestaurant.setMenu(resMenu);
        selectedRestaurant.setAdresse(resAdresse);
        selectedRestaurant.setProg(resProg);
        selectedRestaurant.setTelephone(resTel);
        selectedRestaurant.setNbreP(resNbreP);
        RestaurantCRUD pcd = new RestaurantCRUD();
        pcd.modifier(selectedRestaurant);
        System.out.println("DONE!!");
    }
}