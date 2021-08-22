# desafio-vsdata
Aplicação web que tem a funcionalidade de receber um link, encurtar para um padrão específico e
retornar para a página original a partir do link encurtado, contabilizando a quantidade de clicks,
e ao clicar no botão deletear, ele trás a data e a hora da alteração no banco de dados.

#Instruções

Ter um SGBD de sua preferência e configurar na sua máquina o mysql.
Na construção dessa aplicação foi utilizado o SGBD: MariaDB.

###Comandos de elaboração do banco de dados:

create database vsdata;

create table urls (
    id int auto_increment primary key not null,
    url_original varchar(255) not null,
    url_encurtada varchar(255) default null,
    qtd_clicks int default 0,
    datahora_deletado datetime default null,
    criado_em datetime default now(),
    atualizado_em datetime default null
);

Após a criação do banco de dados, verificar os comentários inseridos no código e alterar conforme está sendo orientado.

Após a alteração no código, executar a aplicação pelo localhost/caminhoLocal.
