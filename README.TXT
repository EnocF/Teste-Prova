-- Histórico
17/08/2021
.Não testei em um servidor, mas até onde vi está funcionando bem.
.Apenas a função de Inserir pronta.
.Mais uma view do conteúdo das colunas mas nada foi inserido.

20/08/2021
.Adicionadas as funções de inserir e listar corretamente, verificados em servidor próprio.
.Devido a problemas de conexão acabei colocando "127.0.0.1" no lugar de localhost, em con.php, mas tudo bem usarem localhost aí.
.Informacoes de conexao: localhost, Usuário: root, Senha: root, banco: teste

21/08/2021
.Finalizadas as operações CRUD
.Nomes de links corrigidos
.Acrescentado "readonly" no Id na hora de editar, evitando modificações, apenas o Model pode ser alterado então.
.Acrescentado função de exportar em Excel

-- Ferramentas usadas:
.Galaxy A10.
.AWebServer: aplicativo para gerar um servidor Apache e um banco de dados MySQL no Android.
.Editor de códigos comum.
.Uma base de um CRUD simples
.Testes em Chrome e Brave.

-- Bugs conhecidos:
.Atualmente não há ainda um meio de impedir cadastro/edição de Ids duplicadas.

-- Comentarios:
Tá um sistema bem simples, bem funcional com as operações CRUD.
O que eu pretendia fazer se tivesse conseguido um servidor à tempo: uma tabela dinâmica usando javascript onde seria possível alternar entre as tabelas apenas clicando em uma caixa de seleção.
