/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package PIDEV.utils;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author Admis
 */
public class MyConnection {

    private String url = "jdbc:mysql://127.0.0.1:3306/bd";
    private String login = "root";
    private String pwd = "";
    private Connection cnx;
    private static MyConnection instance;

    private MyConnection() {

        try {
            cnx = DriverManager.getConnection(url, login, pwd);
            System.out.println("=============CONNEXION A LA BASE DE DONNEES REUSSIE=============");
        } catch (SQLException ex) {
            Logger.getLogger(MyConnection.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    public Connection getCnx() {
        return cnx;
    }

    public static MyConnection getInstance() {
        if (instance == null) {
            instance = new MyConnection();

        }
        return instance;
    }
}
