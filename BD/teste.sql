-- exemplo de SQL
CREATE TABLE tb_usuarios(
idusuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
deslogin VARCHAR(64) NOT NULL,
dessenha VARCHAR(256) NOT NULL,
dtcadastro TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
);

INSERT INTO tb_usuarios(deslogin,dessenha) VALUES ('root','asdfasd');

SELECT * FROM tb_usuarios;

UPDATE tb_usuarios SET dessenha = '12345' WHERE idusuario = 1;

DELETE FROM tb_usuarios WHERE idusuario = 1;
#apagar dados da tabela incluindo o registro de auto incremento
TRUNCATE TABLE tb_usuarios;
