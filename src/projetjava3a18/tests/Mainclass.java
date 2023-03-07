/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package projetjava3A18.tests;

import java.sql.SQLException;
import projetjava3a18.entites.Panier;
import projetjava3a18.entites.Produit;
import projetjava3a18.services.PanierCrud;
import projetjava3a18.services.ProduitCrud;

/**
 *
 * @author 21693
 */
public class Mainclass {
    public static void main (String[] args) throws SQLException {
       // MyConnection mc= new MyConnection();
        Produit pl =new Produit(4,"javel", 100, 24, " ooooo");
        ProduitCrud pcd =new ProduitCrud();
        //pcd.insert(pl);
         // pcd.delete(4);
         // Produit p2 =new Produit(4,"souhaeil", 34, 424, "fgf");
            
         // pcd.ModifierProduit(p2, 4);
         //  System.out.println(pcd.entitiesList()); 
         
         Panier p4 =new Panier(5,3);
         PanierCrud pp =new PanierCrud();
      // pp.insert(p4);
     // pp.ModifierPanier(p4,4);
      // pp.delete(2);     
         pp.calculPrixtotal(2,p4);
                 
                 
                 
      
       // System.out.println(pp.entitiesList()); 
       
    }
    
}
