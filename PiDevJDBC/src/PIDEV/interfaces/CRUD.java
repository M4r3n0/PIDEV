/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package PIDEV.interfaces;

import java.util.List;

/**
 *
 * @author Admis
 * @param <T>
 */
public interface CRUD<T> {

    public void addEntity(T t);

    public List<T> entitiesList();

}