/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package projetjava3a18.interfaces;

import java.util.List;


/**
 *
 * @author 21693
 */
public interface panierCrud<P> {
    void insert(P t);
    void delete(P t);
    void update(P t);
    List<P> readAll();
    P readById(int id); 
    
}
