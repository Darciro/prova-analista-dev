# Teste de Conhecimentos – Analista  Desenvolvedor

### Versão
0.0.1

### Requisitos
  - PHP 5.3+
  - MySQL 5.6+

### Clone o projeto
```sh
$ git clone git@github.com:Darciro/prova-analista-dev.git
```

### Instalação
Execute o script SQL [diretório db/rest_api_db.sql] para para inserir os dados da tabela, e altere as informações
correspondentes ao banco de dados usado (host, usuário, senha, etc), na classe Database [diretório lib/Database.php - linhas 4 à 7]

### Configuração
A única alteração necessária se dá no arquivo global.js [diretório assets/js/global.js],
atualize a variável root_url [na linha 3 do arquivo global.js] para a URL do projeto clonado

```sh
var root_url = 'http://localhost/prova-analista-dev/api';
```