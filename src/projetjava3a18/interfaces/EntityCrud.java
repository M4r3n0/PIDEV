/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package projetjava3a18.interfaces;

/**
 *
 * @author 21693
 */
import  java.util.List;

/**
 *
 * @author 21693
 */
public interface EntityCrud<T> {
    void insert(T t);
    void delete(T t);
    void update(T t);
    List<T> readAll();
    T readById(int id); 
    
    
}
