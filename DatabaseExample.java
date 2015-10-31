/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package databaseexample;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;

/**
 *
 * @author K501LB
 */
public class DatabaseExample {

    private Connection connection;
 
    public DatabaseExample() throws ClassNotFoundException{
        
        
        
        try {
            Class.forName("com.mysql.jdbc.Driver");
            connection = DriverManager.getConnection("jdbc:mysql://127.0.0.1:3306/mydb", "root", "quan94");
            System.out.println("Kết nối thành công");
            
            Statement state = connection.createStatement();
            String query = "select * from lover";
            ResultSet result = state.executeQuery(query);
            
            while (result.next()){
                System.out.print(result.getInt("idlover")+" ");
                System.out.print(result.getString("user1")+" ");
                System.out.println(result.getString("user2")+" ");
                
            }
        } catch (SQLException e) {
            e.printStackTrace();
        }
    }
 
    public static void main(String ar[]) throws ClassNotFoundException{
        new DatabaseExample();
    }
    
}
