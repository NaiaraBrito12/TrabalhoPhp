
package DAO;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;



public class Conexao {
      public static Connection abrirConexao(){
        Connection con = null;        
        try {
            //Carregando driver
            Class.forName("com.mysql.jdbc.Driver");
            String url = "jdbc:mysql://localhost:3306/livraria";
            System.out.println("Conectado com sucesso");
        
            con = DriverManager.getConnection(url, "root","");
        }catch (SQLException e) {
            System.out.println("deu erro");
            return null;
        }
        catch (ClassNotFoundException e) {
            System.out.println("Driver não instalado");
            
        }
        return con;       
    }
    
    
    
    public static void fecharConexao(Connection con){
         try {
            con.close();
            System.out.println("Conexao fechada");
        } catch (Exception e) {
        }
    }    
    
}
