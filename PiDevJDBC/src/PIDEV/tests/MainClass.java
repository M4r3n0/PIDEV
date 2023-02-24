/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package PIDEV.tests;

import PIDEV.Entitiess.Restaurant;

import PIDEV.services.RestaurantCRUD;


/**
 *
 * @author Admis
 */
public class MainClass {

    public static void main(String[] args) {
        Restaurant r1 = new Restaurant("El Behi", "Nabeul", " Kafteji", "rien", 50080401,25);
        Restaurant r2 = new Restaurant("Pepitos", "Nabeul", " Makloub", "rien", 55879465,5);
        Restaurant r3 = new Restaurant("Hafood", "Ariana", " Pizza", "rien", 24500600,30);
        RestaurantCRUD pcd = new RestaurantCRUD() ;
        pcd.Ajouter(r1);
        pcd.Ajouter(r2);
        pcd.Ajouter(r3);
        System.out.println(pcd.entitiesList());
        pcd.Supprimer("El Behi");
        pcd.modifierTelephone("Pepitos",50080402);
        pcd.modifierNbreP("Hafood",100);
        System.out.println(pcd.entitiesList());
    }

}
