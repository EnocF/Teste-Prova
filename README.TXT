-- Histórico
17/08/20
.Não testei em um servidor, mas até onde vi está funcionando bem.
.Apenas a função de Inserir pronta.
.Mais uma view do conteúdo das colunas mas nada foi inserido.

20/08/20
.Adicionadas as funções de inserir e listar corretamente, verificados em servidor próprio.
.Devido a problemas de conexão acabei colocando "127.0.0.1" no lugar de localhost, em con.php, mas tudo bem usarem localhost aí.
.Informacoes de conexao: localhost, Usuário: root, Senha: root, banco: teste

-- Partes funcionais
.Listar tabelas = ok
.editar = ok
.inserir = ok
.excluir = ok
.exportar em Excel = em andamento

-- Ferramentas usadas:
.Galaxy A10.
.AwebServer: aplicativo para gerar um servidor Apache e um banco de dados MySQL no Android.
.Editor de códigos comum.
.Uma base de um CRUD simples
.Testes em Chrome e Brave.

-- Bugs conhecidos:
.Atualmente não há ainda um meio de impedir cadastro/edição de Ids duplicadas.
.O arquivo gerado em Excel parece não estar sendo formatado corretamente, pelo menos nao pata minha versão do Office.

-- Comentarios:
Tá um sistema bem simples, bem funcional com as operações CRUD.
O que eu pretendia fazer se tivesse conseguido um servidor à tempo: uma tabela dinâmica usando javascript onde seria possível alternar entre as tabelas apenas clicando em uma caixa de seleção.
