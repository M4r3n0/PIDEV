/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package PIDEV.Entitiess;

/**
 *
 * @author Admis
 */
public class Restaurant {

    private String id;
    private String adresse;
    private String menu;
    private String prog;
    private int  nbreP;
    private int telephone;

    
    

    public String getId() {
        return id;
    }

    public String getAdresse() {
        return adresse;
    }

    public String getMenu() {
        return menu;
    }

    public void setId(String id) {
        this.id = id;
    }

    @Override
    public String toString() {
        return "Restaurant{" + "id=" + id + ", adresse=" + adresse + ", menu=" + menu + ",Programme="+prog +",Telephone= "+ telephone +", Nombre de places="+ nbreP+ '}';
    }

    public void setAdresse(String adresse) {
        this.adresse = adresse;
    }

    public void setMenu(String menu) {
        this.menu = menu;
    }

    public Restaurant() {
    }

    public Restaurant(String id, String adresse, String menu, String prog, int telephone, int nbreP) {
        this.id = id;
        this.adresse = adresse;
        this.menu = menu;
        this.prog = prog;
        this.nbreP = nbreP;
        this.telephone = telephone;
    }

   

    public Restaurant(String id) {
        this.id = id;
       
    }

    public void setProg(String prog) {
        this.prog = prog;
    }

    public void setNbreP(int nbreP) {
        this.nbreP = nbreP;
    }

    public void setTelephone(int telephone) {
        this.telephone = telephone;
    }

    public String getProg() {
        return prog;
    }

    public int getNbreP() {
        return nbreP;
    }

    public int getTelephone() {
        return telephone;
    }

}
