/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package projetjava3a18.utils;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author 21693
 */
public class MyConnection {
    
    private String url="jdbc:mysql://localhost:3306/bd";
    private String login="root";
    private String pwd="";
    private Connection cnx;
    private static MyConnection instance ;

   private MyConnection() {
        try {
          cnx =  DriverManager.getConnection(url,login,pwd);
            System.out.println("connection etablie!");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
         
    }
    public Connection getcnx(){
        return cnx;
    }
    public static MyConnection getInstance(){
        if(instance==null ){
            instance = new MyConnection();
            
        }
        return instance;
    }
    
}
