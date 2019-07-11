# **CSI477-2019-01 - Proposta de Trabalho Final**
## *Grupo: Felipe Mendes, Maycon Müller & Marcos Vinícius*

--------------

<!-- Descrever um resumo sobre o trabalho. -->

### Resumo
O objetivo deste documento é apresentar uma proposta para o trabalho a ser desenvolvido na disciplina CSI477 -- Sistemas WEB I. Ele se trata de uma breve descrição sobre o tema que será abordado, bem como o escopo, as restrições e demais questões pertinentes ao contexto do mesmo, o trabalho será analisado e avaliado como requisito  parcial para avaliação do semestre letivo 2019/01 para o curso de sistemas de informação da Universidade Federal de Ouro Preto.


<!-- Apresentar o tema. -->
### 1. Tema
  A equipe optou por abordar um tema relacionado ao controle de consumo de energia elétrica de uma residência. Inicialmente, a equipe definiu que no projeto será desenvolvido um sistema web que deverá ser capaz de  cadastrar e logar um usuário no sistema e este usuário poderá cadastrar os cômodos existentes em sua residência bem como todos os aparelhos eletrônicos que fazem parte deste cômodo, com isso, o usuário  poderá visualizar o quanto cada equipamento está consumindo por tempo de operação/funcionamento e dessa forma mensurar o tempo ideal de operação de um determinado equipamento ou utensílio. O sistema também deverá ser capaz de realizar simulações referentes ao consumo geral de energia se um determinado equipamento estiver em operação por um período de tempo diferente do habitual este tempo que poderá ser escolhido pelo usuário.

  Vale a pena ressaltar que todo tipo de informação colhida pelo sistema deverá ser fornecida pelo usuário, e desta forma não serão utilizadas quaisquer tipos de integração com outros sistemas para coleta destas informações.

<!-- Descrever e delimitar o escopo da aplicação. -->
### 2. Escopo

 Algumas funcionalidades que serão implementadas no sistema de gerenciamento de consumo de energia elétrica são mostradas à seguir.

 **O sistema deverá ser capaz de:**

  * Cadastrar usuários do sistema.
  * Cadastrar equipamentos que utilizam energia elétrica e persistir esses dados por meio de um banco de dados.
  * Visualizar o valor aproximado  da sua conta de energia em um determinado momento através dos valores do padrão de sua residência.
  * Realizar cálculos de consumo diário de uma residência.
  * Realizar cálculos de consumo de energia elétrica por equipamentos.
  * Apresentar os dados relacionados ao gasto por tempo de utilização dos aparelhos eletrônicos.
  * Realizar simulações por tempo de operação de um determinado equipamento e quanto isso poderá representar no valor geral da sua conta de energia.

<!-- Apresentar restrições de funcionalidades e de escopo. -->
### 3. Restrições

Como mencionado anteriormente não haverá quaisquer tipos de integração com outros sistemas subjacentes e portanto todas informações necessárias para o processamento dos dados no sistema deverão ser fornecidas pelo o usuário do mesmo.

<!-- Construir alguns protótipos para a aplicação, disponibilizá-los no Github e descrever o que foi considerado. //-->
### 4. Protótipo

A intenção inicial é implementar uma página inicial onde o usuário poderá realizar login  ou cadastro no sistema e visualizar algumas informações sobre as funcionalidades  do sistema web.

**Página inicial**

**Página de cadastro**

Após realizar o login ou cadastro o usuário será direcionado para a página principal do sistema onde haverá uma espécie de dashboard onde ele poderá visualizar as informações anteriormente fornecidas ao software como o valor seu consumo diário por exemplo, bem como controlar todas atividades do sistema como cadastrar novos equipamentos e realizar simulações, toda essa navegação será realizada por uma barra fixa na parte superior do sistema.

**Página principal / dashboard**

**Página de cadastro de Equipamentos**

**Página de Gerenciamento de Equipamentos**

A página de gerenciamento nada mais é que uma forma de remover ou editar alguma informação anteriormente cadastrada sobre um equipamento

**Página de Simulações**

Essa página tem a função de realizar as simulações, **por exemplo:** qual o consumo diário do usuário se ele utilizar o chuveiro de sua residência por menos tempo do que o habitual...

Todas páginas foram feitas em HTML e CSS e as mesmas estão diponíveis na raiz deste respositório, podem ser acessadas diretamente clicando [aqui](https://github.com/UFOP-CSI477/2019-01-trabalho-final-2019-01-trabalho-final-maycon-marcos/tree/master/telas-html)


### 5. Referências
