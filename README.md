<p align="center">
  <img max-width="auto" height="auto"  src="https://github.com/Sara01romao/contato-corretor-php/assets/46323667/b166a831-4b98-4e45-99c1-fc9d61dc458a">
</p> 

<p align="center">
  <img max-width="auto" height="auto"  src="https://github.com/Sara01romao/contato-corretor-php/assets/46323667/52300ed5-9111-46a4-8830-429316d0b9b3">
</p> 






## 💻  Sobre o Projeto
Neste projeto, desenvolvi o design e adicionei pontos importantes para a usabilidade da página. Além disso, criei o banco de dados com duas tabelas: uma 
para armazenar os dados do corretor exibidos na página e outra para registrar as mensagens recebidas através do formulário de contato.

Decidi incluir uma chave na tabela de mensagens com o ID do corretor para facilitar a filtragem de todas as mensagens recebidas de um corretor, caso 
seja necessário no futuro.

<a href="https://github.com/Sara01romao/desafio-contato-corretor" target="_blank"><strong>Acessar Desafio »</strong></a>

<br>



## :rocket: Tecnologias Usadas
UI/UX
```
Figma
```

Front-end 
```
HTML
CSS
SweetAlert
```


## Back-end
```
  PHP
  MySQL
```
## 🎲 Banco de dados 

Tabela Corretor
```
CREATE TABLE `corretor` (
    id_corretor int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome_corretor varchar(255) NOT NULL,
    img_corretor varchar(255) NOT NULL,
    whatsapp_corretor varchar(11) NOT NULL,
    telefone_corretor varchar(11) NOT NULL,
    email_corretor varchar(100) NOT NULL
) ENGINE=InnoDB;

```

Inserir Registros Iniciais
```
INSERT INTO `corretor` (`id_corretor`, `nome_corretor`, `img_corretor`, `whatsapp_corretor`, `telefone_corretor, `email_corretor`) VALUES
(1, 'Rafael Gomes', 'ana-contato@gmail.com', 'img-url', '11888888888', '11888888888', 'contato@contato.com')

```


Tabela Mensagem
```
CREATE TABLE `mensagem` (
    id_mensagem int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome_contato varchar(255) NOT NULL,
    email_contato varchar(100) NOT NULL,
    telefone_contato varchar(11) NOT NULL,
    mensagem_contato text NOT NULL,
    data_hora_contato datetime NOT NULL,
    id_corretor_mensagem int NOT NULL,
    FOREIGN KEY (id_corretor_mensagem) REFERENCES corretor(id_corretor)
) ENGINE=InnoDB;

```

