
package DAO;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.SQLException;
import javax.swing.JOptionPane;
import model.Aluno;
public class AlunoDAO {
    Connection con = null;
   
    public AlunoDAO(){
        con = Conexao.abrirConexao();
    }    
    public void salvar(Aluno aluno){
        try {
            
            PreparedStatement ps = con.prepareStatement("INSERT INTO cliente(nome, livro, cpf) VALUES (?,?,?)");
            ps.setString(1, aluno.getNome());
            ps.setString(2, aluno.getLivro());
            ps.setString(3, aluno.getCpf());
   
              ps.executeUpdate();
           JOptionPane.showMessageDialog(null,"Salvo com Sucesso!!");
        } catch (SQLException ex) {
            JOptionPane.showMessageDialog(null,"Erro ao salva!!"+ex);
        }
    }
    
}
