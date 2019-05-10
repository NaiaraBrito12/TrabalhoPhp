
package model;

public class Aluno {
    private String Nome;
    private String livro;
    private String cpf;

    public String getNome() {
        return Nome;
    }

    public void setNome(String Nome) {
        this.Nome = Nome;
    }


    public String getLivro() {
        return livro;
    }

    public void setLivro(String Livro ) {
        this.livro = livro;
    }
       public String getCpf(){
           return cpf;
       }
       public void setCpf(String cpf){
           this.cpf = cpf;
       }
}
