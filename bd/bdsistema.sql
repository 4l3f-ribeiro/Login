create database bdsistema_Alef;

use bdsistema_Alef;

create table tbusuario_Alef(
    id_usuario int not null primary key auto_increment,
    nome_usuario varchar (45) not null,
    email_usuario varchar (25) not null,
    senha_usuario varchar (10) not null,
    tipo_usuario int not null



);
/*tipo de usuario:
    1-usuario administrador
    0-usuario comum
*/

Insert Into tbusuario_Alef (nome_usuario,email_usuario,senha_usuario,tipo_usuario)
VALUES('Alef' ,'alefribeiro@gmail.com' , 'ribeiroalef' , 1);

Insert Into tbusuario_Alef (nome_usuario,email_usuario,senha_usuario,tipo_usuario)
VALUES('Guilherme' ,'guilherme@gmail.com' , 'laura' , 0);

Insert Into tbusuario_Alef (nome_usuario,email_usuario,senha_usuario,tipo_usuario)
VALUES('Romarinho' ,'romarinho@gmail.com' , 'chinelo' , 0);

INSERT INTO tbusuario_Alef (nome_usuario, email_usuario, senha_usuario, tipo_usuario)
VALUES ('Bob', 'Bob@gmail.com', 'bola', 1);