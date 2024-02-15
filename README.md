# Gerenciador de Informações

O Gerenciador de Informações é uma aplicação web simples desenvolvida em PHP que permite aos usuários inserir, consultar e apagar informações em um banco de dados.

## Como Funciona:

1. **Inserir Informação**:
   - Acesse `inserir.php`.
   - Insira a informação desejada no campo fornecido.
   - Clique no botão "Inserir" para adicionar a informação ao banco de dados.

2. **Consultar Informação**:
   - Acesse `consultar.php`.
   - Insira o ID da informação que deseja consultar no campo fornecido.
   - Clique no botão "Consultar" para visualizar a informação correspondente.

3. **Apagar Informação**:
   - Acesse `apagar.php`.
   - Insira o ID da informação que deseja apagar no campo fornecido.
   - Clique no botão "Apagar" para remover a informação do banco de dados.

4. **Listar Informações**:
   - Acesse `listar.php`.
   - Visualize todas as informações armazenadas no banco de dados em uma tabela.

## Testando a Inserção e Exclusão de Dados:

Para testar a inserção e exclusão de dados no banco de dados:

1. Certifique-se de que o banco de dados está configurado corretamente e as credenciais estão definidas em `conexao.php`.
2. Inicie um servidor PHP e acesse a aplicação em um navegador web.
3. Na página inicial, clique em "Inserir Informação" e adicione uma nova informação.
4. Após a inserção, verifique se ela foi adicionada corretamente acessando a página "Listar Informações".
5. Para testar a exclusão de informações, acesse a página "Apagar Informação", insira o ID da informação desejada e clique em "Apagar".
6. Verifique se a informação foi removida com sucesso acessando novamente a página "Listar Informações".

## Estrutura do Projeto:

- `assets/`: Contém arquivos CSS e imagens.git 
- `layout/`: Contém arquivos PHP para o cabeçalho e rodapé.
- Arquivos PHP individuais para cada funcionalidade específica.git 
- `conexao.php`: Estabelece a conexão com o banco de dados.

## Conclusao:

Não serve para nada, apenas para estudos 😅😅😅