/* CREATE NEW DATABSE */
CREATE DATABASE todo_list
/* ACESS DATABASE*/
use todo_list
		   
		   /* CREATE TABLET PRODUTO */
		 CREATE TABLE produto(
		   code_produto INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
		   descricao VARCHAR(25)NOT NULL,
		   valor INT (9) NOT NULL DEFAULT '0',
		   id_situ INT(6)NOT NULL
		   )ENGINE=InnoDB DEFAULT CHARSET=utf8;
		 
         
         ALTER TABLE produto ADD id_situ INT(6) NOT NULL;
         
         ALTER TABLE produto
		 ADD CONSTRAINT fk_ProdSitu
         FOREIGN KEY (id_situ) REFERENCES situacao(id_situacao);
	
     
         
		  /* CREATE TABLET USUARIO */
		 CREATE TABLE usuario( 
			code_usuario INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
			nome VARCHAR(30) NOT NULL,
			email VARCHAR(30),
			telefone VARCHAR(12),
			senha VARCHAR(40)
		   )ENGINE=InnoDB DEFAULT CHARSET=utf8;


		SELECT *FROM produto
		SELECT * FROM usuario
        
       /* ADD PRODUCT TABLET */ 
		INSERT INTO produto (descricao,valor,situacao) VALUES ('Arroz',12,'COMPRADO');
		INSERT INTO produto (descricao,valor,situacao) VALUES ('Batata',5,'COMPRAR');
		INSERT INTO produto (descricao,valor,situacao) VALUES ('Feijao',8,'COMPRAR');
		INSERT INTO produto (descricao,valor,situacao) VALUES ('Carne',6,'COMPRADO');
		INSERT INTO produto (descricao,valor,situacao) VALUES ('Cafe',5,'COMPRAR');
        
        CREATE TABLE situacao(
          id_situacao INT(6) NOT NULL PRIMARY KEY AUTO_INCREMENT,
          descricao VARCHAR(20))ENGINE=InnoDB DEFAULT CHARSET=utf8;

	    

		INSERT INTO usuario (nome,email,telefone,senha) VALUES ('Lucas','lucas@gmail.com','3030-4545','Maciel123');

   
   
      select produto.descricao,situacao.descricao from produto
      inner join situacao on produto.code_produto=situacao.id_situacao;
   