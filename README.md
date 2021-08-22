# desafio-vsdatta_Imagem
Aplicação web que tem a funcionalidade de receber um link, encurtar para um padrão específico e
retornar para a página original a partir do link encurtado, contabilizando a quantidade de clicks,
e ao clicar no botão deletear, ele trás a data e a hora da alteração no banco de dados.

*Instruções para instalação

Ter um SGBD de sua preferência e configurar na sua máquina o mysql.
Na construção dessa aplicação foi utilizado o SGBD: MariaDB.

*Comandos de elaboração do banco de dados:

```
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
```

Após a criação do banco de dados, verificar os comentários inseridos no código e alterar conforme
está sendo orientado.

Após a alteração no código, executar a aplicação pelo localhost/caminhoLocal.

Após executar a apllicação, será mostrado a página inicial com um campo em branco solicitando a inserção
do link com 2 botões abaixo:
1ª encurtar e o 2ª dashboard.
Botão encurtar: deverá ser acionado após a inserção do link no campo acima com o exemplo da inserção,
após acionar o botão, será redirecionado para a dashboard;
Botão dashboad: redireciona o usuário direto para a dashboard sem a necessidade de inserção da url.

*Dashboard
Página onde o usuário pode consultar a lista com os links encurdados, onde é possível navegar na página
pelo link encurtado na coluna URL Encurtada que será redirecionado para o endereço do link original, o botão deletar na coluna Excluir dados, onde é mostrado na tabela a data que o link foi deletado, e o botão visualizar, o usuário é redirecionado para uma página onde é exibido a quantidade de cliks contabilizada por click e por fim o botão voltar para o inicio, onde o usuário será redirecionado para a página inicial.
