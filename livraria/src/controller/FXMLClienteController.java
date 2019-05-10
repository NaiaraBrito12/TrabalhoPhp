/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package controller;
import DAO.AlunoDAO;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.TextField;
import model.Aluno;

public class FXMLClienteController implements Initializable {
   
 @FXML
    private TextField textCpf;

    @FXML
    private TextField textNome;

    @FXML
    private TextField txtLivro;
    @FXML
    void salvar() {
          AlunoDAO dao = new AlunoDAO();
          Aluno a = new Aluno();
          a.setNome(textNome.getText());
          a.setLivro(txtLivro.getText());
          a.setCpf(textCpf.getText());
          dao.salvar(a);
    }
   
    @Override
    public void initialize(URL url, ResourceBundle rb) {
      
    }    
    
}
